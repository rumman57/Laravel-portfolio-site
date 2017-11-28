@extends('master')
@section('title','Error Page')
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
<div class="col-md-9 col-sm-8 col-xs-12 content-wrapper">
<main class="content">
    <!-- CONTENT START -->
    <section>
        <img src="{{URL::asset('img/404.png')}}" width="auto" height="572">
    </section>
    <!-- CONTENT END -->
</main>
@endsection