  <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <!-- ASIDE BEGIN -->
                <div class="col-md-3 col-sm-4 col-xs-12 aside-wrapper">
                    <aside>
                        <div class="aside-container">
                         
                         @yield('photo')
                            <!-- PHOTO START 
                            <div class="photo full-width">
                                <img src="img/rumman.png" alt="John Smith"/>
                            </div>
                             PHOTO END -->
                            <nav>
                                <!-- NAVIGATION START -->
                                <div class="navbar-toggle-wrapper">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                @php
                                 $curcat =  Request::segment(1);
                                @endphp
                                <div id="main-navigation" class="collapse navbar-collapse">
                                    <ul>
                                        <li>
                                            <a @if(empty($curcat)) class="active" @endif href="{{route('home.index')}}">About me</a>
                                        </li>
                                        <li>
                                            <a @if($curcat=='resume') class="active" @endif href="{{route('pages.resume')}}">Resume</a>
                                        </li>
                                        <li>
                                            <a @if($curcat=='portfolio') class="active" @endif href="{{route('pages.portfolio')}}">Portfolio</a>
                                        </li>
                                        <li>
                                            <a @if($curcat=='blog' || $curcat=='category') class="active" @endif href="{{route('pages.blog')}}">Blog</a>
                                        </li>
                                        <li>
                                            <a @if($curcat=='contact') class="active" @endif href="{{route('pages.contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- NAVIGATION END -->
                                <!-- NAVIGATION SOCIAL ICONS START -->
                                <div class="socials clearfix">
                                @foreach($sociallinks as $sociallink)
                                    <a href="{{$sociallink->link}}"><i class="{{$sociallink->icon}}" aria-hidden="true"></i></a>
                                @endforeach
                                </div>
                                <!-- NAVIGATION SOCIAL ICONS END -->
                            </nav>
                        </div>
                        <!-- ASIDE FOOTER START -->
                        <footer>
                            <div class="copyrights hidden-xs">
                               {!! html_entity_decode($options->copyright) !!}
                            </div>
                        </footer>
                        <!-- ASIDE FOOTER END -->
                    </aside>
                </div>
                <!-- ASIDE END -->