@extends('frontend.pages.master1')
@section('title','Contact_Us')
@section('section')

    <div class="row">
        <div class="col-md-8 col-lg-9 tr-sticky">
            <div style="margin-top:65px;">
                @include('backend.includes.message')
            </div>
            <div class="contact-us theiaStickySidebar">
                <div class="message-box">
                    <h1 class="section-title title">Drop Your Message</h1>
                    <form id="comment-form" name="comment-form" method="post" action="{{route('contact-action')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Your Text</label>
                                    <textarea name="comment" id="details" required="required" class="form-control"
                                              rows="5"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- contact-us -->
        </div>
        <div class="col-md-4 col-lg-3 tr-sticky">
            <div id="sitebar" class="theiaStickySidebar">

                <div class="contact-info">
                    <h1 class="section-title title">Contact Information</h1>
                    <ul class="list-inline">
                       
                        <li> 
                            <address> <br/>
                                <strong> <i class="fa fa-home" aria-hidden="true"  ></i></strong>  {{isset($info) ? $info->branch:''}}<br/>
                                <strong> <i class="fa fa-map-marker" aria-hidden="true"  ></i></strong> {{isset($info) ? $info->address:''}}<br/>
                                 <strong> <i class="fa fa-phone" aria-hidden="true"  ></i></strong> {{isset($info) ? $info->phone:''}} <br/>
                                 
                                 <strong> <i class="fa fa-envelope" aria-hidden="true"  ></i></strong> {{isset($info) ? $info->email:''}}<br/>
                            </address>
                        </li>
                    </ul>
                </div>
                @include('frontend.includes.social')
            </div><!--/#sitebar-->
        </div>
    </div><!-- row -->

@endsection
