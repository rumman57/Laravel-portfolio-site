@extends('master')
@section('title','Home-About Me')
@section('content-header')
@include('includes._content-header')
@endsection
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
 <main class="content">
    <!-- CONTENT START -->
    <section>
        <h2>
            About me
        </h2>

        <div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="lead">{{$inpgoptions->about_me_title}}</p>

                    <p style="text-align: justify;">
                       {{$inpgoptions->about_me}}
                    </p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-user"></i> <strong>My name</strong>: Md.Raqibul Hasan Rumman
                        </li>
                        <li>
                            <i class="fa fa-gift"></i> <strong>Age</strong>: {{$inpgoptions->age}}
                        </li>
                        <li>
                            <i class="fa fa-rocket"></i> <strong>Experience</strong>: {{$inpgoptions->experience}}
                        </li>
                        <li>
                            <i class="fa fa-globe"></i> <strong>Website</strong>:
                            <a href="http://www.rh-rumman.me"><i class="fa fa-plus-square" aria-hidden="true"></i> www.rh-rumman.me</a><br>
                            <a href="http://www.bd-techzone.com"><span style="margin-left:104px;"><i class="fa fa-plus-square" aria-hidden="true"></i> www.bd-techzone.com</span></a>
                            <a href="http://www.rumman57.blogspot.com"><span style="margin-left:104px;"><i class="fa fa-plus-square" aria-hidden="true"></i> www.rumman57.blogspot.com</span></a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i> <strong>Address</strong>: {{$inpgoptions->address}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     

        <!-- What I do -->
        <h3>My services</h3>

        <div class="services">

        @foreach($services->chunk(2) as $Chunkservices)
            <div class="row">

            @foreach($Chunkservices as $service)

                 <div class="col-xs-12 col-sm-6">
                    <div class="service-box clearfix">
                        <div class="pull-left">
                            <i class="icon {{$service->icon}}"></i>
                        </div>
                        <div class="title">
                            {{$service->name}}
                        </div>
                        <p>
                           <ul style="list-style: none;">
                             @foreach($service->service_lists as $servlist)
                               <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> {{$servlist->name}}</li>
                             @endforeach
                           </ul> 
                        </p>
                    </div>
                </div>
               @endforeach 
            </div>
           @endforeach

        </div>
    </section>
    <!-- CONTENT END -->
</main>
@endsection