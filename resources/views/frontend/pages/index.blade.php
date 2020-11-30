@extends('frontend.pages.master1')
@section('title','Home Page (WorldPedia)')
@section('section')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="site-content col-lg-9">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="home-slider">
                                @foreach($technology->posts->take(5) as $post)
                                <div class="post feature-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-fluid"
                                                 src="{{asset('frontend/images/posts/' . $post->image)}}" alt="Image"/>
                                        </div>

                                        <div class="catagory world"><a
                                                href="{{route('listings',$technology->slug)}}">{{$technology->name}}</a>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <!--<div class="entry-meta">-->
                                        <!--    <ul class="list-inline">-->
                                        <!--        <li class="publish-date"><i class="fa fa-clock-o"></i><a-->
                                        <!--                href="#">2020-06-07 08:04:34</a></li>-->
                                        <!--        <li class="views"><i class="fa fa-eye"></i><a-->
                                        <!--                href="#">74</a></li>-->
                                        <!--        -->
                                        <!--        -->
                                        <!--        -->
                                        <!--        <li class="comments"><i class="fa fa-comment-o"></i><a-->
                                        <!--                href="#">0</a></li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                        <h2 class="entry-title">
                                            <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                                        </h2>
                                    </div>
                                </div><!--/post-->
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4">
                            @foreach($education->posts->take(2) as $post)
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{asset('frontend/images/posts/' . $post->image)}}" alt="{{$post->title}}"/>
                                    </div>
                                    <div class="catagory health"><span><a
                                                href="{{route('listings',$education->slug)}}">{{$education->name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <!--<div class="entry-meta">-->
                                    <!--    <ul class="list-inline">-->
                                    <!--        <li class="publish-date"><i class="fa fa-clock-o"></i><a-->
                                    <!--                href="#">2020-05-31 11:07:54 </a></li>-->
                                    <!--        <li class="views"><i class="fa fa-eye"></i><a-->
                                    <!--                href="#">66</a></li>-->

                                    <!--        <li class="loves"><i class="fa fa-comment-o"></i><a-->
                                    <!--                href="#">3</a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <h2 class="entry-title">
                                        <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                                @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @foreach($billionaire->posts->take(1) as $post)
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{asset('frontend/images/posts/' . $post->image)}}"
                                             alt="{{$post->title}}"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="{{route('listings',$billionaire->slug)}}">{{$billionaire->name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <!--<div class="entry-meta">-->
                                    <!--    <ul class="list-inline">-->
                                    <!--        <li class="publish-date"><i class="fa fa-clock-o"></i><a-->
                                    <!--                href="#">2020-03-19 04:17:18 </a></li>-->
                                    <!--        <li class="views"><i class="fa fa-eye"></i><a-->
                                    <!--                href="#">95</a></li>-->
                                    <!--        <li class="loves"><i class="fa fa-comment-o"></i><a-->
                                    <!--                href="#">1</a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <h2 class="entry-title">
                                        <a href="{{route('details', $post->slug)}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                                @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach($travel->posts->take(1) as $post)
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{asset('frontend/images/posts/' . $post->image)}}"
                                             alt="{{$post->title}}"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="{{route('listings',$travel->slug)}}">{{$travel->name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <!--<div class="entry-meta">-->
                                    <!--    <ul class="list-inline">-->
                                    <!--        <li class="publish-date"><i class="fa fa-clock-o"></i><a-->
                                    <!--                href="#">2020-05-31 07:45:41 </a></li>-->
                                    <!--        <li class="views"><i class="fa fa-eye"></i><a-->
                                    <!--                href="#">115</a></li>-->
                                    <!--        <li class="loves"><i class="fa fa-comment-o"></i><a-->
                                    <!--                href="#">0</a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <h2 class="entry-title">
                                        <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                                @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach($entertainment->posts->take(1) as $post)
                            <div class="post feature-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"
                                             src="{{asset('frontend/images/posts/' . $post->image)}}"
                                             alt="{{$post->title}}"/>
                                    </div>
                                    <div class="catagory technology"><span><a href="{{route('listings',$entertainment->slug)}}">{{$entertainment->name}}</a></span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <!--<div class="entry-meta">-->
                                    <!--    <ul class="list-inline">-->
                                    <!--        <li class="publish-date"><i class="fa fa-clock-o"></i><a-->
                                    <!--                href="#">2020-06-08 02:49:03 </a></li>-->
                                    <!--        <li class="views"><i class="fa fa-eye"></i><a-->
                                    <!--                href="#">57</a></li>-->
                                    <!--        <li class="loves"><i class="fa fa-comment-o"></i><a-->
                                    <!--                href="#">0</a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <h2 class="entry-title">
                                        <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                                    </h2>
                                </div>
                            </div><!--/post-->
                                @endforeach
                        </div>
                    </div>
                </div><!--/#content-->

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="add featured-add">
                        <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafias-add.gif"
                                         alt="Image"/></a><br/>
                        <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafias-add.gif"
                                         alt="Image"/></a>
                    </div>
                </div><!--/#add-->
            </div>
        </div><!--/.section-->

        <div class="section add inner-add">
            <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
        </div><!--/.section-->

        <div class="section">
            <div class="latest-news-wrapper">
                <h1 class="section-title">Latest News</h1>
                <div id="latest-news">
                    @foreach($newsUpdate->posts->take(10) as $post)
                    <div class="post medium-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-fluid" src="{{asset('frontend/images/posts/' . $post->image)}}"
                                     alt="{{$post->image}}"/>
                            </div>


                            <div
                                class="catagory news updates"><span><a
                                        href="{{route('listings',$newsUpdate->slug)}}">{{$newsUpdate->name}}</a></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <!--<div class="entry-meta">-->
                            <!--    <ul class="list-inline">-->
                            <!--        <li class="publish-date"><a href="#"><i-->
                            <!--                    class="fa fa-clock-o"></i> 2020-06-10 15:56:19</a>-->
                            <!--        </li>-->
                            <!--        <li class="views"><a href="#"><i class="fa fa-eye"></i>47</a></li>-->
                            <!--        <li class="loves"><a href="#"><i-->
                            <!--                    class="fa fa-comment-o"></i>0</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <h2 class="entry-title">
                                <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                            </h2>
                        </div>
                    </div><!--/post-->
                        @endforeach

                </div>
            </div><!--/.latest-news-wrapper-->
        </div><!--/.section-->
        <div class="section add inner-add">
            <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
        </div><!--/.section-->
        <div class="section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div id="site-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 tr-sticky">
                                <div class="left-content theiaStickySidebar">
                                    <div class="section world-news">
                                        <h1 class="section-title title"><a href="{{route('listings',$celebrity->slug)}}">{{$celebrity->name}} </a></h1>
                                        <div class="post">
                                            @php($celebrity = $celebrity->posts->take(5)->toArray())
                                            @php($celebrity1 = array_slice($celebrity, 0,1))
                                            @foreach($celebrity1 as $post)
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                         alt="{{$post['title']}}"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <!--<div class="entry-meta">-->
                                                <!--    <ul class="list-inline">-->
                                                <!--        <li class="publish-date"><a href="#"><i-->
                                                <!--                    class="fa fa-clock-o"></i>-->
                                                <!--                2020-06-08 11:45:22 </a>-->
                                                <!--        </li>-->
                                                <!--        <li class="views"><a href="#"><i-->
                                                <!--                    class="fa fa-eye"></i>83</a>-->
                                                <!--        </li>-->
                                                <!--        <li class="loves"><a href="#"><i-->
                                                <!--                    class="fa fa-comment-o"></i>0-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--        -->
                                                <!--        -->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',$post['slug'])}}">{{$post['title']}}</a>
                                                </h2>
                                                <div class="entry-content">
                                                    <p></p>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="list-post">
                                                <ul>
                                                    @php($celebrities = array_slice($celebrity, 1, 4))
                                                    @foreach($celebrities as $post)
                                                    <li>
                                                        <a href="{{route('details',$post['slug'])}}">{{$post['title']}}
                                                            <i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                        @endforeach
                                                </ul>
                                            </div><!--/list-post-->
                                        </div><!--/post-->
                                    </div><!--/.section-->
                                    <div class="section add inner-add">
                                        <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
                                    </div><!--/.section-->
                                    <div class="section technology-news">
                                        <h1 class="section-title"><a href="{{route('listings',$politic->slug)}}"> {{$politic->name}} </a></h1>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                @php($politic = $politic->posts->take(2)->toArray())
                                                @php($politics = array_slice($politic, 0, 1))
                                                @foreach($politics as $post)
                                                <div class="post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <img class="img-fluid"
                                                                 src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                                 alt="{{$post['title']}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">
                                                        <!--<div class="entry-meta">-->
                                                        <!--    <ul class="list-inline">-->
                                                        <!--        <li class="publish-date"><a href="#"><i-->
                                                        <!--                    class="fa fa-clock-o"></i> 2020-06-03 04:36:33-->
                                                        <!--            </a>-->
                                                        <!--        </li>-->
                                                        <!--        <li class="views"><a href="#"><i-->
                                                        <!--                    class="fa fa-eye"></i>68-->
                                                        <!--            </a></li>-->
                                                        <!--        <li class="loves"><a href="#"><i-->
                                                        <!--                    class="fa fa-comment-o"></i>0-->
                                                        <!--            </a>-->
                                                        <!--        </li>-->
                                                        <!--        -->
                                                        <!--        -->
                                                        <!--    </ul>-->
                                                        <!--</div>-->
                                                        <h2 class="entry-title">
                                                            <a href="{{route('details', $post['slug'])}}">{{$post['title']}}</a>
                                                        </h2>
                                                        <div class="entry-content">
                                                            <!--<p class="text-justify"><p>On Monday, after the US President Donald Trump fired off tweets and spent his weekend hiding in the White House Bunker, Trump has finally addressed the country. He gave his...</p>-->
                                                        </div>
                                                    </div>
                                                </div><!--/post-->
                                                    @endforeach
                                            </div>
                                            <div class="col-lg-4">
                                                @php($politics2 = array_slice($politic, 1,1) )
                                                @foreach($politics2 as $post)
                                                <div class="post small-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <img class="img-fluid"
                                                                 src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                                 alt="{{$post['title']}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">
                                                        <!--<div class="entry-meta">-->
                                                        <!--    <ul class="list-inline">-->
                                                        <!--        <li class="publish-date"><a href="#"><i-->
                                                        <!--                    class="fa fa-clock-o"></i> 2020-06-03 02:45:31-->
                                                        <!--            </a>-->
                                                        <!--        </li>-->
                                                        <!--    </ul>-->
                                                        <!--</div>-->
                                                        <h2 class="entry-title">
                                                            <a href="https://www.worldpedia.info/category/proposal-forwarded-for-mobilization-of-nepali-army-to-the-president/details">Proposal forwarded for mobilization of Nepali Army to the President !!!</a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div><!--/technology-news-->

                                    <div class="section add inner-add">
                                        <a href="#"><img class="img-fluid"
                                                         src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif"
                                                         alt="Image"/></a>
                                    </div><!--/.section add-->


                                    <div class="section photo-gallery">
                                        <h1 class="section-title title">Photo Gallery</h1>



                                        <div id="photo-gallery" class="carousel slide carousel-fade post"
                                             data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="https://www.worldpedia.info/frontend/images/gallery/PfAsUf15NzDuoZghnnOw.png"
                                                                     alt="Image"/></a>
                                                    <h2><a href="#">rojgarisanjal.com The Easiest Way to Get Your New Job</a></h2>
                                                </div>
                                                <div class="carousel-item ">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="https://www.worldpedia.info/frontend/images/gallery/9a709r9o1HyU00DEJISS.jpg"
                                                                     alt="Image"/></a>
                                                    <h2><a href="#">We offer many jobs vacancies right now</a></h2>
                                                </div>
                                            </div><!--/carousel-inner-->

                                            <ol class="gallery-indicators carousel-indicators">
                                                <li data-target="#photo-gallery" data-slide-to="0"
                                                    class="active">
                                                    <img class="img-fluid"
                                                         src="https://www.worldpedia.info/frontend/images/gallery/PfAsUf15NzDuoZghnnOw.png"
                                                         alt="Image"/>
                                                </li>
                                                <li data-target="#photo-gallery" data-slide-to="1"
                                                    class="">
                                                    <img class="img-fluid"
                                                         src="https://www.worldpedia.info/frontend/images/gallery/9a709r9o1HyU00DEJISS.jpg"
                                                         alt="Image"/>
                                                </li>
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
                                        <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
                                    </div><!--/.section-->
                                    <div class="section add inner-add">
                                        <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
                                    </div><!--/.section-->
                                    <div class="section health-section">
                                        <h1 class="section-title"><a href="{{route('listings',$business->slug)}}">Business </a></h1>



                                        <div class="health-feature">
                                            @php($business = $business->posts->take(5)->toArray())
                                            @php($business1 = array_slice($business, 0,1))
                                            @foreach($business1 as $post)
                                            <div class="post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-fluid"
                                                             src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                             alt="{{$post['title']}}"/>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <!--<div class="entry-meta">-->
                                                    <!--    <ul class="list-inline">-->
                                                    <!--        <li class="publish-date"><a href="#"><i-->
                                                    <!--                    class="fa fa-clock-o"></i> 2020-06-07 09:04:29-->
                                                    <!--            </a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="views"><a href="#"><i-->
                                                    <!--                    class="fa fa-eye"></i>44</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="loves"><a href="#"><i-->
                                                    <!--                    class="fa fa-comment-o"></i>0-->
                                                    <!--            </a></li>-->
                                                    <!--    </ul>-->
                                                    <!--</div>-->
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',$post['slug'])}}">{{$post['title']}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                                @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                @php($business2 = array_slice($business, 1, 2))
                                                @foreach($business2 as $post)
                                                <div class="post small-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <img class="img-fluid"
                                                                 src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                                 alt="{{$post['title']}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">
                                                        <!--<div class="entry-meta">-->
                                                        <!--    <ul class="list-inline">-->
                                                        <!--        <li class="publish-date"><a href="#"><i-->
                                                        <!--                    class="fa fa-clock-o"></i> 2020-06-06 04:43:07-->
                                                        <!--            </a>-->
                                                        <!--        </li>-->
                                                        <!--    </ul>-->
                                                        <!--</div>-->
                                                        <h2 class="entry-title">
                                                            <a href="{{route('details',$post['slug'])}}">{{$post['title']}}</a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
                                                    @endforeach
                                            </div>
                                            <div class="col-lg-6">
                                                @php($business3 = array_slice($business, 3, 2))
                                                @foreach($business3 as $post)
                                                    <div class="post small-post">
                                                        <div class="entry-header">
                                                            <div class="entry-thumbnail">
                                                                <img class="img-fluid"
                                                                     src="{{asset('frontend/images/posts/' . $post['image'])}}"
                                                                     alt="{{$post['title']}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <!--<div class="entry-meta">-->
                                                            <!--    <ul class="list-inline">-->
                                                            <!--        <li class="publish-date"><a href="#"><i-->
                                                            <!--                    class="fa fa-clock-o"></i> 2020-06-06 04:43:07-->
                                                            <!--            </a>-->
                                                            <!--        </li>-->
                                                            <!--    </ul>-->
                                                            <!--</div>-->
                                                            <h2 class="entry-title">
                                                                <a href="{{route('details',$post['slug'])}}">{{$post['title']}}</a>
                                                            </h2>
                                                        </div>
                                                    </div><!--/post-->
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--/.health-section -->

                                </div><!--/.left-content-->
                            </div>
                            <div class="col-lg-4 col-md-6 tr-sticky">
                                <div class="middle-content theiaStickySidebar">
                                    <div class="section sports-section">
                                        <h1 class="section-title title"><a href="{{route('listings',$other->slug)}}">{{$other->name}} </a></h1>
                                        @foreach($other->posts->take(18) as $post)
                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid"
                                                         src="{{asset('frontend/images/posts/' . $post->image)}}"
                                                         alt="{{$post->title}}"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <!--<div class="entry-meta">-->
                                                <!--    <ul class="list-inline">-->
                                                <!--        <li class="publish-date"><a href="#"><i-->
                                                <!--                    class="fa fa-clock-o"></i>2020-06-08 15:36:10</a>-->
                                                <!--        </li>-->
                                                <!--        <li class="views"><a href="#"><i-->
                                                <!--                    class="fa fa-eye"></i>48</a>-->
                                                <!--        </li>-->
                                                <!--        <li class="loves"><a href="#"><i-->
                                                <!--                    class="fa fa-comment-o"></i>0-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <h2 class="entry-title">
                                                    <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                            @endforeach

                                    </div><!--/.sports-section -->

                                    <div class="section">
                                        <div class="add inner-add">
                                            <a href="#"><img class="img-fluid"
                                                             src="https://www.worldpedia.info/frontend/images/post/add/grafias-add.gif"
                                                             alt="Image"/></a>
                                        </div>
                                    </div>

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
                                                            src="https://www.youtube.com/embed/hwhi-x93LdA"
                                                            allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="video-catagory"><a href="#">Why Visit Nepal in 2020? A Must Watch Video</a></div>
                                                <h2 class="entry-title">
                                                    <a href="#">Why Visit Nepal in 2020? A Must Watch Video</a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->

                                        <div class="video-post-list">
                                            <ul>
                                            </ul>
                                        </div>
                                    </div> <!-- /.video-section -->



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
                                <li><a href="https://www.facebook.com/worldpedia.info/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCbCxgaE2hisGIrq0ThJNolA"  target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!--/#widget-->

                        <div class="widget">
                            <div class="add">
                                <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafias-add.gif"
                                                 alt="Image"/></a>
                            </div>
                        </div><!--/#widget-->

                        <div class="widget">
                            <h1 class="section-title title">Popular Post </h1>
                            <ul class="post-list">
                                @foreach($popularPosts as $post)
                                <li>
                                    <div class="post small-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid"
                                                     src="{{asset('frontend/images/posts/' . $post->image)}}"
                                                     alt="{{$post->title}}"/>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <!--<div class="video-catagory"><a href="#">News Updates</a></div>-->
                                            <h2 class="entry-title">
                                                <a href="{{route('details',$post->slug)}}">{{$post->title}}</a>
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
            <a href="#"><img class="img-fluid" src="https://www.worldpedia.info/frontend/images/post/add/grafiasflat.gif" alt="Image"/></a>
        </div><!--/.section-->
    </div><!--/.container-->
@endsection
