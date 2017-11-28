<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('img/ami.jpg')}}" class="img-circle" alt="User Image" height="160" width="160">
        </div>
        <div class="pull-left info">
          <p>Rumman</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{route('admin.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Add Posts</a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> Show Posts</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Add Categories</a></li>
            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Show Categories</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Tag</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tags.create')}}"><i class="fa fa-circle-o"></i> Add Tags</a></li>
            <li><a href="{{route('tags.index')}}"><i class="fa fa-circle-o"></i> Show Tags</a></li>
          </ul>
        </li>

        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sevices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('services.create')}}"><i class="fa fa-circle-o"></i> Add Service</a></li>
            <li><a href="{{route('services.index')}}"><i class="fa fa-circle-o"></i> Show Service</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sevices List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('service-list.create')}}"><i class="fa fa-circle-o"></i> Add Service List</a></li>
            <li><a href="{{route('service-list.index')}}"><i class="fa fa-circle-o"></i> Show Service List</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Portfolio Sevices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('portfolo-services.create')}}"><i class="fa fa-circle-o"></i> Add Service</a></li>
            <li><a href="{{route('portfolo-services.index')}}"><i class="fa fa-circle-o"></i> Show Service</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Portfolio Sevices List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('portfolo-service-list.create')}}"><i class="fa fa-circle-o"></i> Add Service List</a></li>
            <li><a href="{{route('portfolo-service-list.index')}}"><i class="fa fa-circle-o"></i> Show Service List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Social Sites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('social-site.create')}}"><i class="fa fa-circle-o"></i>Add Site Option</a></li>
              <li><a href="{{route('social-site.index')}}"><i class="fa fa-circle-o"></i>Show Site Options</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Site Images</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('get.image')}}"><i class="fa fa-circle-o"></i>Add Site Images</a></li>
              <li><a href="{{route('show.image')}}"><i class="fa fa-circle-o"></i>Show Site Images</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Site Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('index.options')}}"><i class="fa fa-circle-o"></i> Index/About Me Page</a></li>
            <li><a href="{{route('pages.resumeoption')}}"><i class="fa fa-circle-o"></i> Resume Page</a></li>
            <li><a href="{{route('site.options')}}"><i class="fa fa-circle-o"></i> All Site Options</a></li>
            
          </ul>
        </li>

         <li>
          <a href="{{route('admin.contact')}}">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="">
              <small class="label pull-right bg-green">{{$notificatios->count()}}</small>
            </span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>