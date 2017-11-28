@extends('myadmin.adminmaster')
@section('title','Category')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Show Category</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th style="text-align: center;" width="15%">Number</th>
                  <th style="text-align: center;" width="45%">Name</th>
                  <th style="text-align: center;" width="30%">Update</th>
                  <th style="text-align: center;" width="30%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($categories as $category)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$category->name}}</td>
                  <td>
                     <a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                  <td>
                    <form method="POST" action="{{action('CategoryController@destroy',['id'=>$category->id])}}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                       <span onclick = "return confirm('Are You Sure To Delete ?')" href=""><button class="btn btn-danger">Delete</button></span>
                    </form>
                  </td>
                </tr>
               @endforeach
                </tbody>             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footer')
@include('myadmin.lib.fortable')
@endsection
