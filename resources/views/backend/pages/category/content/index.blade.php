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

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="margin-top:80px; margin-left: 150px;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">Add new post</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-label-left" method="post"
                                              action="{{route('post-add')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group col-lg-4">
                                                <label for="category">Categories</label>
                                                <select size="10" multiple class="form-control" name="category[]"
                                                        id="catagory">
                                                     @foreach($errors as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 20px;">
                                                <label for="meta-key">Meta-Keywords: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <input type="text" name="meta_key" required class="form-control">
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 20px;">
                                                <label for="metadesc">Meta-Description: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <input type="text" name="meta_description" required class="form-control">
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 20px;">
                                                <label for="author">Author: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <input type="text" name="author" required class="form-control">
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="category">Title: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <input type="text" name="title" required class="form-control">
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="category">Main image: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <input type="file" name="image" required class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label for="details">Description: <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <textarea name="details" class="desc"></textarea>
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
        </div>
    </div>
@endsection
