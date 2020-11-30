@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
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
                        <h2>Gallery Section
                            <small>Add images here</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @php
                            $url = route('galleries');
                            $bttn = 'Add';
                        if (isset($gallery)) {
                                    $bttn = 'Update';
                                    $url = route('gallery-edit',['id'=>$gallery->id]);
                        }
                        @endphp
                        <form class="form-horizontal form-label-left input_mask" method="post"
                              action="{{$url}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" name="image" id="image" class="form-control"
                                           value="">
                                    @php
                                        $image = '';
                                            if(isset($gallery) && ($gallery->image)) {
                                                $image = URL::to('/frontend/images/gallery/'. $gallery->image);
                                            }
                                    @endphp
                                    <img src="{{$image}}" style="float: right; margin-top: 5px;"
                                         height="50" class="" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Caption</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="caption" id="caption" class="form-control"
                                           value="{{isset($gallery) ? $gallery->caption:''}}"
                                           placeholder="Enter Caption for this image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Order</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="order" id="order" class="form-control"
                                           value="{{isset($gallery) ? $gallery->order:''}}"
                                           placeholder="Enter order number of category">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-3">
                                    <button type="submit" class="btn btn-success">{{$bttn}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Available Galleries
                            <small>Edit/Delete Galleries From Here</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <th scope="row" style="text-align: center">{{$loop->index+1}}</th>
                                    <td style="text-align: center">
                                        <img src="{{URL::to('/frontend/images/gallery/'.$gallery->image)}}" alt=""
                                             style="width: 25%">
                                    </td>
                                    <td style="text-align: center">{{$gallery->order}}</td>
                                    <td style="text-align: center" width="150px">
                                        <div class="inline">
                                            <div style="float: left">
                                                <a href="{{route('gallery-edit',['id'=>$gallery->id])}}"
                                                   class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            </div>
                                            <div style="float:left">
                                                <a href="{{route('gallery-delete',['id'=>$gallery->id])}}"
                                                   onclick="return confirm('Are you sure you want to delete this item?')"
                                                   class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

