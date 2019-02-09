<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Websiteinformation;

class StaticpagesController extends Controller
{
    public function privacy(Request $request)
    {
     $arr['categories']=category::all();
     $arr['web'] = Websiteinformation::first();
     return view('privacy')->with($arr);
    }
    public function terms(Request $request)
    {
     $arr['categories']=category::all();
     $arr['web'] = Websiteinformation::first();
     return view('terms')->with($arr);
    }

}
