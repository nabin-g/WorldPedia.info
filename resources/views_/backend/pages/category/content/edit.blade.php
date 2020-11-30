<?php
$route = route('post-add');
$meta_key = '';
$meta_description = '';
$details = '';
$author = '';
$image = '';
$youtube_link = '';
$title = '';
$state = "Add";

if (isset($post) && sizeof($post->toArray()) && !empty($post->toArray())) {
    $route = route('post-update',[$post->id]);
    $meta_key = $post->meta_key;
    $meta_description = $post->meta_description;
    $details = $post->details;
    $author = $post->author;
    $image = $post->image;
    $youtube_link = $post->youtube_link;
    $title = $post->title;
    $state = "Edit";

}
if (isset($errors) && sizeof($errors)) {
    $meta_key = old('meta_key');
    $meta_description = old('meta_description');
    $author = old('author');
    $title = old('title');
    $youtube_link = old('youtube_link');
    $title = old('title');

}
?>

@extends('backend.master')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
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
                        <h2>Edit Content</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{$route}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-lg-4">
                                <label for="category">Categories</label>
                                <select size="10" multiple class="form-control" name="category[]"
                                        id="catagory">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}"
                                        @if(!empty($post)){!! $post->category->contains($cat->id) ? 'selected="selected"' : '' !!} @endif
                                        >{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="meta-key">Meta-Keywords: <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" name="meta_key" value="{{$meta_key}}" required
                                           class="form-control">
                                </div>
                                <br>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="metadesc">Meta-Description: <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" name="meta_description"  value="{{$meta_description}}"
                                           required class="form-control">
                                </div>
                                <br>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="author">Author: <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" name="author" required value="{{$author}}"
                                           class="form-control">
                                </div>
                                <br>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="category">Title: <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" name="title" value="{{$title}}" required
                                           class="form-control">
                                </div>
                                <br>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="category">Main image: <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <img src="{{URL::to('/frontend/images/posts/',$image)}}" style="width: 20%">
                            </div>
{{--                            <div class="form-group col-lg-6">--}}
{{--                                <label for="category">Middle image:--}}
{{--                                </label>--}}
{{--                                <div>--}}
{{--                                    <input type="file" name="middle_image" class="form-control">--}}
{{--                                </div>--}}
{{--                                <img src="{{URL::to('/frontend/images/posts/',$middle_image)}}" style="width: 20%">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-lg-6">--}}
{{--                                <label for="category">Last image:--}}
{{--                                </label>--}}
{{--                                <div>--}}
{{--                                    <input type="file" name="last_image" class="form-control">--}}
{{--                                </div>--}}
{{--                                <img src="{{URL::to('/frontend/images/posts/',$last_image)}}" style="width: 20%">--}}
{{--                            </div>--}}
                            <div class="form-group col-lg-6">
                                <label for="category">Youtube Link
                                </label>
                                <div>
                                    <input type="text" name="youtube_link" value="{{$youtube_link}}"
                                           class="form-control">
                                </div>
                            </div>


                            <div class="form-group col-lg-12">
                                <label for="details">Description: <span class="required">*</span>
                                </label>
                                <div>
                                    <textarea name="details" class="desc">{!! $details !!}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footScript')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>

        var options = {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        };

        CKEDITOR.replace( 'details',options);
    </script>
{{--    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>--}}
{{--    <script>--}}

{{--        tinymce.init({--}}
{{--            selector: 'textarea.desc',--}}
{{--            plugins: 'image imagetools',--}}
{{--            width: 700,--}}
{{--            height: 305--}}
{{--        });--}}
{{--    </script>--}}
@endsection

