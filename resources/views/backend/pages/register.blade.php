@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                    <div style="margin-top:30px; width: 200px;">
                        @include('backend.includes.message')
                    </div>
                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Add User !! </h2>
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
                        <form class="form-horizontal form-label-left" method="post" action="{{route('register')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category">First Name <span class="required"></span> </label>
                                <div>
                                    <input type="text" name="fname" required
                                           class="form-control">
                                </div>
                                <label for="category">Last Name <span class="required"></span></label>
                                <div>
                                    <input type="text" name="lname" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Email <span class="required"></span> </label>
                                <div>
                                    <input type="email" name="email" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Password<span class="required"></span> </label>
                                <div>
                                    <input type="password" name="password" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Confirm Password <span class="required"></span> </label>
                                <div>
                                    <input type="password" name="password_confirmation" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>User Image</label>
                                <input type="file" name="image" class="btn btn-default">
                                <br>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success pull-right">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection



