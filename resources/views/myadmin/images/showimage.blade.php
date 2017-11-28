@extends('myadmin.adminmaster')
@section('title','imagealphablending(image, blendmode)')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Image
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Images</a></li>
        <li class="active">Show Image</li>
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
                  <th style="text-align: center;" width="20%">Name</th>
                  <th style="text-align: center;" width="60%">Imagae</th>  
                  <th style="text-align: center;" width="15%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($images as $image)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$image->image}}</td>
                  <td><img src="{{URL::asset('img/'.$image->image)}}" height="150" width="150"></td>
                  <td>
                    <form method="POST" action="{{action('ImageController@DeleteImage',['id'=>$image->id])}}">
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
