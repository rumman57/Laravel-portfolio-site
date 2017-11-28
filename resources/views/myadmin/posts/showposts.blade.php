@extends('myadmin.adminmaster')
@section('title','Post')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Show Post</li>
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
                  <th style="text-align: center;" width="6%">Num.</th>
                  <th style="text-align: center;" width="10%">Title</th>
                  <th style="text-align: center;" width="10%">Slug</th>
                  <th style="text-align: center;" width="20%">Body</th>
                  <th style="text-align: center;" width="20%">Image</th>
                  <th style="text-align: center;" width="10%">Category</th>
                  <th style="text-align: center;" width="10%">Tags</th>
                  <th style="text-align: center;" width="7%">Update</th>
                  <th style="text-align: center;" width="7%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($posts as $post)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{{substr(strip_tags($post->body),0,150)}}{{strlen(strip_tags($post->body))>150 ? ".....":""}}</td>
                  <td style="text-align: center;">
                    @if(isset($post->image))
                    <img src="{{URL::asset('img/'.$post->image)}}" height="100" width="100">
                    @endif
                  </td>
                  <td>{{$post->category->name or 'Undefined'}}</td>
                  <td>
                        @foreach($post->tags as $tag)
                          {{$tag->name}},
                        @endforeach
                  </td>
                  <td>
                     <a href="{{route('posts.edit',$post->id)}}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                  <td>
                    <form method="POST" action="{{action('PostController@destroy',['id'=>$post->id])}}">
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
