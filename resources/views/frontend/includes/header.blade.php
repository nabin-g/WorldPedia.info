

<header id="navigation">
    <div class="navbar navbar-expand-lg" role="banner">
        <div class="container">
            <a class="secondary-logo" href="{{route('home')}}">
                <img class="img-fluid" src="{{URL::to('/frontend/images/'.$info->logo)}}" alt="Worldpedia.info"/>
            </a>
        </div>
        <div class="topbar">
            <div class="container">
                <div id="topbar" class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                         <img class="img-fluid" src="{{URL::to('/frontend/images/'.$info->logo)}}" alt="Worldpedia.info"/>
                    </a>
                    <div id="topbar-right">
                        <div id="date-time"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="menubar" class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <a class="navbar-brand d-lg-none" href="{{route('home')}}">
                <img class="img-fluid" src="{{URL::to('/frontend/images/'.$info->logo)}}"
                      />
            </a>
            <nav id="mainmenu" class="navbar-left collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="lifestyle"><a href="{{'/'}}">Home</a></li>-->
                    @foreach($categories as $category)
                        @if($category->status == 1)
                            <li class="lifestyle">
                                <a href="{{route('listings',['slug'=>$category->slug])}}">{{$category->name}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <div class="searchNlogin  {{$search? 'expanded' : ''}} ">
                <ul>
                    <li class="search-icon"><i class="fa fa-search"></i></li>

                </ul>
                <div class="search">
                    <form role="form" id="searchForm" action="{{route('search')}}" method="get">
                        <input type="text" name="search" class="search-form" autocomplete="off" id="search" placeholder="Type & Press Enter" value="{{$search}}" required>
                    </form>
                </div> <!--/.search-->
            </div><!-- searchNlogin -->
        </div>
    </div>
</header><!--/#navigation-->
<!--<div class="section add inner-add">-->
<!--        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>-->
<!--    </div>-->
    
    <!--/.section-->
