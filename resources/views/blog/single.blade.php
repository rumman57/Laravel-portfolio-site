@extends('master')
@section('title')
Blog-{{$post->slug}}
@endsection

@section('content')
<div class="col-md-9 col-sm-8 col-xs-12 content-wrapper">
 <main class="content">
        <!-- CONTENT START -->
        <section class="blog blog-entry">
            <h2>
                {{$post->title}}
            </h2>

            <div>
                <div class="row post-details">
                    <div class="col-xs-6 post-details-left">
                        <div class="category-name post-detail-info">
                            <i class="icon fa fa-folder"></i>
                            {{$post->category->name or "Undefined"}}
                        </div>
                    </div>
                    <div class="col-xs-6 post-details-right">
                        <div class="date post-detail-info">
                            {{date('M j,Y',strtotime($post->created_at))}} <i class="icon fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
                 <div class="sing-page-img">
                 @if(isset($post->image))
                <img src="{{URL::asset('img/'.$post->image)}}"/>
                @endif
                </div>
                <div class="single-page">
                   {!!html_entity_decode($post->body)!!}
                </div>
                <div class="row post-details">
                    <div class="col-xs-12 post-details-left">
                        <div class="post-detail-info">
                            <i class="icon fa fa-user"></i>
                            <a href="#">Rumman</a>
                        </div>
                        <div class="post-detail-info">
                            <i class="icon fa fa-tags"></i>
                            @foreach($post->tags as $tag)
                     <span class="label label-success">{{$tag->name}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTENT END -->
    </main>
@endsection