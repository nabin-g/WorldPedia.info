@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                    <div class="x_title">
                        <div style="margin-top:20px;">
                            @include('backend.includes.message')
                        </div>
                        <h2><i class="fa fa-tag"></i>&nbsp;Admin Profile </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        {{--profile design--}}
                        <div class="col-md-6 col-sm-6 col-xs-12 center-margin">
                            <div class="profile_img">
                                <!-- end of image cropping -->
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <div class="avatar-view" title="Change the avatar">
                                        <img src="{{URL::to('backend/images/profile_img/'.Auth::user()->image)}}"
                                             alt="Avatar" style="width:217px;">
                                    </div>
                                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                </div>
                            </div>
                            <h3>{{Auth::user()->fname}}</h3>
                            <a class="btn btn-success" href="{{route('edit-profile')}}"
                               style="background: #1abb9c;"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <a class="btn btn-success" href="{{route('register')}}" style="background: #1abb9c;"><i
                                    class="fa fa-plus"></i>Add Users</a>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->is_super === 1)
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-tags"></i> All Users </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up" style="color:green;"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close" style="color:firebrick;"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="color:#73879c;">Image</th>
                                    <th style="color:#73879c;">First Name</th>
                                    <th style="color:#73879c;">Last Name</th>
                                    <th style="color:#73879c;">Status</th>
                                    <th style="color:#73879c;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>
                                            <img src="{{URL::to('/backend/images/profile_img',$admin->image)}}"
                                                 width="150px"
                                                 height="140px"></td>
                                        <td style="text-align: center">{{$admin->fname}}</td>
                                        <td style="text-align: center">{{$admin->lname}}</td>
                                        <td style="text-align: center">
                                            <form action="" {{route('admin-update',['id'=>$admin->id])}} method="post">
                                                @if($admin->status === 1)
                                                    <button type="submit" class=" btn btn-success">Active</button>
                                                @else
                                                    <button type="submit" class="btn btn-danger">Inactive</button>
                                                @endif
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{route('admin-delete',['id'=>$admin->id])}}"
                                               class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                {{--,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,--}}
            </div>
        </div>
    </div>
@endsection
