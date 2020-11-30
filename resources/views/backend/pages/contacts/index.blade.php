@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="dashboard-content-section">
            <div style="margin-top:65px;">
                @include('backend.includes.message')
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="row x_title">
                            <h2>Client Messages
                                <small style="grey:white">recent</small>
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <ul class="list-unstyled timeline widget">

                                    @foreach($datas as $message)

                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a href="{{route('message-view',['id' => $message->id])}}">&nbsp;<span
                                                                style="color:grey;font-size: 17px;">{{$message->name}} &nbsp; &nbsp; &nbsp;{{$message->email}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                style="font-size:13px;color:navajowhite;">{!!$message->inquiry !!}</span><span>  <a
                                                                    href="{{route('confirm-delete',['id' => $message->id])}}"
                                                                    class="btn btn-sm btn-info pull-right"
                                                                    title='delete message'><i
                                                                        class='fa fa-trash'></i></a>
                                                </span></a>
                                                </h2>
                                                <div class="byline">
                                                    <a href="{{route('message-view',['id' => $message->id])}}"> <span
                                                                style="color:navajowhite;">{{ \Carbon\Carbon::parse($message->created_at)->format('l j F Y')}}</span></a>
                                                </div>
                                                <p class="excerpt"></p></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="x_title"></div>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection