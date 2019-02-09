<?php
// use Intervention\Image\Facades\Image;
// use config\image as Image;
// use Image;
//use Intervention\Image\ImageManagerStatic as Image;
namespace App\Http\Controllers\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Merchant;
use App\Post;
use App\Websiteinformation;
class PostController extends Controller
{
    protected $redirectTo = '/merchant/login';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('merchant.auth:merchant');
    }

    public function index(Request $request)
    {
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['web'] = Websiteinformation::first();
        $arr['categories']=Category::all();
        return view('merchant.post')->with($arr);
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
    public function store(Request $request,post $post)
    {
        $this->validate($request,
           [  
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif',
            'title' =>'required',
            'description' =>'required|max:1000',
            'category' =>'required',
            'location' =>'required'
           ]); 
          if($request->hasfile('filename'))
           { 
            foreach($request->file('filename') as $image) 
                 { 
                     $name= $image->getClientOriginalExtension();
                     $imagepath=$image->getRealPath();
                     $new_name = rand(012345,9999999).'.'.$name;
                     $image->move(public_path().'/images/posts', $new_name);
                     $data = $new_name;
                     $images[] = $new_name;
                 } 
                    
                     $post = new Post;
                     $post->filename=json_encode($images); 
                     $post->type=$request->type;
                     $post->title=$request->title;
                     $post->location=$request->location;
                     $post->latitude=$request->latitude;
                     $post->longitude=$request->longitude;
                     $post->description=$request->description;
                     $post->category_id=$request->category;
                     $post->merchant_id=$request->merchant.Auth::guard('merchant')->id();
                     $post->save();
                     return redirect()->route('merchant.dashboard');
             }
             else{
                return back()->with('error', 'oops!! something went wrong');
             }
            
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id  , Request $request )
    {  
        $arr['post']= post::find($id);
        $arr['randposts'] = Post::inRandomOrder()->take(2)->get();
        $arr['web'] = Websiteinformation::first();
        $arr['merchantid']= $merchant = $request->merchant.Auth::guard('merchant')->id();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['categories']=category::all();
      
        return view('merchant.viewpost')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $arr['post']= post::find($id);
        $arr['web'] = Websiteinformation::first();
        $arr['merchantid']= $merchant = $request->merchant.Auth::guard('merchant')->id();
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $arr['categories']=category::all();
        return view('merchant.editpost')->with($arr);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,post $post)
    {
        $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
        $this->validate($request,
        [  
            'title' =>'required',
            'description' =>'required|max:1000',
            'category' =>'required',
            'location' =>'required'
         ]); 
       if($request->hasfile('filename'))
        { 
         foreach($request->file('filename') as $image) 
            { 
                  $name= $image->getClientOriginalExtension();
                  $new_name = rand(012345,9999999).'.'.$name;
                  $image->move(public_path().'/images/posts', $new_name); 
                  $data = $new_name;
                  $images[] = $new_name;
            }   
        }
        else
        {
            $images[] = $request->image;
            
        }
                  $final_img = json_encode($images); 
                  $post->filename=$final_img;
                  $post->title=$request->title;
                //   $post->price=$request->price;
                  $post->location=$request->location;
                  $post->latitude=$request->latitude;
                  $post->longitude=$request->longitude;
                  $post->description=$request->description;
                  $post->category_id=$request->category;
//                  dd($post->category);
                  $post->merchant_id=$request->merchant.Auth::guard('merchant')->id();
                  $post->save();
                  return redirect()->route('merchant.dashboard');
                 
    } 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments= Comment::where("Post_id", "=", $id )->delete();
        $post = post::where('id',$id)->delete();
        return redirect()->route('merchant.dashboard');
    }
    // public function search($SearchKey)
    // { 
    //     $Posts = Post::search('SearchKey')->get();
    //     return $Posts;
    //     return view('search-result',compact('Posts'));
    // }
}
