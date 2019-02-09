<?php

namespace App\Http\Controllers\Backend\CustomAds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomadsII;

class CustomAdsIIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads =CustomadsII::all();
        return view('backend.custom-ads.ad-2',compact('ads'));
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
    public function store(Request $request,CustomadsII $CustomadsII)
    {
        $this->validate($request,[
            'image' => 'required',
         ]);
         if ($request->hasFile('image')) {
           $destination = public_path("/images/Customads-2");
           $file = $request->image;
           $extension = $file->getClientOriginalExtension();
           $filename = str_random() . "." . $extension;
           $file->move($destination, $filename);
           $customads=new CustomadsII;
           $customads->title = $request->title;    
           $customads->filename = $filename;       
           $customads->save();
           return back()->with('success','Successfully uploaded');
         }
         else{
             return back()->with('error','File not submitted');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomadsII::destroy($id);
        return back();
    }
}
