<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Merchant;
use App\Post;
use App\Customads;
use App\CustomadsII;
use App\CustomadsIII;
use App\Websiteinformation;


class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if (Auth::guard('merchant')->check()) {
            $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
            $arr['web'] = Websiteinformation::first();
            $arr['add1'] = Customads::first();
            $arr['add2'] = CustomadsII::first();
            $arr['add3'] = CustomadsIII::first();
            $arr['randposts'] = Post::inRandomOrder()->take(3)->get();
            $arr['randomposts'] = Post::inRandomOrder()->take(10)->get();
            $arr['recentposts'] = Post::orderBy('created_at', 'desc')->take(8)->get();
            $arr['categories']=category::all();
            return view('welcome')->with($arr);
            }
    
            else
            {  
             $arr['add1'] = Customads::first();
             $arr['add2'] = CustomadsII::first();
             $arr['add3'] = CustomadsIII::first();
             $arr['web'] = Websiteinformation::first();
            $arr['randposts'] = Post::inRandomOrder()->take(3)->get();
            $arr['recentposts'] = Post::orderBy('created_at', 'desc')->take(8)->get();
            $arr['randomposts'] = Post::inRandomOrder()->take(10)->get();
            $arr['categories']=category::all();
            return view('welcome')->with($arr);
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
