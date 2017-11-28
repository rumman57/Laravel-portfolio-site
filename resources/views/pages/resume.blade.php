@extends('master')
@section('title','Resume')
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
<div class="col-md-9 col-sm-8 col-xs-12 content-wrapper">
<main class="content">
    <!-- CONTENT START -->
    <section>
        <div class="row">
            <div class="col-xs-8 col-md-6">
                <h2>
                    Resume
                </h2>
            </div>
            <div class="col-xs-4 col-md-6 resume-download-button">
                <a href="#" onclick="printDiv('printableArea')" class="pull-right button with-icon button-black" title="Download resume">
                    <span class="hidden-xs hidden-sm"> Download resume</span>
                    <i class="icon fa fa-download"></i></a>
            </div>
        </div>
        <div class="row" id="printableArea" style=" width:100%; height: 550px; overflow-y: scroll; ">
        	 <img src="{{URL::asset('img/'.$resumeoption->image)}}" >
        </div>
       
    </section>
    <!-- CONTENT END -->
</main>
@endsection
@section('footer_js')
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection