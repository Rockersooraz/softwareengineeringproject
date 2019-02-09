<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrator;
use Auth;
//use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
//        $this->middleware('guest:admin')->except('logout');

    }

    public function index()
    {
        $data['admins'] = Administrator::paginate(5);
        return view('backend.admin.indexAdmin')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        $admin = new Administrator();
        $this->validate($request,
            [
                'name' => 'required',
                'phone' => 'required|numeric',
                'address' => 'required',
                'company_name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
            ]);
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['company_name'] = $request->company_name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        if ($admin->create($data)) {
            return redirect()->route('backend.admin.create')->with('success', 'The record has been successfully inserted.');
        }
        return redirect()->route('backend.admin.create')->with('error', 'Sorry, the record couldnot be stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//        if (!$request->id) {
//            return redirect()->back();
//        }
        $data['admin'] = Administrator::find($id);
//        $adminId = $request->id;
//        $admin = Admin::where('id', $adminId)->first();
        return view('backend.admin.showAdmin')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $admin)
    {
        $data['admin'] = $admin;
        return view('backend.admin.editAdmin')->with($data);

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
        if ($request->isMethod('get')) {
            return redirect()->route('backend.admin.index');
        }
        $adminId = $request->id;
        $this->validate($request,
            [
                'name' => 'required',
                'phone' => 'required|numeric',
                'address' => 'required',
                'company_name' => 'required',
                'email' => 'required'
            ]);
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['company_name'] = $request->company_name;
        $data['email'] = $request->email;
        if (Administrator::where('id', $adminId)->update($data)) {
            return redirect()->route('backend.admin.index')->with('success', 'The record has been successfully updated');
        }
        return redirect()->route('backend.admin.index')->with('error', 'Sorry, the record couldn\'t be updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $admin)
    {
//$id = $request->id;
//        $adminData = Admin::find($id);
//        $adminImage = $adminData->image;
//        $imagePath = public_path('images/backend/admin/' . $adminImage);
//        if (file_exists($imagePath) && is_file($imagePath)) {
//            unlink($imagePath);
//        }
//
//        if ($adminData::where('id', $id)->delete()) {
//            return redirect()->route('admin.admin.index')->with('success', 'admin was deleted');
//        }
//    }
        $admin->delete();
        return redirect()->route('backend.admin.index');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('backend.login');
        }

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required',
                'password' => 'required',

            ]);

            $email = $request->email;
            $password = $request->password;
            $remember = isset($request->remember) ? true : false;

            if (Auth::guard('administrator')->attempt(['email' => $email, 'password' => $password], $remember)) {

                return redirect()->intended(route('backend.admin'));
            }else {
                Auth::guard('administrator')->logout();
                return redirect()->back();
            }
            $message1 = "You are not registered.";
            return redirect()->route('login')->with('success', $message1);;
        }

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
