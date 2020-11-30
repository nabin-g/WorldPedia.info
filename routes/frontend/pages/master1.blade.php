<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body>
<div id="main-wrapper" class="homepage">
    @include('frontend.includes.header')


    <div class="container">
        @yield('section')
    </div><!--/.container-->
    @include('frontend.includes.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $(document).keydown(function (e) {
            console.log(e.which);
            if (e.which == 13) {
                e.preventDefault();
                var val = $('#search').val();
                if (val) {
                    $('#searchForm').submit();
                }
            }
        });
    </script>

    {{--    <div class="subscribe-me text-center">--}}
    {{--        <h1>Don’t Miss The Hottest News</h1>--}}
    {{--        <h2>Subscribe our Newsletter</h2>--}}
    {{--        <a href="#close" class="sb-close-btn"><img class="img-fluid"--}}
    {{--                                                   src="{{URL::to('/frontend/images/others/close-button.png')}}"--}}
    {{--                                                   alt="Image"/></a>--}}
    {{--        <form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">--}}
    {{--            <div class="input-group">--}}
    {{--                <span class="input-group-addon"><img src="{{URL::to('/frontend/images/others/icon-message.png')}}"--}}
    {{--                                                     alt="Image"/></span>--}}
    {{--                <input type="text" placeholder="Enter your email" name="email">--}}
    {{--                <button type="submit" name="subscribe">Go</button>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </div>  <!--/.subscribe-me-->--}}

    @include('frontend.includes.foot')
</div>


</body>

</html>
