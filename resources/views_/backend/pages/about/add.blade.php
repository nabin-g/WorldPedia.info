@extends('backend.master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div style="margin-top:65px;">
                    @include('backend.includes.message')
                </div>
                <div class="title_left">
                    <h3>About Section</h3>
                </div>
                @php
                    $url = route('about-add');
                    $bttn = 'Add';
                    $title = 'Add';
                if (isset($abouts))
                {
                $url = route('about-edit',['id'=>$abouts->id]);
                $bttn = 'Update';
                $title = 'Edit';
                }
                @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{$title}}<small>About section from here</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form action="{{$url}}" method="Post" class="form-horizontal form-label-left"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">About
                                            Title
                                            <span>*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="title"
                                                   value="{{isset($abouts) ? $abouts->title:''}}"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Image
                                            <span>*</span> </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-4 col-xs-4" type="file"
                                                   name="image">
                                            @php
                                                $image = isset($abouts) && $abouts->image ? URL::to('frontend/images/abouts/'. $abouts->image):''
                                            @endphp
                                            <img src="{{$image}}" style="float: right; margin-top: 5px;"
                                                 height="80" class="" alt="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="Description">Description
                                            <span>*</span> </label>
                                        <textarea name="description"
                                                  class="desc"> {!! isset($abouts) ? $abouts->description:''!!}</textarea>
                                        <br>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label
                                            class="control-label col-md-3 col-sm-3 col-xs-12">Backgrounds</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="resizable_textarea form-control"
                                                          placeholder="Backgrounds"
                                                          name="background">{{isset($abouts) ? $abouts->backgrounds:''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Our
                                            Approach</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="resizable_textarea form-control"
                                                      placeholder="Our Approach"
                                                      name="approach">{{isset($abouts) ? $abouts->approach:''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Methodology</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="resizable_textarea form-control"
                                                      placeholder="Methodology"
                                                      name="methodology">{{isset($abouts) ? $abouts->methodology:''}}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">{{$bttn}}</button>
                                         {{--   <form
                                                action="{{route('status-update',['id'=> isset($abouts) ? $abouts->id:''])}}"
                                                method="post">
                                                @if(isset($abouts) ? $abouts->status === 1:'')
                                                    <button type="submit" class="btn btn-success">Shown</button>
                                                @else
                                                    <button type="submit" class="btn btn-danger">Hide</button>
                                                @endif
                                            </form>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
@section('footScript')
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>

        tinymce.init({
            selector: 'textarea.desc',
            plugins: 'image imagetools',
            width: 1028,
            height: 305
        });
    </script>

@endsection
