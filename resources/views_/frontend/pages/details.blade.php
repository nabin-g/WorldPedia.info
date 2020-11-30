@extends('frontend.pages.master1')
<?php $title = htmlspecialchars($post->slug);?>

@php
    $route = Request::route()->getName();
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@endphp

@section('meta')
    <meta property="og:url" content="{{$actual_link}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$post->title}}"/>
    <meta property="og:description" content="{{ $post->details }}"/>
    <meta property="og:image" content="{{URL::to('frontend/images/posts/'.$post->image)}}"/>
    <meta name="keywords" content="Worldpedia"/>
@endsection



@section('title',strtoupper($title))
@section('section')
    <div class="section">
        <div class="row">

            <div class="col-md-8 col-lg-9">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has($msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
                    @endif
                @endforeach
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <div id="site-content" class="site-content">
                    <div class="row">
                        <div class="col">
                            <div class="left-content">
                                <div class="details-news">
                                    <div class="post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid"
                                                     src="{{URL::to('frontend/images/posts/'.$post->image)}}"
                                                     alt="Image"/>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="posted-by"><i class="fa fa-user"></i> By <a
                                                            href="#">{{$post->author}}</a></li>
                                                    <li class="publish-date"><a href="#"><i
                                                                class="fa fa-clock-o"></i> {{$post->created_at}} </a>
                                                    </li>
                                                    <!--<li class="views"><a href="#"><i-->
                                                    <!--            class="fa fa-eye"></i>{{$post->view}}</a></li>-->
                                                    <!--<li class="loves"><a href="#"><i-->
                                                    <!--            class="fa fa-heart-o"></i>{{$post->like}}</a></li>-->
                                                    <!--<li class="comments"><i class="fa fa-comment-o"></i><a-->
                                                    <!--        href="#">{{$post->comment}}</a></li>-->
                                                </ul>
                                            </div>
                                            <div class="fb-share-button share-buttons"
                                                 data-href="{{route('details',['slug'=>$post->slug])}}"
                                                 data-layout="button_count">
                                            </div>
{{--                                            <i id="twitter_share" class="fa fa-twitter fs20"--}}
{{--                                               style="position: relative; bottom: 4px;"></i>--}}

                                            {{--                                            <div class="twitter_share_block">--}}
                                            {{--                                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
                                            {{--                                                <a class="twitter-share-button"--}}
                                            {{--                                                   href="https://twitter.com/intent/tweet"--}}
                                            {{--                                                   data-text="{{$post->title}}"--}}
                                            {{--                                                   data-url="{{route('details',['slug'=>$post->slug])}}"--}}
                                            {{--                                                   >Tweet</a>--}}
                                            {{--                                            </div>--}}
                                            <h2 class="entry-title">
                                                {{$post->title}}
                                            </h2>
                                            <div class="entry-content">
                                                {!! $post->details !!}

                                            </div>
                                        </div>
                                    </div><!--/post-->
                                </div><!--/.section-->
                            </div><!--/.left-content-->
                        </div>
                    </div>
                </div><!--/#site-content-->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="post google-add">
                            <div class="add inner-add text-center">
                                <a href="#"><img class="img-fluid"
                                                 src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}"
                                                 alt="Image"/></a>
                            </div><!--/.section-->
                        </div><!--/.google-add-->

                        <div class="comments-wrapper">
                            <h1 class="section-title title">Comments</h1>
                            <ul class="media-list">
                                @foreach($post->comments as $comment)
                                    <li class="media">
                                        <div class="media-body">
                                            <h2><a href="#">{{$comment->name}}</a></h2>
                                            {{--                                            date('d-m-Y', strtotime($user->from_date));--}}
                                            <h3 class="date"><a
                                                    href="#">{{date('D, d M, Y', strtotime($comment->created_at))}}</a>
                                            </h3>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="comments-box">
                                <h1 class="section-title title">Leave a Comment</h1>
                                <form id="comment-form" action="{{route('comment.post')}}" name="comment-form"
                                      method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control"
                                                       required="required">
                                            </div>
                                        </div>
                                        {{--                                        <div class="col-md-4">--}}
                                        {{--                                            <div class="form-group">--}}
                                        {{--                                                <label>Subject</label>--}}
                                        {{--                                                <input type="text" name="subject" class="form-control" required>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Your Text</label>
                                                <textarea name="comment" id="comment" required="required"
                                                          class="form-control" rows="5"></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{--                        <div class="section">--}}
                        {{--                            <h1 class="section-title">More in Worlds</h1>--}}
                        {{--                            <div class="row">--}}
                        {{--                                @foreach($popularPosts as $post)--}}
                        {{--                                    <div class="col-md-6 col-lg-4">--}}
                        {{--                                        <div class="post medium-post">--}}
                        {{--                                            <div class="entry-header">--}}
                        {{--                                                <div class="entry-thumbnail">--}}
                        {{--                                                    <img class="img-fluid"--}}
                        {{--                                                         src="{{URL::to('frontend/images/posts/'.$post->image)}}"--}}
                        {{--                                                         alt="Image"/>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="post-content">--}}
                        {{--                                                <div class="entry-meta">--}}
                        {{--                                                    <ul class="list-inline">--}}
                        {{--                                                        <li class="publish-date"><a href="#"><i--}}
                        {{--                                                                    class="fa fa-clock-o"></i>{{$post->created_at}} </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="views"><a href="#"><i--}}
                        {{--                                                                    class="fa fa-eye"></i>{{$post->view}}</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="loves"><a href="#"><i--}}
                        {{--                                                                    class="fa fa-heart-o"></i>{{$post->like}}</a></li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                </div>--}}
                        {{--                                                <h2 class="entry-title">--}}
                        {{--                                                    <a href="{{route('details',['slug'=>$post->slug])}}">{{$post->title}}</a>--}}
                        {{--                                                </h2>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div><!--/post-->--}}
                        {{--                                    </div>--}}
                        {{--                                @endforeach--}}
                        {{--                            </div>--}}
                        {{--                        </div><!--/.section -->--}}
                    </div>
                </div>
            </div><!--/.col-sm-9 -->

            <div class="col-md-4 col-lg-3 tr-sticky">
                <div id="sitebar" class="theiaStickySidebar">
                    <div class="widget">
                        <div class="add featured-add">
                            <a href="#"><img class="img-fluid"
                                             src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                             alt="Image"/></a>
                        </div>
                    </div><!--/#widget-->

                    <div class="widget follow-us">
                        <h1 class="section-title title">Follow Us</h1>
                        <ul class="list-inline social-icons">
                            <li><a href="{{$info->social->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="{{$info->social->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="{{$info->social->gmail}}" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="{{$info->social->linkedln}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="{{$info->social->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div><!--/#widget-->

                    <div class="widget">
                        <div class="add">
                            <a href="#"><img class="img-fluid"
                                             src="{{URL::to('frontend/images/post/add/grafias-add.gif')}}"
                                             alt="Image"></a>
                        </div>
                    </div><!--/#widget-->
                </div><!--/#sitebar-->
            </div>
        </div>
    </div><!--/.section-->
@endsection
@section('scripts')
    <script>
        $('#twitter_share').click(function (e) {
            e.preventDefault();
            var loc = "{{route('details',['slug'=>$post->slug])}}";
            var title = "{{$post->title}}";
            window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 225) + ', left=' + $(window).width() / 2 + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        });
    </script>
@endsection
