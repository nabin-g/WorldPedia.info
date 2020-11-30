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
                        <h2>Post
                            <small>this is post section</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a class="btn btn-primary"
                                    href="{{route('content-create')}}"><i class="fa fa-plus"></i>Add here
                            </a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-12">
                            <table class="table table-striped" id="table">
                                <thead>
                                <tr>
                                    <th style="text-align: center">#</th>
                                    {{--                                    <th style="text-align: center" class="col-md-2">Category</th>--}}
                                    <th style="text-align: center" class="col-md-2">Title</th>
                                    {{--                                    <th style="text-align: center" class="col-md-2">Author</th>--}}
                                    {{--                                    <th style="text-align: center" class="col-md-2">Meta Key</th>--}}
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{$loop->index+1}}</th>
                                        {{--                                        <td style="text-align: center">--}}
                                        {{--                                            @foreach($post->category as  $cats)--}}
                                        {{--                                                <span class="label label-default">{{$cats->name}}</span>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        </td>--}}
                                        <td style="text-align: center" width="70%">{{$post->title}}</td>
                                        {{--                                        <td style="text-align: center">--}}
                                        {{--                                            {{$post->author}}--}}
                                        {{--                                        </td>--}}
                                        {{--                                        <td style="text-align: center">--}}
                                        {{--                                            {{$post->meta_key}}--}}
                                        {{--                                        </td>--}}
                                        <td style="text-align: center">
                                            <form action="{{route('post-status',['id'=>$post->id])}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                @if($post->status == 1)
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
                                            <div class="inline" style="margin-left: 25px;">
                                                <div style="float: left">
                                                    <a href="{{route('post-edit',['id'=>$post->id])}}"
                                                       class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </div>
                                                <div style="float:left">
                                                    <a href="{{route('content-delete',['id'=>$post->id])}}"
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
                                                    @foreach($categories as $cat)
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
                                                    <input type="text" name="meta_description" required
                                                           class="form-control">
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
                                            <div class="form-group col-lg-12">
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
                                            <div class="form-group col-lg-6">
                                                <label for="category">Middle image:
                                                </label>
                                                <div>
                                                    <input type="file" name="middle_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="category">Final image:
                                                </label>
                                                <div>
                                                    <input type="file" name="last_image"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="youtube_link">Youtube Link
                                                </label>
                                                <div>
                                                    <input type="text" name="youtube_link"
                                                           placeholder="https://www.youtube.com/" class="form-control">
                                                </div>
                                                <br>
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
                {{$posts->links()}}
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('footScript')
    {{--    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>--}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>

        var options = {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        };

        CKEDITOR.replace('details', options);
    </script>
    <script>
        // tinymce.init({
        //     selector: 'textarea.desc',
        //     plugins: 'image imagetools',
        //     width: 700,
        //     height: 305
        // });

        $(document).ready(function () {
            var table = $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'selected',
                    'selectedSingle',
                    'selectAll',
                    'selectNone',
                    'selectRows',
                    'selectColumns',
                    'selectCells'
                ],
                select: true
            });
        });
    </script>
@endsection

