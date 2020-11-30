@extends('backend.master')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                <div class="count">{{count(\App\Models\Admin::all())}}</div>
{{--                <span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Categories</span>
                <div class="count">{{count(\App\Models\Category::all())}}</div>
{{--                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>--}}
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Posts</span>
                <div class="count green">{{count(\App\Models\Post::all())}}</div>
{{--                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Galleries</span>
                <div class="count">{{count(\App\Models\Gallery::all())}}</div>
{{--                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>--}}
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Comments</span>
                <div class="count">{{count(\App\Models\Comment::all())}}</div>
{{--                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Adverties</span>
                <div class="count">{{count(\App\Models\Bigyapan::all())}}</div>
{{--                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
            </div>
        </div>
    </div>
    <!-- /top tiles -->
@endsection
