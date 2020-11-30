@extends('backend.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error )
                            <p class=" alert-success">{{$error}}</p>

                        @endforeach
                    @endif

                    @if(session('success'))
                        <p class="alert alert-success">{{session('success')}}</p>

                    @endif
                    <div class="x_title">
                        <h2>Advertisement Section
                            <small>Manage Your Ads From Here</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bs-example-modal-sm"><i class="fa fa-plus"></i>Add here
                            </button>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="text-align: center">#</th>
                                    <th style="text-align: center" class="col-md-2">Image</th>
                                    <th style="text-align: center" class="col-md-1">Page</th>
                                    <th style="text-align: center" class="col-md-1">Position</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ads as $ad)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{$loop->index+1}}</th>
                                        <td style="text-align: center; width: 350px" ;>
                                            <img src="{{URL::to('/frontend/images/bigyapans/'.$ad->image)}}"
                                                 height="50" alt="">
                                        </td>
                                        <td style="text-align: center">{{$ad->page}}</td>
                                        <td style="text-align: center">{{$ad->position}}</td>
                                        <td style="text-align: center">
                                            <form action="{{route('ad-status',['id'=>$ad->id])}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$ad->id}}">
                                                @if($ad->status === 1)
                                                    <button type="submit"
                                                            class="btn btn-success btn-xs">Active
                                                    </button>
                                                @else
                                                    <button type="submit" class="btn btn-danger btn-xs">Inactive
                                                    </button>
                                                @endif
                                            </form>
                                        </td>
                                        <td style="text-align: center">
                                            <div class="inline" style="margin-left: 150px;">
                                                <div style="float:left">
                                                    <a href="{{route('delete-bigyapan',['id'=>$ad->id])}}"
                                                       onclick="return confirm('Are you sure you want to delete this item?')"
                                                       class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{--///////modal///////////////--}}
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">Add advertisement</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-label-left" method="post"
                                              action="{{route('bigyapan')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group col-lg-12">
                                                <label for="select-from">Select Category:<span class="required">*</span></label>
                                                <select class="form-control" id="cata" name="category">
                                                    <option>Choose Category</option>
                                                    <option value="home">Home Page</option>
                                                    <option value="single">Single Page</option>
                                                    <option value="detail">Detail Page</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="category">Image: <span class="required">*</span> </label>
                                                <div>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="select-from">Select Position:<span class="required">*</span></label>
                                                <select class="form-control" id="position" name="position">
                                                    <option value="flat">Flat Banner</option>
                                                    <option value="side">Side Banner</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label for="category">URL: <span class="required">*</span> </label>
                                                <div>
                                                    <input type="text" name="url" class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group col-lg-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /modals -->
                    </div>
                </div>
            </div>
            {{$ads->links()}}
        </div>
    </div>
    <!-- /page content -->
@endsection
