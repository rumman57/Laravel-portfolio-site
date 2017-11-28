<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Session;
use Image;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('myadmin.posts.showposts')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); 
        $tags = Tag::all(); 
        return view('myadmin.posts.addpost')->withCategories($categories)->withTags($tags);
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
            'title'       => 'required|max:255|min:5',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'sometimes|mimes:jpeg,jpg,png | max:1000'
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body  = $request->body;
         
         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->resize(270,210)->save($location);
            $post->image = $filename;
         }

        $post->save();
        
        if(isset($request->tags)){
            $post->tags()->sync($request->tags,false);
        }else{
             $post->tags()->sync(array());
        }
       
        Session::flash('adsuccess','The Post Have Saved Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $tags2 = array();
        $crtags= array();
        $tags_id= array();
        
        $i=0;
        foreach($post->tags as $tag){
            $crtags[$i] = $tag->name;
            $i++;
        }
         
         $i=0;
            foreach ($tags as $tag) {
            $tags2[$i] = $tag->name;
            $tags_id[$i] = $tag->id;
            $i++;
         }
        
        return view('myadmin.posts.editpost')->withPost($post)->withCategories($categories)->withTags($tags2)->withCurtags($crtags)->withTagsid($tags_id);
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
         $post = Post::find($id);
        if($request->input('slug')==$post->slug){
            $this->validate($request,array(
            'title'       => 'required|max:255|min:5',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'sometimes|mimes:jpeg,jpg,png | max:1000'
            ));
        }else{
          $this->validate($request,array(
            'title'       => 'required|max:255|min:5',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'sometimes|mimes:jpeg,jpg,png | max:1000'
            ));
        }
        
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('img/'.$filename);

            Image::make($image)->resize(270,210)->save($location);
            $oldimage = $post->image;
            $post->image = $filename;
            if(isset($oldimage)){
                unlink('img/'.$oldimage);
            }
            
         }

        $post->save();

        if(isset($request->tags)){
            $post->tags()->sync($request->tags,false);
        }else{
             $post->tags()->sync(array());
        }

        Session::flash('adsuccess','Post Updated Successfully.....');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $oldimage = $post->image;
        $post->delete();
        if(isset($oldimage)){
           unlink('img/'.$oldimage);
        }
        return redirect()->back();
    }
}
