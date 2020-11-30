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
    @yield('scripts')
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
{{--    <script>(function(d, s, id) {--}}
{{--            var js, fjs = d.getElementsByTagName(s)[0];--}}
{{--            if (d.getElementById(id)) return;--}}
{{--            js = d.createElement(s); js.id = id;--}}
{{--            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=241110544128";--}}
{{--            fjs.parentNode.insertBefore(js, fjs);--}}
{{--        }(document, 'script', 'facebook-jssdk'));--}}
{{--    </script>--}}

    <script>
        // chat
        var div = document.createElement('div');
        div.className = 'fb-customerchat';
        div.setAttribute('page_id', '2164287780515821');
        div.setAttribute('ref', '');
        document.body.appendChild(div);
        window.fbMessengerPlugins = window.fbMessengerPlugins || {
            init: function () {
                FB.init({
                    appId: '1678638095724206',
                    autoLogAppEvents: true,
                    xfbml: true,
                    version: 'v3.0'
                });
            }, callable: []
        };
        window.fbAsyncInit = window.fbAsyncInit || function () {
            window.fbMessengerPlugins.callable.forEach(function (item) {
                item();
            });
            window.fbMessengerPlugins.init();
        };
        setTimeout(function () {
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        }, 0);
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
