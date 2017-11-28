@extends('myadmin.adminmaster')
@section('title','Portfolio Service-List')
@section('header_js')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'link code',
      menubar: false
    });
  </script> 
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Portfolio Service-List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Portfolio Service-List</a></li>
        <li class="active">Update Portfolio Service Lists</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <small>Below Update the Portfolio Service-Lists</small>

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
       <form action="{{action('PortServiceListController@update',['id'=>$servlist->id])}}" method="post" enctype="multipart/form-data">
       {{ method_field('PUT') }}
       {{csrf_field()}}
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->title}}" name="title">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="file" class="form-control"  name="image">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <img src="{{URL::asset('img/'.$servlist->image)}}" height="100" width="100">
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <textarea class="form-control" name="description" rows="6" cols="40">
              {{$servlist->description}}
            </textarea>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         
        <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label for="sel1">Select Service:</label>
                <select class="form-control" id="sel1" name="portfolio_service_id">
                  <option>Select Service</option>
                   @foreach($services as $service)
                   <option value="{{ $service->id }}" 
                   @if($service->id ==$servlist->portfolio_service_id)
                     selected="selected"
                   @endif 
                    >{{ $service->name }}</option>
                  @endforeach
                </select>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->github}}" name="github">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->demo}}"  name="demo">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->demo_one}}"  name="demo_one">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div> 
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->demo_two}}"  name="demo_two">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>  
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$servlist->priority}}" name="priority">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="UPDATE">
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