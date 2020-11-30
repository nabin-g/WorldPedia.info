@extends('frontend.pages.master1')
@section('title','About_us')
@section('section')
    <div class="page-breadcrumbs">
        <h1 class="section-title title">About Us</h1>
    </div>
    <div class="about-us welcome-section">
        <div class="row">
            <div class="col-lg-6 content-section">
                <div class="about-us-content">
                    <h2>{{isset($abouts)? $abouts->title:''}} </h2>
                    <p>{!! isset($abouts) ? $abouts->description:'' !!}</p>
                </div>
            </div>
            <div class="col-lg-6 image-section">
                <div class="about-us-image">
                    @if(isset($abouts) && $abouts->image)
                        <img class="img-fluid" src="{{URL::to('/frontend/images/abouts/'.$abouts->image)}}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="row">
            <div class="col-md-4">
                <div class="about-us-content">
                    <h2>Backgrounds</h2>
                    <p>{{isset($abouts) ? $abouts->backgrounds:''}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-us-content">
                    <h2>Our Approach</h2>
                    <p>{{isset($abouts) ? $abouts->approach:''}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-us-content">
                    <h2>Methodology</h2>
                    <p>{{isset($abouts) ? $abouts->methodology:''}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
