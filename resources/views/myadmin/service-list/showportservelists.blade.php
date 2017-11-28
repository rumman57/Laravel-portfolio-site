@extends('myadmin.adminmaster')
@section('title','Service-List')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Service-List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Service-List</a></li>
        <li class="active">Show Service-List</li>
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
                  <th style="text-align: center;" width="5%">Number</th>
                  <th style="text-align: center;" width="10%">Title</th>
                  <th style="text-align: center;" width="20%">Description</th>
                  <th style="text-align: center;" width="10%">Image</th>
                  <th style="text-align: center;" width="10%">Github</th>
                  <th style="text-align: center;" width="10%">Demo</th>
                  <th style="text-align: center;" width="10%">Demo1</th>
                  <th style="text-align: center;" width="5%">Demo2</th>
                  <th style="text-align: center;" width="5%">PS_ID</th>
                  <th style="text-align: center;" width="5%">Priority</th>
                  <th style="text-align: center;" width="5%">Edit</th>
                  <th style="text-align: center;" width="5%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($servlists as $servlist)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td style="word-break: break-all">{{$servlist->title}}</td>
                  <td>{{substr($servlist->description,0,100)}}</td>
                  <td><img src="{{URL::asset('img/'.$servlist->image)}}" height="80" width="80"></td>
                  <td style="word-break: break-all">{{$servlist->github}}</td>
                  <td style="word-break: break-all">{{$servlist->demo}}</td>
                  <td style="word-break: break-all;">{{$servlist->demo_one}}</td>
                  <td style="word-break: break-all">{{$servlist->demo_two}}</td>
                  <td style="word-break: break-all">{{$servlist->portfolio_service->name}}</td>
                  <td>{{$servlist->priority}}</td>
                  <td>
                     <a href="{{route('portfolo-service-list.edit',$servlist->id)}}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                  <td>
                    <form method="POST" action="{{action('PortServiceListController@destroy',['id'=>$servlist->id])}}">
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
