@extends('master')
@section('title','Contact')
@section('content-header')
@include('includes._content-header')
@endsection
@section('photo')
@include('includes._menuphoto')
@endsection
@section('content')
<main class="content">
    <!-- CONTENT START -->
    <section class="contact">
        <h2>
            Contact
        </h2>

        <div>

            <div class="row contact-info-wrapper">
                <div class="col-xs-12">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item phone">
                                    <i class="icon fa fa-phone"></i>
            <span class="info">
                <strong>Phone:<br></strong>
                +8801757571237
            </span>
                                </div>
                                <div class="item mobile">
                                    <i class="icon fa fa-mobile"></i>
            <span class="info">
                <strong>Mobile:<br></strong>
                +8801950583763
            </span>
                                </div>
                                <div class="item email">
                                    <i class="icon fa fa-envelope-o"></i>
            <span class="info">
                <strong>E-mail:<br></strong>
                rumman142228@gmail.com<br>
            </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item address">
                                    <i class="icon fa fa-map-marker"></i>
            <span class="info">
                <strong>Address:<br></strong>
                Jhenaidah,Khulna,Bangladesh
            </span>
                                </div>
                                <div class="item website">
                                    <i class="icon fa fa-globe"></i>
            <span class="info">
                <strong>Website:<br></strong>
                <a href="http://www.rh-rumman.me">www.rh-rumman.me</a>
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="row">
                    @include('myadmin.lib.message')
                        <form class="form" action="{{route('pages.contact')}}" method="POST">
                        {{csrf_field()}}
                            <div class="col-sm-6">
                                <label>
                                    <span>Your name:</span>
                                    <input type="text" name="name" value="" placeholder="Your name" required>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <span>Your email:</span>
                                    <input type="email" name="email" value="" placeholder="Your email" required>
                                </label>
                            </div>
                            <div class="col-xs-12">
                            <label>
                                    <span>Your subject:</span>
                                    <input type="text" name="subject" value="" placeholder="Your subject" required>
                                </label>
                                <label>
                                    <span>Your message:</span>
                                    <textarea name="message" rows="4" placeholder="Your message" required></textarea>
                                </label>
                                <button type="submit" class="button">
                                    <span class="default">Send message <i class="icon fa fa-paper-plane"></i></span>
                                    <span class="sending">Sending <i class="icon fa fa-spinner fa-pulse"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- CONTENT END -->
</main>
@endsection