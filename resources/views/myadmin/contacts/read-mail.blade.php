@extends('myadmin.adminmaster')
@section('title','Read-Mail')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{{route('contact.composer')}}" class="btn btn-primary btn-block margin-bottom">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">{{$contacts->count()}}</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Subject: {{$contact->subject}}</h3>
                <h5>From: {{$contact->email}}
                  <span class="mailbox-read-time pull-right">{{date('M j,Y h:i a',strtotime($contact->created_at))}}</span></h5>
              </div>
             
              <div class="mailbox-read-message">
                {{$contact->body}}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
         
            <div class="box-footer">
              <div class="pull-right">
                <a href="{{route('contact.reply',$contact->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-reply"></i> Reply</button></a>     
              </div>
              <form style="display: inline;" method="POST" action="{{route('adcontact.delete',['id'=>$contact->id])}}">
                  {{method_field('DELETE')}}
                  {{csrf_field()}}
                  <span onclick = "return confirm('Are You Sure To Delete ?')"><button  class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button></span>
              </form>
              <button type="button" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
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
  @include('myadmin.lib.adminfooter')
@endsection