@extends('myadmin.adminmaster')
@section('title','Services')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADD Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Service</a></li>
        <li class="active">Add Services</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <small>Below add the Services</small>

              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             @include('myadmin.lib.message')
       <form action="{{route('services.store')}}" method="post">
       {{csrf_field()}}
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Service Name" name="name">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Service Icon" name="icon">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Service Priority" name="priority">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="ADD">
            </div>
            <!-- /.col -->
          </div>
      </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footer')
@include('myadmin.lib.adminfooter')
@endsection