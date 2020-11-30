@extends('frontend.pages.master1')
@section('title',$search ,'World Pedia')
@section('section')
    <div class="page-breadcrumbs">
        <h1 class="section-title">{{$search}}</h1>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section">
                            <div class="row">
                                @if(count($posts) > 0)
                                    @foreach($posts as $key=>$p)
                                        <div class="col-md-6 col-lg-4">
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
                                                                        class="fa fa-clock-o"></i>
                                                                    {{$p->created_at}}</a></li>
                                                            <li class="views"><a href="#"><i
                                                                        class="fa fa-eye"></i>{{$p->view}}</a>
                                                            </li>
                                                            <li class="loves"><a href="#"><i
                                                                        class="fa fa-heart-o"></i>{{$p->like}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="{{route('details',['slug'=>$p->slug])}}">{{$p->title}}</a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-6 col-lg-4">
                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <p>No Record Found</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div><!--/.section -->

                        <div class="google-add">
                            <div class="add inner-add text-center">
                                <a href="#"><img class="img-fluid"
                                                 src="{{URL::to('frontend/images/post/add/grafiasflat.gif')}}"
                                                 alt="Image"/></a>
                            </div><!--/.section-->
                        </div><!--/.google-add-->
                    </div>
                </div>
                <div class="pagination-wrapper">
                    {{ $posts->links() }}

                    {{--                    <ul class="pagination">--}}
                    {{--                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i--}}
                    {{--                                        class="fa fa-long-arrow-left"></i> Previous Page</span></a></li>--}}
                    {{--                        <li><a href="#">1</a></li>--}}
                    {{--                        <li><a href="#">2</a></li>--}}
                    {{--                        <li class="active"><a href="#">3</a></li>--}}
                    {{--                        <li><a href="#">4</a></li>--}}
                    {{--                        <li><a href="#">5</a></li>--}}
                    {{--                        <li><a href="#">6</a></li>--}}
                    {{--                        <li><a href="#">7</a></li>--}}
                    {{--                        <li><a href="#">8</a></li>--}}
                    {{--                        <li><a href="#">9</a></li>--}}
                    {{--                        <li><a href="#">10</a></li>--}}
                    {{--                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next Page <i--}}
                    {{--                                        class="fa fa-long-arrow-right"></i></span></a></li>--}}
                    {{--                    </ul>--}}
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
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!--/#widget-->
                </div><!--/#sitebar-->
            </div>
        </div>
    </div><!--/.section-->
@endsection
