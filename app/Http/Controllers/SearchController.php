<?php
namespace App\Http\Controllers;
use App\Category;
use App\Merchant;
use App\Post;
use App\Websiteinformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class SearchController extends Controller
{
    public function search(Request $request)
    { 
        if (Auth::guard('merchant')->check()) {
            $arr['categories']=category::all();
            $arr['web'] = Websiteinformation::first();
           $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
           $q = Input::get ( 'value' );
           $posts = POST::where('title','LIKE','%'.$q.'%')->get();
           $arr['posts'] = $posts;
        //    dd($posts);
           if(count($posts) > 0)
            return view('search-result')->with($arr);
           else return view ('search-result')->withMessage('No Details found. Try to search again !')->with($arr);
        }
        else
        {
            $arr['categories']=category::all();
            $arr['web'] = Websiteinformation::first();
            $q = Input::get ( 'value' );
            $posts = POST::where('title','LIKE','%'.$q.'%')->get();
            $arr['posts'] = $posts;
            if(count($posts) > 0)
            return view('search-result')->with($arr);
            else return view ('search-result')->withMessage('No Details found. Try to search again !')->with($arr);
        }
    }
    public function detail($id ,Request $request )
    { 
        if (Auth::guard('merchant')->check()) {
            $arr['web'] = Websiteinformation::first();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['post']= post::find($id);
        $arr['categories']=category::all();
        $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
        return view('merchant.viewpost')->with($arr);
        }
        else
        {
            $arr['web'] = Websiteinformation::first();
         $arr['post']= post::find($id);
        $arr['categories']=category::all();
        $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
        return view('merchant.viewpost')->with($arr);
        }
    }
}
