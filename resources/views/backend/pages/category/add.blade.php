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
                        <h2>Category Section <small>Add catagory here</small></h2>
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
                            $url = route('category-add');
                            $bttn = 'Add';
                        if (isset($category)) {
                                    $bttn = 'Update';
                                    $url = route('category-edit',['id'=>$category->id]);
                        }
                        @endphp
                        <form class="form-horizontal form-label-left input_mask" method="post"
                              action="{{$url}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="title" id="category" class="form-control"
                                           value="{{isset($category) ? $category->name:''}}"
                                           placeholder="Enter category name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Order</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="order" id="order" class="form-control"
                                           value="{{isset($category) ? $category->order:''}}"
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
                        <h2>Available Catagories <small>Edit/Delete Category From Here</small></h2>
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
                                <th>Category</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $list)
                                <tr>
                                    <th scope="row" style="text-align: center">{{$loop->index+1}}</th>
                                    <td style="text-align: center">{{isset($list) ? $list->name:''}}</td>
                                    <td style="text-align: center">{{$list->order}}</td>
                                    <td style="text-align: center">
                                        <form action="{{route('status-update',['id'=> $list->id])}}"
                                              method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$list->id}}">
                                            @if($list->status === 1)
                                                <button type="submit"
                                                        class="btn btn-success btn-xs">Active
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-danger btn-xs">Inactive</button>
                                            @endif
                                        </form>
                                    </td>
                                    <td style="text-align: center">
                                        <div class="inline">
                                            <div style="float: left">
                                                <a href="{{route('category-edit',['id'=>$list->id])}}"
                                                   class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            </div>
                                            <div style="float:left">
                                                <a href="{{route('category-delete',['id'=>$list->id])}}"
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

