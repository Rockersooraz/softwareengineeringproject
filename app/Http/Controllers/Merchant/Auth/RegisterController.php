<?php

namespace App\Http\Controllers\Merchant\Auth;
use Illuminate\Http\Request;

use App\Merchant;
use App\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Category;
use App\Websiteinformation;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/merchant';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('merchant.guest:merchant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Merchant
     */
    public function store(Request $request,Merchant $merchant)
    {

      $this->validate($request,[
         'name' => 'required|max:255',
         'email' => 'required|email|max:255|unique:merchants',
         'password' => 'required|min:6|confirmed',
         'phone' => 'required|min:9',
         'mobile' => 'required|min:9',
         'address' => 'required',
         'established_date' => 'required',
      ]);
     
      if ($request->hasFile('image')) {
        $destination = public_path("/images/ProfilePictures");
        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = str_random() . "." . $extension;
        $file->move($destination, $filename);
        // $data['image'] = $filename;
         }
        else
        {
            $filename = '';
        }
       
         $merchants=new Merchant;
     
      $merchant->image = $filename;       
      $merchant->name=$request->name;
      $merchant->phone=$request->phone;
      $merchant->mobile=$request->mobile;
      $merchant->address=$request->address;
      $merchant->description=$request->description;
      $merchant->email=$request->email;
      $merchant->password= bcrypt($request->password);
      $merchant->established_date=$request->established_date;

      $merchant->save();
 
      return redirect()->route('merchant.dashboard');
    }

    public function editprofile($id, Request $request )
    {
        $arr['categories']=category::all();
        $arr['merchant']= merchant::find($id);
        $merchant = merchant::find($id);
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        return view('merchant.profile')->with($arr);
    }

    // protected function create(array $data)
    // {
    //     // notifications
    //     Notification::create([
    //         'id' =>'increments',
    //           'title' => 'User Registered',
    //           'description' => $data['name'] . ' registered'
    //     ]);

    //     return Merchant::create([
    //         'name' => $data['name'],
    //         'phone' => $data['phone'],
    //         'mobile' => $data['mobile'],
    //         'address' => $data['address'],
    //         'description' => $data['description'],
    //         'established_date' => $data['established_date'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),     
    //     ]);

        
    // }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $arr['categories']=category::all();
        $arr['web'] = Websiteinformation::first();
        return view('merchant.auth.register')->with($arr);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('merchant');
    }

}
