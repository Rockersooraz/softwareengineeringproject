<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Merchant;
use App\Post;
use App\Mail;
use App\Websiteinformation;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::guard('merchant')->check()) {
            $arr['web'] = Websiteinformation::first();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['categories']=category::all();
        return view('contactus')->with($arr);
        }
        else{
            $arr['web'] = Websiteinformation::first();
            $arr['categories']=category::all();
        return view('contactus')->with($arr);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = new Mail();
        $this->validate($request,
        [  
         'name' => 'required',
         'email' =>'required',
         'subject' =>'required|max:100',
         'description' =>'required'
         
        ]); 
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['description'] = $request->description;
     
        if ($mail->create($data))
        {
            return back()->with('success', 'Your mail has been sent.');
        }
        else
        {
        return back()->with('error', 'Sorry, mail couldnot be sent.');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
