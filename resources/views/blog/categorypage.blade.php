@extends('master')
@php
   $curcat =  Request::segment(2);
@endphp
@section('title')
Blog-{{$curcat}}
@endsection
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
<div class="col-md-9 col-sm-8 col-xs-12 content-wrapper">
 <main class="content">
	<!-- CONTENT START -->
	<section class="blog">
	    <h2>
	        Blog
	    </h2>
	<div class="row">
	<div class="pull-left">
	    <div class="dropdown bldb form-wrapper1 ">
	      <button class="dropdown-toggle" type="button" data-toggle="dropdown">Posts By  {{$curcat}}
	      <span class="caret"></span></button>
	      <ul class="dropdown-menu">
	       @foreach($categories as $category)
	        <li><a href="{{route('blog.category',strtolower($category->name))}}">{{$category->name}} ({{ $category->posts->count() }})</a></li>
	        @endforeach
	      </ul>
	    </div>
	</div>
	<!-- Serch Bar Start-->
	<div class="blogsearch pull-right">
	     <form class="form-wrapper cf" id="formsid" method="POST" action="{{route('blog.searchcategory',$curcat)}}">  
	      {{ csrf_field() }}
	      <input type="text" id="search" placeholder="Search here..." required>
	      <button type="submit" id="submit">Search</button>
	   </form>  
	</div>
	<!--Search Bar End-->
	</div>
	    <div id="search_result">
	        <ul class="blog-list ">


          @foreach($posts as $post)
	            <li>
	                <div class="clearfix">
                        @if(isset($post->image))
                             <div class="post-photo">
	                        <a href="{{route('blog.single',$post->slug)}}">
	                          @if(isset($post->image))
	                            <img src="{{URL::asset('img/'.$post->image)}}" alt=""/>
	                          @endif
	                        </a>
	                    </div>


	                    <div class="post-info">
	                        <h3>
	                            <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
	                        </h3>
	                        <div class="post-details">
	                            <div class="post-detail-info">
	                                <i class="icon fa fa-user"></i>
	                                <a href="#">Rumman</a>
	                                <i class="icon fa fa-folder"></i>
	                               {{$post->category->name or "Undefined"}}
	                            </div>
	                        </div>
	                        <div class="post_body">
	                        <p>{!!substr(html_entity_decode($post->body),0,350)!!}{{strlen(strip_tags($post->body))>350 ? "......":""}}</p>
	                        </div>
	                        <div style="overflow: hidden;">
	                        <a href="{{route('blog.single',$post->slug)}}" class="button button-black button-small read-more">
	                            Read more <i class="icon fa fa-angle-right"></i></a>
	                         </div>
	                    </div>

                        @else
                           
                           <div class="post-info" style="width: 100%;">
	                        <h3>
	                            <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
	                        </h3>
	                        <div class="post-details">
	                            <div class="post-detail-info">
	                                <i class="icon fa fa-user"></i>
	                                <a href="#">Rumman</a>
	                                <i class="icon fa fa-folder"></i>
	                               {{$post->category->name or "Undefined"}}
	                            </div>
	                        </div>
	                        <div class="post_body">
	                        <p>{!!substr(html_entity_decode($post->body),0,350)!!}{{strlen(strip_tags($post->body))>350 ? "......":""}}</p>
	                        </div>
	                        <div style="overflow: hidden;">
	                        <a href="{{route('blog.single',$post->slug)}}" class="button button-black button-small read-more">
	                            Read more <i class="icon fa fa-angle-right"></i></a>
	                         </div>
	                    </div>
                        @endif
	                  
	                </div>
	            </li>

              @endforeach
	        </ul>


	        <!--******** Pagination Start *********-->
	    <div class="text-center" style="text-align: center;">
          @if ($posts->hasPages())
		    <ul class="pagination" style="display: inline-flex;">
		        {{-- Previous Page Link --}}
		        @if ($posts->onFirstPage())
		            <li class="disabled"><span>&laquo;</span></li>
		        @else
		            <li><a href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;</a></li>
		        @endif

		        @if($posts->currentPage() > 3)
		            <li class="hidden-xs"><a href="{{ $posts->url(1) }}">1</a></li>
		        @endif
		        @if($posts->currentPage() > 4)
		            <li class="disabled hidden-xs"><span>...</span></li>
		        @endif
		        @foreach(range(1, $posts->lastPage()) as $i)
		            @if($i >= $posts->currentPage() - 2 && $i <= $posts->currentPage() + 2)
		                @if ($i == $posts->currentPage())
		                    <li class="active"><span>{{ $i }}</span></li>
		                @else
		                    <li><a href="{{ $posts->url($i) }}">{{ $i }}</a></li>
		                @endif
		            @endif
		        @endforeach
		        @if($posts->currentPage() < $posts->lastPage() - 3)
		            <li class="disabled hidden-xs"><span>...</span></li>
		        @endif
		        @if($posts->currentPage() < $posts->lastPage() - 2)
		            <li class="hidden-xs"><a href="{{ $posts->url($posts->lastPage()) }}">{{ $posts->lastPage() }}</a></li>
		        @endif

		        {{-- Next Page Link --}}
		        @if ($posts->hasMorePages())
		            <li><a href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
		        @else
		            <li class="disabled"><span>&raquo;</span></li>
		        @endif
		      </ul>
            @endif
          </div> <!-- Text Center -->

             <!--******** Pagination End *********-->
	        
	    </div>
	</section>
	<!-- CONTENT END -->
	</main>
@endsection
@section('footer_js')
<script type="text/javascript" src="{{ URL::asset('js/ajax_main.js') }}"></script>  
@endsection