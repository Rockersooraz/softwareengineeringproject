<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Administrator;
use Auth;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
      
        // $category= Category::join('posts', 'category.id', '=', 'posts.category_id')
        // ->select(DB::raw('count(posts.*) as posts_count'))
        // ->orderBy('posts_count', 'desc')->take(10)->get();
        // dd($category);
        // $data['category'] = Job::select(DB::Raw('category, count(*) as count'))
        //     ->orderBy('count', 'desc')
        //     ->groupBy('category')
        //     ->take(10)->get();
        $category =Category::all();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'slug'=>'required',
        ]);
        $category=new Category;
        $category->title=$request->title;
        $category->slug=$request->slug;
        $category->save();
        return redirect(route('backend.category.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request )  
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::where('id',$id)->first();
        return view('backend.category.edit',compact('category'));
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
        $this->validate($request,[
            'title'=>'required',
            'slug'=>'required',
        ]);
        $category=Category::find($id);
        $category->title=$request->title;
        $category->slug=$request->slug;
        $category->save();
        return redirect(route('backend.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts= Post::where("category_id", "=", $id )->delete();
         $category = Category::where('id',$id)->delete();
        return redirect()->back();
    }
}
