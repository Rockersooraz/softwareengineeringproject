<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Websiteinformation;

class FilterController extends Controller
{
    public function show($id, Request $request )  
    {
        if (Auth::guard('merchant')->check()) {
        $arr['categories']=category::all();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        // $categories = $request->category::all();
        $arr['Posts']= Post::where( "category_id", "=", $id )->get();
        $arr['web'] = Websiteinformation::first();
        return view('filtered-result')->with($arr);
        }
        else{
            $arr['categories']=category::all();
            $arr['web'] = Websiteinformation::first();
            $arr['Posts']= Post::where( "category_id", "=", $id )->get();
            return view('filtered-result')->with($arr);
        }
    }
}
