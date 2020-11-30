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
                        <h2>Video Section
                            {{--                            <small>Manage Your Video From Here</small>--}}
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
                                    <th style="text-align: center">Title</th>
                                    <th style="text-align: center">Short Description</th>
                                    <th style="text-align: center">Video</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($videos as $video)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{$loop->index+1}}</th>

                                        <td style="text-align: center">{{$video->title}}</td>
                                        <td style="text-align: center">{{$video->short_description}}</td>
                                        <td style="text-align: center">
                                            <iframe class="embed-responsive-item"
                                                    src="{{$video->link}}"
                                                    allowfullscreen></iframe>
                                        </td>
                                        <td style="text-align: center">
                                            <div class="inline" style="margin-left: 80px;">
                                                <div style="float:left">
{{--                                                    <a href=""--}}
{{--                                                       class="btn btn-info btn-xs editButton"--}}
{{--                                                       data-id="{{$video->id}}"--}}
{{--                                                       data-link="{{$video->link}}"--}}
{{--                                                       data-shortdescription="{{$video->short_description}}"--}}
{{--                                                    ><i class="fa fa-trash-o"></i>--}}
{{--                                                        Edit--}}
{{--                                                    </a>--}}
                                                    <a href="{{route('video.delete',['id'=>$video->id])}}"
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
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel2">Add Video Link</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-label-left" method="post"
                                              action="{{route('video.store')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group col-lg-12">
                                                <label for="category">Title <span class="required">*</span> </label>
                                                <div>
                                                    <input type="text" name="title" id="title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="link">Link: <span class="required">*</span> </label>
                                                <div>
                                                    <input type="text" name="link" id="link" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="category">Short Description <span class="required">*</span>
                                                </label>
                                                <div>
                                                    <textarea type="text" name="short_description"
                                                              id="short_description" class="form-control"
                                                              rows="3"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group col-lg-12">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /modals -->
                    </div>
                </div>
            </div>
            {{$videos->links()}}
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('footScript')
    <script>
        $(document).ready(function () {
            $('.editButton').on('click', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                var url = '{{route('video.update',['null'])}}/' + id;
                var title = $(this).data('title');
                var link = $(this).data('link');
                var short_description = $(this).data('shortdescription');
                $('.modal').modal('show');
            });
        })
    </script>
@endsection

