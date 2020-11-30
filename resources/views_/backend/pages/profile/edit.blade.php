@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: 25%">
                <div class="x_panel">
                    <div class="x_title">
                        @if(session('success'))
                            <center>
                                <div class="alert alert-success alert-dismissible" style="width:500px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{session('success')}}</strong>
                                </div>

                            </center>
                        @endif
                        @if(session('error'))
                            <center>
                                <div class="alert alert-danger alert-dismissible" style="width:500px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{session('error')}}</strong>
                                </div>

                            </center>
                        @endif
                        @if(session('alert'))
                            <p class="alert alert-success"> {{session('alert')}}   </p>
                        @endif
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        <h2><i class="fa fa-tag"></i> Edit Profile </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#profile" id="home-tab" role="tab"
                                                                          data-toggle="tab" aria-expanded="true">Edit
                                        Profile</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#password" role="tab" id="profile-tab"
                                       data-toggle="tab" aria-expanded="false">Change
                                        Password</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="profile"
                                     aria-labelledby="home-tab">

                                    <form class="form-horizontal form-label-left" method="post"
                                          action="{{route('admin-edit',['id'=>Auth::user()->id])}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="category">First Name <span></span> </label>
                                            <div>
                                                <input type="text" name="fname" value="{{Auth::user()->fname}}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Last Name <span></span> </label>
                                            <div>
                                                <input type="text" name="lname" value="{{Auth::user()->lname}}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Email <span class="required"></span> </label>
                                            <div>
                                                <input type="email" name="email" value="{{Auth::user()->email}}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>User Image</label>
                                            <input type="file" name="image" class="btn btn-default">
                                            <br>
                                            @php
                                                $image = URL::to('/backend/images/profile_img/',Auth::user()->image);
                                            @endphp
                                            <img src="{{$image}}"
                                                 height="60" class="" alt="">
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success pull-right"
                                                        style="background: #1abb9c;">Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="password" aria-labelledby="profile-tab">
                                    <form action="{{route('password-update')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                        <div class="form-group">
                                            <label for="oldPassword">Current Password <span></span> </label>
                                            <div>
                                                <input type="password" name="oldpassword" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="newPassword">New Password <span></span> </label>
                                            <div>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="rePassword">Re-enter Password <span></span> </label>
                                            <div>
                                                <input type="password" name="password_confirmation"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success pull-right"
                                                    style="background: #1abb9c;"> Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
