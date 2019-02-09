<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Merchant;
use App\Category;
use App\Websiteinformation;

class CommentController extends Controller
{
  public function __construct()
  {
    $this->middleware('merchant.auth:merchant');
  }
  public function store(Post $post,Request $request, Comment $comment)
  {
    
    $name = request()->merchant.Auth::guard('merchant')->user()->name;
    $id = request()->merchant.Auth::guard('merchant')->user()->id;
    $owner_id = $post->merchant_id;
    if($id ==  $owner_id )
    {
     return back()->with('errors','You Can not add review on your own post');
    }
    else{
       $comment->body=$request->body;
       $comment->Commented_id=$owner_id;
       $comment->Post_id=$post->id;
       $comment->User_name=$name;
       $comment->User_id=$id;
       $comment->save();
       return back()->with('success','Review added successfully');
    }
  }
  public function show($id ,Request $request)
  {
    $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
    $arr['categories']=category::all();
    $arr['merchant']= merchant::find($id);
    $merchantid= $merchant = $request->merchant.Auth::guard('merchant')->id();
    $arr['merchantname'] = $request->merchant.Auth::guard('merchant')->user()->name;
    $arr['comments']= Comment::where("commented_id", "=", $merchantid )->get();
    $arr['web'] = Websiteinformation::first();
    
    // $posts= Post::where("merchant_id", "=", $merchantid )->get();
    // $c =comment::where("Post_id", "=" ,$posts);
   
    // dd($c);
   return view ('merchant.messages')->with($arr);
  }
}
