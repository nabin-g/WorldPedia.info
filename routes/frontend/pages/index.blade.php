@extends('frontend.pages.master1')
@section('title','Home Page (WorldPedia)')
@section('section')
    <div class="section">
        <div class="row">
            <div class="site-content col-lg-9">
                <div class="row">
                    <div class="col-md-8">
                        <div id="home-slider">
                            @if($Posts1)
                                @foreach($Posts1 as $p)
                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid"
                                                     src="{{URL::to('frontend/images/posts/'.$p->image)}}" alt="Image"/>
                                            </div>
                                            
                                            <div class="catagory world"><a
                                                    href="{{route('listings',['slug'=>$p->slug])}}">{{$p->c_name}}</a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                            href="#">{{$p->created_at}}</a></li>
                                                    <li class="views"><i class="fa fa-eye"></i><a
                                                            href="#">{{$p->view}}</a></li>
                                                    {{--                                                    <li class="loves"><i class="fa fa-comment-o"></i><a--}}
                                                    {{--                                                            href="#">{{$p->comments()->count()}}</a>--}}
                                                    {{--                                                    </li>--}}
                                                    <li class="comments"><i class="fa fa-comment-o"></i><a
                                                            href="#">{{$p->comments->count()}}</a></li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                @endforeach

                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        @if($Posts2)

                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{URL::to('frontend/images/posts/'.$Posts2[0]->image)}}" alt="Image"/>
                                    </div>
                                    <div class="catagory health"><span><a
                                                href="{{route('listings',['slug'=>$Posts2[0]->slug])}}">{{$Posts2[0]->c_name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$Posts2[0]->created_at}} </a></li>
                                            <li class="views"><i class="fa fa-eye"></i><a
                                                    href="#">{{$Posts2[0]->view}}</a></li>

                                            <li class="loves"><i class="fa fa-comment-o"></i><a
                                                    href="#">{{$Posts2[0]->comments()->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$Posts2[0]->slug])}}">{{$Posts2[0]->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        @endif

                        @if($Posts3)
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{URL::to('frontend/images/posts/'.$Posts3[0]->image)}}" alt="Image"/>
                                    </div>
                                    <div class="catagory health"><span><a
                                                href="{{route('listings',['slug'=>$Posts3[0]->slug])}}">{{$Posts3[0]->c_name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$Posts3[0]->created_at}} </a></li>
                                            <li class="views"><i class="fa fa-eye"></i><a
                                                    href="#">{{$Posts3[0]->view}}</a></li>

                                            <li class="loves"><i class="fa fa-comment-o"></i><a
                                                    href="#">{{$Posts3[0]->comments()->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$Posts3[0]->slug])}}">{{$Posts3[0]->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        @endif
                    </div>
                </div>
                <div class="row">
                    @if($Posts4)
                        <div class="col-md-4">
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{URL::to('/frontend/images/posts/'.$Posts4[0]->image)}}"
                                             alt="Image"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="#">{{$Posts4[0]->c_name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$Posts4[0]->created_at}} </a></li>
                                            <li class="views"><i class="fa fa-eye"></i><a
                                                    href="#">{{$Posts4[0]->view}}</a></li>
                                            <li class="loves"><i class="fa fa-comment-o"></i><a
                                                    href="#">{{$Posts4[0]->comments()->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$Posts4[0]->slug])}}">{{$Posts4[0]->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </div>
                    @endif
                    @if($Posts5)
                        <div class="col-md-4">
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{{URL::to('/frontend/images/posts/'.$Posts5[0]->image)}}}"
                                             alt="Image"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="#">{{$Posts5[0]->c_name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$Posts5[0]->created_at}} </a></li>
                                            <li class="views"><i class="fa fa-eye"></i><a
                                                    href="#">{{$Posts5[0]->view}}</a></li>
                                            <li class="loves"><i class="fa fa-comment-o"></i><a
                                                    href="#">{{$Posts5[0]->comments()->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$Posts5[0]->slug])}}">{{$Posts5[0]->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </div>
                    @endif
                    @if($Posts6)
                        <div class="col-md-4">
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{{URL::to('/frontend/images/posts/'.$Posts6[0]->image)}}}"
                                             alt="Image"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="#">{{$Posts6[0]->c_name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                    href="#">{{$Posts6[0]->created_at}} </a></li>
                                            <li class="views"><i class="fa fa-eye"></i><a
                                                    href="#">{{$Posts6[0]->view}}</a></li>
                                            <li class="loves"><i class="fa fa-comment-o"></i><a
                                                    href="#">{{$Posts6[0]->comments()->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$Posts6[0]->slug])}}">{{$Posts6[0]->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </div>
                    @endif
                </div>
            </div><!--/#content-->

            <div class="col-lg-3 d-none d-lg-block">
                <div class="add featured-add">
                    <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                     alt="Image"/></a><br/>
                                     <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                     alt="Image"/></a>
                </div>
            </div><!--/#add-->
        </div>
    </div><!--/.section-->

    <div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->

    <div class="section">
        <div class="latest-news-wrapper">
            <h1 class="section-title">Latest News</h1>
            <div id="latest-news">
                @foreach($postsData->take(9) as $post)
                    <div class="post medium-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-fluid" src="{{URL::to('frontend/images/posts/'.$post->image)}}"
                                     alt="Image"/>
                            </div>


                            <div
                                class="catagory {{$post->categories[0] ? strtolower($post->categories[0]->name) : 'politics'}}"><span><a
                                        href="#">{{$post->categories[0] ? $post->categories[0]->name : ''}}</a></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li class="publish-date"><a href="#"><i
                                                class="fa fa-clock-o"></i> {{$post->created_at}}</a>
                                    </li>
                                    <li class="views"><a href="#"><i class="fa fa-eye"></i>{{$post->view}}</a></li>
                                    <li class="loves"><a href="#"><i
                                                class="fa fa-comment-o"></i>{{$post->comments()->count()}}</a></li>
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                            </h2>
                        </div>
                    </div><!--/post-->
                @endforeach
            </div>
        </div><!--/.latest-news-wrapper-->
    </div><!--/.section-->
<div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->
    <div class="section">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div id="site-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 tr-sticky">
                            <div class="left-content theiaStickySidebar">
                                @if($Posts7)
                                    <div class="section world-news">
                                        <h1 class="section-title title">{{$Posts7[0]->c_name}}</h1>
                                        <div class="post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{URL::to('frontend/images/posts/'.$Posts7[0]->image)}}"
                                                         alt="Image"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><a href="#"><i
                                                                    class="fa fa-clock-o"></i>
                                                                {{$Posts7[0]->created_at}} </a>
                                                        </li>
                                                        <li class="views"><a href="#"><i
                                                                    class="fa fa-eye"></i>{{$Posts7[0]->view}}</a>
                                                        </li>
                                                        <li class="loves"><a href="#"><i
                                                                    class="fa fa-comment-o"></i>{{$Posts7[0]->comments()->count()}}
                                                            </a>
                                                        </li>
                                                        {{--                                                        <li class="comments"><i class="fa fa-comment-o"></i><a--}}
                                                        {{--                                                                href="#">189</a></li>--}}
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',['slug'=>$Posts7[0]->slug])}}">{{$Posts7[0]->title}}</a>
                                                </h2>
                                                <div class="entry-content">
                                                    <p>{!! $Posts7[0]->detail !!}</p>
                                                </div>
                                            </div>
                                            <div class="list-post">
                                                <ul>
                                                    @foreach($Posts7 as $k=> $p)
                                                        @if($k > 0  && $k < 5)
                                                            <li>
                                                                <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}
                                                                    <i class="fa fa-angle-right"></i></a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div><!--/list-post-->
                                        </div><!--/post-->
                                    </div><!--/.section-->
                                @endif
<div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->
                                @if($Posts8)
                                    <div class="section technology-news">
                                        <h1 class="section-title">{{$Posts8[0]->c_name}}</h1>
                                        {{--                                    <div class="cat-menu">--}}
                                        {{--                                        <a href="listing.php">See all</a>--}}
                                        {{--                                    </div>--}}
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <img class="img-fluid"
                                                                 src="{{URL::to('frontend/images/posts/'.$Posts8[0]->image)}}"
                                                                 alt="Image"/>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">
                                                        <div class="entry-meta">
                                                            <ul class="list-inline">
                                                                <li class="publish-date"><a href="#"><i
                                                                            class="fa fa-clock-o"></i> {{$Posts8[0]->created_at}}
                                                                    </a>
                                                                </li>
                                                                <li class="views"><a href="#"><i
                                                                            class="fa fa-eye"></i>{{$Posts8[0]->view}}
                                                                    </a></li>
                                                                <li class="loves"><a href="#"><i
                                                                            class="fa fa-comment-o"></i>{{$Posts8[0]->comments()->count()}}
                                                                    </a>
                                                                </li>
                                                                {{--                                                                <li class="comments"><i class="fa fa-comment-o"></i><a--}}
                                                                {{--                                                                        href="#">189</a></li>--}}
                                                            </ul>
                                                        </div>
                                                        <h2 class="entry-title">
                                                            <a href="{{route('details',['slug'=>$Posts8[0]->slug])}}">{{$Posts8[0]->title}}</a>
                                                        </h2>
                                                        <div class="entry-content">
                                                        <!--<p class="text-justify">{!!  \Illuminate\Support\Str::words($Posts8[0]->details, 30) !!}</p>-->
                                                        </div>
                                                    </div>
                                                </div><!--/post-->
                                            </div>
                                            <div class="col-lg-4">
                                                @foreach($Posts8 as $k=>$p)
                                                    @if($k > 0 && $k < 2)
                                                        <div class="post small-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$p->created_at}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--/technology-news-->
                                @endif

                                <div class="section add inner-add">
                                    <a href="#"><img class="img-fluid"
                                                     src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}"
                                                     alt="Image"/></a>
                                </div><!--/.section add-->


                                <div class="section photo-gallery">
                                    <h1 class="section-title title">Photo Gallery</h1>
                                    {{--                                    <div class="cat-menu">--}}
                                    {{--                                        <a href="listing.php">See all</a>--}}
                                    {{--                                    </div>--}}
                                    <div id="photo-gallery" class="carousel slide carousel-fade post"
                                         data-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($galleries->take(10) as $key=>$g)
                                                <div class="carousel-item {{$key === 0 ? 'active':''}}">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{URL::to('frontend/images/gallery/'.$g->image)}}"
                                                                     alt="Image"/></a>
                                                    <h2><a href="#">{{$g->caption}}</a></h2>
                                                </div>
                                            @endforeach
                                        </div><!--/carousel-inner-->

                                        <ol class="gallery-indicators carousel-indicators">
                                            @foreach($galleries->take(10) as $k=>$g)
                                                <li data-target="#photo-gallery" data-slide-to="{{$k}}"
                                                    class="{{$k === 0 ?'active':''}}">
                                                    <img class="img-fluid"
                                                         src="{{URL::to('frontend/images/gallery/'.$g->image)}}"
                                                         alt="Image"/>
                                                </li>
                                            @endforeach
                                        </ol><!--/gallery-indicators-->

                                        <div class="gallery-turner">
                                            <a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i
                                                    class="fa fa-angle-left"></i></a>
                                            <a class="right-photo" href="#photo-gallery" role="button"
                                               data-slide="next"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!--/photo-gallery-->
<div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->
                                @if($Posts9)
                                    <div class="section lifestyle-section">
                                        <h1 class="section-title">{{$Posts9[0]->c_name}}</h1>
                                        {{--                                        <div class="cat-menu">--}}
                                        {{--                                            <a href="listing-life-style.php">See all</a>--}}
                                        {{--                                        </div>--}}
                                        <div class="row">
                                            <div class="col-lg-6">
                                                @foreach($Posts9 as $k=> $p)
                                                    @if($k == 0 || $k == 1)
                                                        <div class="post medium-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$p->created_at}}
                                                                            </a>
                                                                        </li>
                                                                        <li class="views"><a href="#"><i
                                                                                    class="fa fa-eye"></i>{{$p->view}}
                                                                            </a></li>
                                                                        <li class="loves"><a href="#"><i
                                                                                    class="fa fa-comment-o"></i>{{$p->comments()->count()}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-lg-6">
                                                @foreach($Posts9 as $k=> $p)
                                                    @if($k == 2 || $k == 3)
                                                        <div class="post medium-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$p->created_at}}
                                                                            </a>
                                                                        </li>
                                                                        <li class="views"><a href="#"><i
                                                                                    class="fa fa-eye"></i>{{$p->view}}
                                                                            </a>
                                                                        </li>
                                                                        <li class="loves"><a href="#"><i
                                                                                    class="fa fa-comment-o"></i>{{$p->comments()->count()}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--/.lifestyle -->
                                @endif
<div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->
                                @if($Posts10)
                                    <div class="section health-section">
                                        <h1 class="section-title">{{$Posts10[0]->c_name}}</h1>
                                        {{--                                    <div class="cat-menu">--}}
                                        {{--                                        <a href="listing-life-style.php">See all</a>--}}
                                        {{--                                    </div>--}}
                                        <div class="health-feature">
                                            <div class="post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-fluid"
                                                             src="{{URL::to('frontend/images/posts/'.$Posts10[0]->image)}}"
                                                             alt="Image"/>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i> {{$Posts10[0]->created_at}}
                                                                </a>
                                                            </li>
                                                            <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$Posts10[0]->view}}</a>
                                                            </li>
                                                            <li class="loves"><a href="#"><i
                                                                        class="fa fa-comment-o"></i>{{$Posts10[0]->comments()->count()}}
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',['slug'=>$Posts10[0]->slug])}}">{{$Posts10[0]->title}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                @foreach($Posts10 as $k=> $p)
                                                    @if($k == 1 || $k == 2)
                                                        <div class="post small-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$p->created_at}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-lg-6">
                                                @foreach($Posts10 as $k=> $p)
                                                    @if($k == 3 || $k == 4)
                                                        <div class="post small-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$p->created_at}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->titel}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--/.health-section -->
                                @endif

                            </div><!--/.left-content-->
                        </div>
                        <div class="col-lg-4 col-md-6 tr-sticky">
                            <div class="middle-content theiaStickySidebar">
                                @if($Posts11)
                                    <div class="section sports-section">
                                        <h1 class="section-title title">{{$Posts11[0]->c_name}}</h1>
                                        {{--                                    <div class="cat-menu">--}}
                                        {{--                                        <a href="listing-sports.php">See all</a>--}}
                                        {{--                                    </div>--}}
                                        @foreach($Posts11 as $k=>$p)
                                            <div class="post medium-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-fluid"
                                                             src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                             alt="Image"/>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i>{{$p->created_at}}</a>
                                                            </li>
                                                            <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$p->view}}</a>
                                                            </li>
                                                            <li class="loves"><a href="#"><i
                                                                        class="fa fa-comment-o"></i>{{$p->comments()->count()}}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        @endforeach

                                    </div><!--/.sports-section -->
                                @endif

                                <div class="section">
                                    <div class="add inner-add">
                                        <a href="#"><img class="img-fluid"
                                                         src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                                         alt="Image"/></a>
                                    </div>
                                </div>

                                <div class="section video-section">
                                    <h1 class="section-title title">Watch Video</h1>
                                    <div class="cat-menu">
                                        <a href="{{$info->social->youtube}}" 
                                           target="_blank">See all</a>
                                    </div>
{{--                                    {{dd(count($videos))}}--}}
                                    <div class="post video-post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="{{count($videos) > 0 ? $videos[0]->link :''}}"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="video-catagory"><a href="#">{{count($videos) > 0 ? $videos[0]->title :''}}</a></div>
                                            <h2 class="entry-title">
                                                <a href="#">{{count($videos) > 0 ? $videos[0]->short_description :''}}</a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->

                                    <div class="video-post-list">
                                        <ul>
                                            @foreach($videos as $key=>$v)
                                                @if($key > 1)
                                                    <li>
                                                        <div class="post video-post small-post">
                                                            <div class="entry-header">
                                                                <div
                                                                    class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="{{$v->link}}"
                                                                            allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="video-catagory"><a
                                                                        href="#">{{$v->title}}</a></div>
                                                                <h2 class="entry-title">
                                                                    <a href="#">{{$v->short_description}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div> <!-- /.video-section -->

                                @if($Posts12)
                                    <div class="section business-section">
                                        <h1 class="section-title">{{$Posts12[0]->c_name}}</h1>
                                        {{--                                        <div class="cat-menu">--}}
                                        {{--                                            <a href="listing.php">See all</a>--}}
                                        {{--                                        </div>--}}
                                        @foreach($Posts12 as $k=>$p)
                                            <div class="post medium-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-fluid"
                                                             src="{{URL::to('frontend/images/posts/'.$p->image)}}"
                                                             alt="Image"/>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i>{{$p->created_at}}</a>
                                                            </li>
                                                            <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$p->view}}</a>
                                                            </li>
                                                            <li class="loves"><a href="#"><i
                                                                        class="fa fa-comment-o"></i>{{$p->comments()->count()}}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        @endforeach

                                    </div><!-- /.business-section -->
                                @endif


                            </div><!--/.middle-content-->
                        </div>
                    </div>
                </div><!--/#site-content-->
            </div>
            <div class="col-md-4 col-lg-3 tr-sticky">
                <div id="sitebar" class="theiaStickySidebar">
                    <div class="widget follow-us">
                        <h1 class="section-title title">Follow Us</h1>
                        <ul class="list-inline social-icons">
                            <li><a href="{{$info->social->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$info->social->twitter}}"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$info->social->gmail}}"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{$info->social->linkedln}}"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$info->social->youtube}}"  target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!--/#widget-->

                    <div class="widget">
                        <div class="add">
                            <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                             alt="Image"/></a>
                        </div>
                    </div><!--/#widget-->

                    <div class="widget">
                        <h1 class="section-title title">Popular Post </h1>
                        <ul class="post-list">
                            @foreach($postsData->take(9) as $post)
                                <li>
                                    <div class="post small-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid"
                                                     src="{{URL::to('frontend/images/posts/'.$post->image)}}"
                                                     alt="Image"/>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                        <!--<div class="video-catagory"><a href="#">{{$post->categories[0] ? $post->categories[0]->name : ''}}</a></div>-->
                                            <h2 class="entry-title">
                                                <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                </li>

                            @endforeach
                        </ul>
                    </div><!--/#widget-->
 


                </div><!--/#sitebar-->
            </div>
        </div>
    </div><!--/.section-->
    <div class="section add inner-add">
        <a href="#"><img class="img-fluid" src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}" alt="Image"/></a>
    </div><!--/.section-->
@endsection
