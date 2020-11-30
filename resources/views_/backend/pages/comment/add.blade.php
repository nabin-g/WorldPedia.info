@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="x_panel">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error )
                        <p class=" alert-success">{{$error}}</p>

                    @endforeach
                @endif

                @if(session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>

                @endif
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">

                            <table class="table table-striped" id="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{$loop->index+1}}</th>
                                        <td class="text-center">{{$comment->post->title}}</td>
                                        <td style="text-align: center">{{$comment->name}}</td>
                                        <td style="text-align: center">
                                            {{$comment->email}}
                                        </td>
                                        <td style="text-align: center">
                                            {{$comment->comment}}
                                        </td>
                                        <td style="text-align: center">
                                            <div class="inline">
                                                <div style="float:left">
                                                    <a href="{{route('comment-delete',['id'=>$comment->id])}}"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footScript')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').dataTable();
        });
    </script>
@endsection

