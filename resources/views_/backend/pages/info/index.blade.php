@extends('backend.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div style="margin-top:65px;">
                    @include('backend.includes.message')
                </div>
                <div class="title_left">
                    <h3>Site Configuration</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Site
                                    <small>Manage your company information from here</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                @php
                                    $url = route('company-info');
                                    $bttn = 'Add';
                                if (isset($infos)) {
                                    $url = route('company-edit',['id'=>$infos->id]);
                                    $bttn = 'Update';
                                }
                                @endphp
                                <form action="{{$url}}" method="Post" class="form-horizontal form-label-left"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Company
                                            Address
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="address"
                                                   value="{{isset($infos) ? $infos->address:''}}"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch">Branch
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="branch" name="branch"
                                                   value="{{isset($infos) ? $infos->branch:''}}"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="email" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="email" value="{{isset($infos) ? $infos->email:''}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Contact Number
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   value="{{isset($infos) ? $infos->phone:''}}"
                                                   name="phone" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">logo
                                            <span class="">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="logo" type="file">
                                            @php
                                                $image = isset($infos) && $infos->logo ? URL::to('/frontend/images/'. $infos->logo):''
                                            @endphp
                                            <img src="{{$image}}" style="float: right; margin-top: 20px;"
                                                 height="50" class="" alt="" width="150">

                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h2>Social
                                        <small> Links</small>
                                    </h2>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="facebook" type="text"
                                                   value="{{$infos->social->facebook}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Youtube
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="youtube" type="text"
                                                   value="{{$infos->social->youtube}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gmail+
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="gmail" type="text"
                                                   value="{{$infos->social->gmail}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">LinkedIn
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="linkedln" type="text"
                                                   value="{{$infos->social->linkedln}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class=" form-control col-md-7 col-xs-12"
                                                   name="twitter" type="text"
                                                   value="{{$infos->social->twitter}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">{{$bttn}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
