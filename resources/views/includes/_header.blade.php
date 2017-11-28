<!DOCTYPE html>
<!-- PAGE LANGUAGE -->
<html lang="eng">
<head>
    <meta charset="UTF-8">

    <!-- PAGE TITLE, DESCRIPTION AND AUTHOR -->
    <title>Rumman Says | @yield('title')</title>
    <meta name="description" content="Hi,I am Md. Raqibul Hasan Rumman.This is my personal portfolio site.You can visit my website.I provide blog posts also to share the knowledge which I have.Thanks for visiting my site.">
    <meta name="author" content="Rumman">

    <!-- ENABLE RESPOSIBILITY ON MOBILE DEVICES -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    @yield('page-fonts')
    <!-- STYLES -->
    <link rel="icon" type="image/x-icon" href="{{URL::asset('img/favicon.png')}}" />
    <link rel="stylesheet"  href="{{URL::asset('css/styles-green.min.css')}}">
    <link rel="stylesheet"  href="{{URL::asset('css/styles-default.min6e5b.css')}}">
    <link rel="stylesheet" id="page-stylesheet"  href="{{URL::asset('css/styles-blue.min.css')}}">
    <link rel="stylesheet"  href="{{URL::asset('css/font-awesome.min.css')}}">
    @yield('stylesheets')
    <link rel="stylesheet"  href="{{URL::asset('css/style.css')}}">
    @yield('header_scripts')
     <script src="{{URL::asset('js/scripts.min6e5b.js')}}"></script>
     
</head>
<body>
     <div class="customize-wrapper hidden-xs">
        <div class="icon-wrapper">
            <i class="fa fa-cog"></i>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-center"><strong>Customize</strong></h4>

                    <form class="form-inline">
                        <div class="form-group">
                            <label for="background-color">Color version:</label>
                            <div class="colors">
                                <span class="color" data-file="{{URL::asset('css/styles-default.min6e5b.css')}}" style="background-color: #cc2127" title="Default"></span>
                                <span class="color" data-file="{{URL::asset('css/styles-blue.min.css')}}" style="background-color: #1487BC" title="Blue"></span>
                                <span class="color" data-file="{{URL::asset('css/styles-green.min.css')}}" style="background-color: #1FAD23" title="Green"></span>
                            </div>
                            @yield('blog-settings')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>