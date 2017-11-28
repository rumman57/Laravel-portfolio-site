@extends('myadmin.adminmaster')
@section('title','Posts')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Posts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Update Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <small>Below Update the Blog Posts</small>

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
       <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
       {{method_field('PUT')}}
       {{csrf_field()}}
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$post->title}}" name="title">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" value="{{$post->slug}}" name="slug">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
             <textarea id="editor1" rows="10" cols="70" name="body">{{$post->body}}</textarea>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
          <label for="sel1">Select Image:</label>
            <input type="file" class="form-control" name="image">
            <img src="{{URL::asset('img/'.$post->image)}}" height="100" width="100">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label for="sel1">Select Category:</label>
                <select class="form-control" id="sel1" name="category_id">
                  <option>Select Category</option>
                   @foreach($categories as $category)
                   <option value="{{ $category->id }}" 
                   @if($category->id ==$post->category_id)
                     selected="selected"
                   @endif 
                    >{{ $category->name }}</option>
                  @endforeach
                </select>
          </div>
          </div>
         </div>
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group ">
            <label for="sel1">Select Tags:</label>
                <select class="form-control js-example-basic-single" name="tags[]" multiple="multiple">
            @for ($i = 0; $i <= sizeof($tags); $i++)
              @if(isset($tags[$i]))
                  @if(isset($curtags[$i]))
                    <option value="{{ $tagsid[$i] }}" selected="selected">{{$tags[$i]}}</option>
                  @else
                    <option value="{{ $tagsid[$i] }}">{{$tags[$i]}}</option>
                  @endif
              @endif
           @endfor
        </select>
                <br><br>
          </div>
          </div>
         </div>
          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Update">
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
@section('footer_js')
<script type="text/javascript" src="{{ URL::asset('https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });
    </script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection
@section('footer')
@include('myadmin.lib.adminfooter')
@endsection

