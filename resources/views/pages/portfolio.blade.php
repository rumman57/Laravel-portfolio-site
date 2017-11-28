@extends('master')
@section('title','Portfolio')
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
<div class="col-md-9 col-sm-8 col-xs-12 content-wrapper">
<main class="content">
    <!-- CONTENT START -->
    <section>
        <h2>
            Portfolio
        </h2>

        <div class="portfolio">
            <p style="margin: 20px;font-family: 'Vollkorn', serif;font;font-size: 18px;text-align: justify;">
                {{$siteoption->portfolio_desc}}
            </p>

            <div class="filter text-center">
                <a href="#" class="active" data-type="all">All</a>

                @foreach($servlists as $servlist)
                <span class="spacer">&bull;</span>
                <a href="#" data-type="{{$servlist->data_type}}">{{$servlist->name}}</a>
                @endforeach
            </div>

            <ul class="portfolio-list">

             @foreach($listservices as $listservice)
                <li data-type="{{$listservice->portfolio_service->data_type}}">
                    <a href="#{{$listservice->id}}">
                        <img src="{{URL::asset('img/'.$listservice->image)}}" height="245" width="245" />

                        <div class="hover-overlay">
                            <div class="project-title"><span>{{$listservice->title}}</span></div>
                            <div class="project-description">
                                {{$listservice->portfolio_service->name}} project
                            </div>
                        </div>
                    </a>
                    <div id="{{$listservice->id}}" class="mfp-hide popup row">
                        <div class="text-center">
                            <img src="{{URL::asset('img/'.$listservice->image)}}"/>
                        </div>
                        <div class="info">
                            <div class="title" style="margin-top: 40px;font-size: 25px;">{{$listservice->title}}</div>
                             <div  class="portfolio_body">
                             <h3>Features: </h3>
                                 {!! html_entity_decode($listservice->description)!!}
                             </div>
                           <div style="margin: 20px;font-family: 'Vollkorn', serif;font;">
                            <p><span class="fa fa-github"></span><span style="font-size: 16px;font-weight: bold;"> GitHub Link:  </span> <a href="{{$listservice->github or "#"}}" target="_blank">{{$listservice->github or "N/A"}}</a> </p>

                            <p style="margin-top: -20px;"><span class="fa fa-envira"></span> <span style="font-size: 16px;font-weight: bold;"> Demo Link:  </span>
                            <a href="{{$listservice->demo or "#"}}" target="_blank">{{$listservice->demo or "N/A"}}</a></p>

                            <p style="margin-top: -20px;"><span class="fa fa-envira"></span> <span style="font-size: 16px;font-weight: bold;"> Demo Link One(Admin Panel):  </span>
                            <a href="{{$listservice->demo_one or "#"}}" target="_blank">{{$listservice->demo_one or "N/A"}}</a></p>

                            <p style="margin-top: -20px;"><span class="fa fa-envira"></span> <span style="font-size: 16px;font-weight: bold;"> Demo Link Two:  </span>
                            <a href="{{$listservice->demo_two or "#"}}" target="_blank">{{$listservice->demo_two or "N/A"}}</a></p>
                            
                            </div>
                        </div>
                    </div>
                </li>
              @endforeach

                <li class="placeholder"></li>
                <li class="placeholder"></li>
                <li class="placeholder"></li>
                <li class="placeholder"></li>
            </ul>
          <!--  <div class="portfolio-details-popup" data-navigation="true" data-closebutton="true" data-dimmedbackground="true">
                <div class="project-details-wrapper">
                    <div class="project-info">
                        <h3 class="project-title"></h3>

                        <div class="project-image"><img src="http://themes.aroch.pl/aro/demo/default/images/blank.png" alt=""/></div>
                        <div class="project-description"></div>
                    </div>
                    <div class="popup-controls">
                        <div class="popup-close"><i class="icon fa fa-times"></i></div>
                        <div class="popup-navigation">
                            <div class="prev-project"><i class="icon fa fa-chevron-left"></i></div>
                            <div class="next-project"><i class="icon fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- CONTENT END -->
</main>
@endsection