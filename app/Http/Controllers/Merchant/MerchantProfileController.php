<?php
namespace App\Http\Controllers\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Merchant;
use App\Post;
use App\Websiteinformation;

class MerchantProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('merchant.auth:merchant');
    // }
    public function index(Request $request)
    {

        $arr['merchantid']= $merchant = $request->merchant.Auth::guard('merchant')->id();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['merchantemail'] = $request->merchant.Auth::guard('merchant')->user()->email;
        $arr['phone'] = $request->merchant.Auth::guard('merchant')->user()->phone;
        $arr['companyname'] = $request->merchant.Auth::guard('merchant')->user()->company_name;
        $arr['companylocation'] = $request->merchant.Auth::guard('merchant')->user()->company_address;
       return view('merchant.profile')->with($arr);
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
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    { 
        if (Auth::guard('merchant')->check()) {
        $user = Merchant::find($id);
        $arr['merchant']= merchant::find($id);
        $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
        $arr['posts'] = Post::where("merchant_id", "=", $user->id)->get();
        $arr['categories'] = category::all();
        $arr['web'] = Websiteinformation::first();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        return view('seller-profile')->with($arr);
        }
        else{
            $arr['web'] = Websiteinformation::first();
            $user = Merchant::find($id);
            $arr['merchant']= merchant::find($id);
            $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
            $arr['posts'] = Post::where("merchant_id", "=", $user->id)->get();
            $arr['categories'] = category::all();
    
            // $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
            return view('seller-profile')->with($arr);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request )
    {
        $arr['categories']=category::all();
        $arr['merchant']= merchant::find($id);
        $arr['web'] = Websiteinformation::first();
        $merchant = merchant::find($id);
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        return view('merchant.profile')->with($arr);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchant $merchant)
    {
        // $a=  $request->fname;
        // dd($a);
        if(isset($request->image)&& $request->image->getClientOriginalName()) {
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->image->move(public_path().'/images/ProfilePictures', $file);
        }
        else
        {
            $file = $request->fname;
        }
        $id =   $request->id;
        $data['image'] =  $file;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['mobile'] = $request->mobile;
        $data['address'] = $request->address;
        $data['description'] = $request->description;
        $data['email'] = $request->email;
        $data['website'] = $request->website;
        // $merchant->established_date=$merchant -> established_date;
        // $merchant->password=$merchant -> password;
        if (Merchant::where('id',$id)->update($data)) {
            return redirect()->route('merchant.dashboard')->with('success', 'The record has been successfully updated');
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
