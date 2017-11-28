@extends('myadmin.adminmaster')
@section('title','Dashboard')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       
       <h3>Laravel Blog Site</h3>
       <p style="color:green;font-weight: bold;font-size: 16px;">You Got <span style="color: crimson">{{$notificatiosin->count()}}</span> Emails Recently</p>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer')
  @include('myadmin.lib.adminfooter')
@endsection