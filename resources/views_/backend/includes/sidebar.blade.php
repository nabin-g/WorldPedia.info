<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin-dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{URL::to('/backend/images/profile_img',Auth::user()->image)}}" alt=""
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->fname}}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
                @php
                    $sidebars = Config::get('sidebar');
                @endphp
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            @foreach($sidebars as $sidebar)
                                <li style="border: 2px solid #2b3b4e;">
                                    @php
                                        $route = isset($sidebar['route']) && !empty($sidebar['route']) ?
                                         route($sidebar['route']):'#';
                                         $icon = isset($sidebar['icon']) && !empty($sidebar['icon']) ?
                                         $sidebar['icon']:'';
                                    @endphp
                                    @if(!isset($sidebar['sub_nav']))
                                        <a href="{{$route}}">
                                            <i class="{{$icon}}"></i>{{$sidebar['name']}}
                                        </a>
                                @else
                                    <li><a><i class="{{$icon}}"></i> {{$sidebar['name']}} <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            @foreach($sidebar['sub_nav'] as $subNav)
                                                @php
                                                    $route = isset($subNav['route']) && !empty($subNav['route']) ?
                                                    route($subNav['route']):'#';
                                                @endphp
                                                <li><a href="{{$route}}">{{$subNav['name']}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
