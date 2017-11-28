<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Models\Post;
use App\Models\Category;

class blogController extends Controller
{
   public function getSinglepost($slug){
     $post = Post::where('slug','=',$slug)->first();
      return view('blog.single')->withPost($post);
   }

   public function getCategoryPage($name){
      
      $getcatid = Category::where('name','=',$name)->first();
      $catid = $getcatid->id;
      $posts = Post::where('category_id','=',$catid)->orderBy('id','desc')->paginate(5);
      $categories = Category::with('posts')->get();
      return view('blog.categorypage',compact('categories'))->withPosts($posts);
   }


   public function postSearchData(Request $request){
      
      $ser_text = $request->get('search');
      $page = $request->get('page');
      $record_per_page = 5;
      $start_from = ($page-1)* $record_per_page;  

      $posts = Post::where('title','LIKE','%'.$ser_text.'%')
                   ->orderBy('id','desc')
                   ->take($record_per_page)
                   ->skip($start_from)
                   ->get();

      $posts1 = Post::where('title','LIKE','%'.$ser_text.'%')
                    ->get();
     return view('myadmin.search.searchresult',compact('posts'),compact('posts1'))->withPage($page);
   }

   public function postSearchByCategory(Request $request,$name){
      
      $ser_text = $request->get('search');
      $page = $request->get('page');
      $record_per_page = 5;
      $start_from = ($page-1)* $record_per_page;

      $getcatid = Category::where('name','=',$name)->first();
      $catid = $getcatid->id;

      $posts = Post::where('title','LIKE','%'.$ser_text.'%')
                   ->where('category_id','=',$catid)
                   ->orderBy('id','desc')
                   ->take($record_per_page)
                   ->skip($start_from)
                   ->get();

      $posts1 = Post::where('title','LIKE','%'.$ser_text.'%')
                    ->where('category_id','=',$catid)
                    ->get();

     return view('myadmin.search.searchresult',compact('posts'),compact('posts1'))->withPage($page);
   }

}
