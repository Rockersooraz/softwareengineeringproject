<?php
namespace App\Http\Controllers\Merchant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Merchant;
use App\Websiteinformation;
class PasswordController extends Controller
{
    public function index(Request $request,$id)
    {
        $arr['merchant']= Merchant::find($id);
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['categories'] = category::all();
        $arr['web'] = Websiteinformation::first();
        return view('merchant.changepassword')->with($arr);
   }
   public function store($id)
   {
       $merchant = Merchant::find($id);
       
       if (Hash::check(Input::get('current_password'), $merchant['password'])
           && Input::get('new_password') == Input::get('confirm_password')) {
           $merchant->password = bcrypt(Input::get('new_password'));
           $merchant->save();
        //    return redirect()->route('merchant.dashboard');
           return back()->with('success', 'Password Changed');
       } else {
           return back()->with('error', 'Password didnot Matched!!');
       }
   }
}
