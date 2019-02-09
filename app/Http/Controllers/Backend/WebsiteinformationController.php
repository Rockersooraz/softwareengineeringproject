<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Websiteinformation;

class WebsiteinformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['websiteinfo'] = Websiteinformation::all();
       return view('backend.websiteinformation.index')->with($arr);
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
    public function store(Request $request,Websiteinformation $Websiteinformation)
    {
        $this->validate($request,[
            'image' => 'required',
         ]);
         if ($request->hasFile('image')) {
           $destination = public_path("/images/WebsiteLogo");
           $file = $request->image;
           $extension = $file->getClientOriginalExtension();
           $filename = str_random() . "." . $extension;
           $file->move($destination, $filename);
           $Websiteinformation=new Websiteinformation;
       
           $Websiteinformation->logo = $filename;     
           $Websiteinformation->phone = $request->phone; 
           $Websiteinformation->email = $request->email;  
           $Websiteinformation->address1 = $request->address1;
           $Websiteinformation->address2 = $request->address2;
           $Websiteinformation->description = $request->description;
           $Websiteinformation->save();
           return back()->with('success','information posted');
         }
         else{
             return back()->with('error','oops!! something went wrong');
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
    public function update(Request $request, Websiteinformation $Websiteinformation)
    {
        if(isset($request->image)&& $request->image->getClientOriginalName()) {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->image->move(public_path().'/images/WebsiteLogo', $file);
        }
        else
        {
            $file = $request->fname;
        }
        $id =  $request->id;
        $data['logo'] = $file;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address1'] = $request->address1;
        $data['address2'] = $request->address2;
        $data['description'] = $request->description;
        // $merchant->established_date=$merchant -> established_date;
        // $merchant->password=$merchant -> password;
        if (Websiteinformation::where('id',$id)->update($data)) {
            return back()->with('success', 'The record has been successfully updated');
        }
        else{
            return back()->with('error','oops!! something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
