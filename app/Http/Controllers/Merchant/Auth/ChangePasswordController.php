<?php

namespace App\Http\Controllers\Merchant\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChnagePasswordController extends Controller
{
    public function index(Request $request)
     {
     return view('merchant.changepassword');
    }
}
