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
                            <a href="{{route('contact-message')}}"><i class="fa fa-arrow-circle-left"
                                                                      style="font-size:20px;color:white">&nbsp;<span
                                            style="font-size: 18px;color:white">BACK</span></i></a></span>
                            <div class="clearfix"></div>
                            <div class="x_content">
                                <div class="dashboard-widget-content">

                                    <ul class="list-unstyled timeline widget">
                                        <a href="{{route('confirm-delete',['id' => $datas->id])}}"
                                           class="btn btn-sm btn-info pull-right" title='delete message'><i
                                                    class='fa fa-trash'></i></a>

                                        <h3 style=" font-family:'Tangerine', serif; ">
                                            Name:&nbsp;&nbsp;{{$datas->name}}</h3>
                                        <h3 style=" font-family:'Tangerine', serif; ">
                                            Email:&nbsp;&nbsp;{{$datas->email}}</h3>
                                        <br><br>
                                        <h3>Message:</h3>

                                        <div class="container" style="background-color:antiquewhite">
                                            <h3 style=" font-family:'Tangerine', serif; ">
                                                <br>{{$datas->details}}
                                            </h3>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection