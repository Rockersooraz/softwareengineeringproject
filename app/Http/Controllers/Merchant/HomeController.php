<?php

namespace App\Http\Controllers\Merchant;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Merchant;
use App\Post;
use App\Websiteinformation;

class HomeController extends Controller
{

    protected $redirectTo = '/merchant/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('merchant.auth:merchant');
    }

    /**
     * Show the Merchant dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $userName = $request->merchant.Auth::guard('merchant')->user()->id;
        $arr['merchant'] = Merchant::where('id',$userName)->first();
        $arr['categories'] = category::all();
        $arr['web'] = Websiteinformation::first();
        $merchantid= $merchant = $request->merchant.Auth::guard('merchant')->id();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['posts']= Post::where("merchant_id", "=", $merchantid )->get();
        return view('merchant.home')->with($arr);
    }
    public function show() 
    { 
        $arr['web'] = Websiteinformation::first();
        $arr['merchantname']= $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['categories']=Category::all();
        return view('merchant.post')->with($arr);
    }
 }