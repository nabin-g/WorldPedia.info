@extends('frontend.pages.master1')
@section('title','Home Page (WorldPedia)')
@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="site-content col-lg-9">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="home-slider">
                                @foreach($cats as $cat)
                                    @foreach($cat->posts->all() as $post)
                                        <div class="post feature-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                         alt="Image"/>
                                                </div>
                                                <div class="catagory world"><a href="#">{{$cat->name}}</a></div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                                    href="#">
                                                                {{$post->created_at}} </a></li>
                                                        <li class="views"><i class="fa fa-eye"></i><a
                                                                    href="#">{{$post->view}}</a>
                                                        </li>
                                                        <li class="loves"><i class="fa fa-heart-o"></i><a
                                                                    href="#">{{$post->like}}</a>
                                                        </li>
                                                        <li class="comments"><i class="fa fa-comment-o"></i><a
                                                                    href="#">{{$post->comment}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="{{route('listings',['slug'=>$cat->slug])}}">{{$post->title}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        @foreach($cats->take(1) as $cat)
                            @foreach($cat->posts->take(1) as $post)
                                <div class="col-md-4">
                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid"
                                                     src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                     alt="Image"/>
                                            </div>
                                            <div class="catagory technology"><span><a
                                                            href="{{route('listings',['slug'=>$cat->slug])}}">{{$cat->name}}</a></span>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                                href="#">
                                                            {{$post->created_at}} </a></li>
                                                    <li class="views"><i class="fa fa-eye"></i><a
                                                                href="#">{{$post->view}}</a>
                                                    </li>
                                                    <li class="loves"><i class="fa fa-heart-o"></i><a
                                                                href="#">{{$post->like}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                </div>
                            @endforeach
                        @endforeach
                        <div class="row">
                            @foreach($cats->skip(2)->take(3) as $cat)
                                @foreach($cat->posts->take(1) as $post)
                                    <div class="col-md-4">
                                        <div class="post feature-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                         alt="Image"/>
                                                </div>
                                                <div class="catagory technology"><span><a
                                                                href="{{route('listings',['slug'=>$cat->slug])}}">{{$cat->name}}</a></span>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                                    href="#">
                                                                {{$post->created_at}} </a></li>
                                                        <li class="views"><i class="fa fa-eye"></i><a
                                                                    href="#">{{$post->view}}</a>
                                                        </li>
                                                        <li class="loves"><i class="fa fa-heart-o"></i><a
                                                                    href="#">{{$post->like}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div><!--/#content-->


                    @foreach(\App\Models\Bigyapan::where([['page','=','home'],['position','=','flat']])->take(1) as $ad)
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="add featured-add">
                                <a href="#"><img class="img-fluid"
                                                 src="{{URL::to('/frontend/images/bigyapans/'.$ad->image)}}"
                                                 alt="Image"/></a>
                            </div>
                        </div><!--/#add-->
                    @endforeach
                </div>
            </div><!--/.section-->

            @foreach(\App\Models\Bigyapan::where([['page','=','home'],['position','=','flat']])->skip(1)->take(1) as $ad)
                <div class="section add inner-add">
                    <a href="#"><img class="img-fluid" src="{{URL::to('/frontend/images/bigyapans/'.$ad->image)}}"
                                     alt="Image"/></a>
                </div><!--/.section-->
            @endforeach

            <div class="section">
                <div class="latest-news-wrapper">
                    <h1 class="section-title">Latest News</h1>
                    <div id="latest-news">
                        @foreach($posts as $post)
                            <div class="post medium-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{{URL::to('/frontend/images/posts/'.$post->image)}}}"
                                             alt="Image"/>
                                    </div>
                                    <div class="catagory politics">
                                        <span class="label label-default"><a
                                                    href="#">@foreach($post->category as $cat)
                                                    {{$cat->name}}
                                                @endforeach</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><a href="#"><i
                                                            class="fa fa-clock-o"></i> {{$post->created_at}}
                                                </a>
                                            </li>
                                            <li class="views"><a href="#"><i class="fa fa-eye"></i>{{$post->view}}
                                                </a></li>
                                            <li class="loves"><a href="#"><i
                                                            class="fa fa-heart-o"></i>{{$post->like}}</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{route('details',['slug'=>$post->title])}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        @endforeach
                    </div>
                </div><!--/.latest-news-wrapper-->
            </div><!--/.section-->

            <div class="section">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div id="site-content">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 tr-sticky">
                                    <div class="left-content theiaStickySidebar">
                                        <div class="section world-news">
                                            @foreach($cats->skip(3)->take(1) as $cat)
                                                <h1 class="section-title title">{{$cat->name}}</h1>
                                                @foreach($cat->posts->take(1) as $post)
                                                    <div class="world-nav cat-menu">
                                                        <ul class="list-inline">
                                                            <li><a href="{{route('listings',['slug'=>$post->slug])}}">See
                                                                    All</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post">
                                                        <div class="entry-header">
                                                            <div class="entry-thumbnail">
                                                                <img class="img-fluid"
                                                                     src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                                     alt="Image"/>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <div class="entry-meta">
                                                                <ul class="list-inline">
                                                                    <li class="publish-date"><a href="#"><i
                                                                                    class="fa fa-clock-o"></i> {{$post->created_at}}
                                                                        </a>
                                                                    </li>
                                                                    <li class="views"><a href="#"><i
                                                                                    class="fa fa-eye"></i>{{$post->view}}
                                                                        </a>
                                                                    </li>
                                                                    <li class="loves"><a href="#"><i
                                                                                    class="fa fa-heart-o"></i>{{$post->like}}
                                                                        </a>
                                                                    </li>
                                                                    <li class="comments"><i class="fa fa-comment-o"></i><a
                                                                                href="#">{{$post->comment}}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="entry-title">
                                                                <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                            </h2>
                                                            <div class="entry-content">
                                                                <p>{!! Str::limit($post->details,200) !!}</p>
                                                            </div>
                                                        </div>
                                                    </div><!--/post-->
                                                @endforeach
                                            @endforeach
                                        </div><!--/.section-->

                                        <div class="">
                                            @foreach($cats->skip(4)->take(1) as $cat)
                                                <h1 class="section-title">{{$cat->name}}</h1>
                                                <div class="cat-menu">
                                                    <a href="{{route('listings',['slug'=>$cat->slug])}}">See
                                                        all</a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        @foreach($cat->posts->take(3) as $post)
                                                            <div class="post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <img class="img-fluid"
                                                                             src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                                             alt="Image"/>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                    {{$post->created_at}}
                                                                                </a></li>
                                                                            <li class="views"><a href="#"><i
                                                                                            class="fa fa-eye"></i>{{$post->view}}
                                                                                    k</a>
                                                                            </li>
                                                                            <li class="loves"><a href="#"><i
                                                                                            class="fa fa-heart-o"></i>{{$post->like}}
                                                                                </a>
                                                                            </li>
                                                                            <li class="comments"><i
                                                                                        class="fa fa-comment-o"></i><a
                                                                                        href="#">{{$post->comment}}</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                                    </h2>
                                                                    <div class="entry-content">
                                                                        <p>{!! Str::limit($post->details, 180) !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div><!--/post-->
                                                    </div>
                                                    @foreach($cat->skip(1)->take(1) as $pos)
                                                        <div class="post small-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src="{{URL::to('/frontend/images/posts'.$pos->image)}}"
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a href="#"><i
                                                                                        class="fa fa-clock-o"></i>
                                                                                {{$pos->created_at}}
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$pos->slug])}}">{{$pos->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                </div>
                                            @endforeach
                                        </div>
                                        @endforeach
                                        @endforeach
                                    </div><!--/technology-news-->
                                    @foreach(\App\Models\Bigyapan::where([['page','=','home'],['position','=','flat']])->skip(2)->take(1)
                                        as $ad)
                                        <div class="section add inner-add">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{URL::to('/frontend/images/bigyapans/'.$ad->image)}}"
                                                             alt="Image"/></a>
                                        </div><!--/.section add-->
                                    @endforeach

                                    <div class="section photo-gallery">
                                        <h1 class="section-title title">Photo Gallery</h1>
                                        <div id="photo-gallery" class="carousel slide carousel-fade post"
                                             data-ride="carousel">
                                            @foreach($galleries as $gall)
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">

                                                        <a href="#">
                                                            <img class="img-fluid"
                                                                 src="{{URL::to('/frontend/images/gallery/'.$gall->image)}}"
                                                                 alt="Image"/></a>
                                                        <h2>
                                                            <a href="#">{{$gall->caption}}
                                                            </a>
                                                        </h2>

                                                    </div>
                                                </div>
                                        @endforeach
                                        <!--/carousel-inner-->
                                            <ol class="gallery-indicators carousel-indicators">
                                                <li data-target="#photo-gallery"
                                                    data-slide-to="0"
                                                    class="active">
                                                    <img class="img-fluid"
                                                         src=""
                                                         alt="Image"/>
                                                </li>
                                            </ol><!--/gallery-indicators-->

                                            <div class="gallery-turner">
                                                <a class="left-photo" href="#photo-gallery" role="button"
                                                   data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                                <a class="right-photo" href="#photo-gallery" role="button"
                                                   data-slide="next"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div><!--/photo-gallery-->
                                        <div class="section">
                                            @foreach($cats->skip(5)->take(2) as $cat)
                                                <h1 class="section-title">{{$cat->name}}</h1>
                                                <div class="cat-menu">
                                                    <a href="{{route('listings',['slug'=>$cat->slug])}}">See all</a>
                                                </div>
                                                <div>
                                                    @foreach($cat->posts->take(1) as $post)
                                                        <div class="post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <img class="img-fluid"
                                                                         src=""
                                                                         alt="Image"/>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">
                                                                <div class="entry-meta">
                                                                    <ul class="list-inline">
                                                                        <li class="publish-date"><a
                                                                                    href="#"><i
                                                                                        class="fa fa-clock-o"></i>
                                                                                {{$post->created_at}}
                                                                            </a>
                                                                        </li>
                                                                        <li class="views"><a href="#"><i
                                                                                        class="fa fa-eye"></i>{{$post->view}}
                                                                                k</a>
                                                                        </li>
                                                                        <li class="loves"><a href="#"><i
                                                                                        class="fa fa-heart-o"></i>{{$post->like}}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h2 class="entry-title">
                                                                    <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    @foreach($cat->posts->skip(1)->take(3) as $post)
                                                        <div class="col-lg-6">
                                                            <div class="post small-post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <img class="img-fluid"
                                                                             src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                                             alt="Image"/>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a
                                                                                        href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                    {{$post->created_at}}
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                                    </h2>
                                                                </div>
                                                            </div><!--/post-->
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div><!--/.health-section -->
                                </div><!--/.left-content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 tr-sticky">
                        <div class="middle-content theiaStickySidebar">
                            @foreach($cats->skip(6-1)->take(1) as $cat)
                                <div class="section">
                                    <h1 class="section-title title">{{$cat->name}}</h1>
                                    <div class="cat-menu">
                                        <a href="{{route('listings',['slug'=>$cat->slug])}}">See all</a>
                                    </div>
                                    @foreach($cat->posts->take(3) as $post)
                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{URL::to('/frontend/images/posts/'.$post->image)}}"
                                                         alt="Image"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i>
                                                                {{$post->created_at}}
                                                            </a>
                                                        </li>
                                                        <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$post->view}}
                                                                k</a>
                                                        </li>
                                                        <li class="loves"><a href="#"><i
                                                                        class="fa fa-heart-o"></i>{{$post->like}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                    @endforeach
                                </div><!--/.sports-section -->
                            @endforeach
                            @php
                                use App\Models\Bigyapan;
                                $ad = Bigyapan::where([['page','=','home'],['position','=','side']])->take(1)->get();
                            @endphp
                            @foreach($ad as $ads)
                                <div class="section">
                                    <div class="add inner-add">
                                        <a href="#"><img class="img-fluid"
                                                         src="{{URL::to('/frontend/images/bigyapans/'.$ads->image)}}"
                                                         alt="Image"/></a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="section video-section">
                                <h1 class="section-title title">Watch Video</h1>
                                <div class="cat-menu">
                                    <a href="https://www.youtube.com/channel/UCbCxgaE2hisGIrq0ThJNolA"
                                       target="_blank">See all</a>
                                </div>
                                <div class="post video-post medium-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/-WlqrkXImsk"
                                                    allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="video-catagory"><a href="#">World</a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="news-details.php">Our closest relatives
                                                aren't fans
                                                of
                                                daylight saving time</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->

                                <div class="video-post-list">
                                    <ul>
                                        <li>
                                            <div class="post video-post small-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/-WlqrkXImsk"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="video-catagory"><a
                                                                href="#">World</a>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="news-details.php">Our
                                                            closest relatives
                                                            aren't
                                                            fans of daylight saving time</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </li>
                                        <li>
                                            <div class="post video-post small-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/-WlqrkXImsk"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="video-catagory"><a
                                                                href="#">Business</a>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="news-details.php">3
                                                            students arrested
                                                            after
                                                            body-slamming principal</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </li>
                                        <li>
                                            <div class="post video-post small-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/-WlqrkXImsk"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="video-catagory"><a
                                                                href="#">World</a>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="news-details.php">Our
                                                            closest relatives
                                                            aren't
                                                            fans of daylight saving time</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- /.video-section -->

                            <div class="section">
                                @foreach($cats->skip(7)->take(1) as $cat)
                                    <h1 class="section-title">{{$cat->name}}</h1>
                                    <div class="cat-menu">
                                        <a href="{{route('listings',['slug'=>$cat->slug])}}">See all</a>
                                    </div>
                                    @foreach($cat->posts->take(2) as $post)
                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{URl::to('/frontend/images/posts'.$post->image)}}"
                                                         alt="Image"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i>
                                                                {{$post->created_at}}
                                                            </a>
                                                        </li>
                                                        <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$post->view}}
                                                                k</a>
                                                        </li>
                                                        <li class="loves"><a href="#"><i
                                                                        class="fa fa-heart-o"></i>{{$post->comment}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',['slug'=>$post->details])}}">{{$post->title}}</a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                        @foreach($cat->post->skip(1) as $post)
                                            <div class="post medium-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-fluid"
                                                             src="{{URl::to('/frontend/images/posts/'.$post->image)}}"
                                                             alt="Image"/>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="#"><i
                                                                            class="fa fa-clock-o"></i>
                                                                    {{$post->created_at}}
                                                                </a>
                                                            </li>
                                                            <li class="views"><a href="#"><i
                                                                            class="fa fa-eye"></i>{{$post->view}}
                                                                    k</a>
                                                            </li>
                                                            <li class="loves"><a href="#"><i
                                                                            class="fa fa-heart-o"></i>{{$post->like}}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div><!-- /.business-section -->

                        </div><!--/.middle-content-->
                    </div>
                </div>
            </div><!--/#site-content-->
        </div>
        <div class="col-md-4 col-lg-3 tr-sticky">
            <div id="sitebar" class="theiaStickySidebar">
                <div class="widget follow-us">
                    <h1 class="section-title title">Follow Us</h1>
                </div><!--/#widget-->
                @include('frontend.includes.social')
                <div class="widget">
                    @foreach($ad as $ads)
                        <div class="add">
                            <a href="#"><img class="img-fluid"
                                             src="{{URL::to('/frontend/images/bigyapans/'.$ads->image)}}"
                                             alt="Image"/></a>
                        </div>
                    @endforeach
                </div><!--/#widget-->

                <div class="widget">
                    <h1 class="section-title title">Popular Post </h1>
                    <ul class="post-list">
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/1.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">World</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/2.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Business</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/3.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Sports</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/4.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Technology</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/5.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Politics</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/6.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Health</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/7.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Lifestyle</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/rising/8.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Entertainment</a>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                        <li>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/7.jpg"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-catagory"><a href="#">Business</a></div>
                                    <h2 class="entry-title">
                                        <a href="news-details.php">3 students arrested after
                                            body-slamming
                                            principal</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                        </li>
                    </ul>
                </div><!--/#widget-->

                <div class="widget">
                    <div class="add">
                        <a href="#"><img class="img-fluid" src="images/post/add/add6.jpg"
                                         alt="Image"/></a>
                    </div>
                </div><!--/#widget-->

                <div class="widget weather-widget">
                    <div id="weather-widget">
									<span class="weather-icon">
                                            						      		<img src="" alt="Icon"
                                                                                     class="img-fluid">
                                                                            </span>
                        <span class="temp"></span>
                        <span class="weather-humidity">87%</span>
                        <span class="weather-wind">3.6 MPH</span>
                    </div>
                </div><!--/#widget-->

            </div><!--/#sitebar-->
        </div>
    </div>
    </div><!--/.section-->
    </div><!--/.container-->
@endsection