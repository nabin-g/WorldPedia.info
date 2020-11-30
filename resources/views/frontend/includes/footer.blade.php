<footer id="footer">
    <div class="footer-top">
        <div class="container text-center">
            <div class="logo-icon">
                <img class="img-fluid" src="{{URL::to('/frontend/images/'.$info->logo)}}"
                     alt="Image"/>
            </div>
        </div>
    </div> 

    <div class="footer-bottom">
        <div class="container text-center">
            <p>©Worldpedia.info All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('contacts')}}" style='color:#fff;'>Contact</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="{{url('/')}}" style='color:#fff;'>Home</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="{{route('about')}}" style='color:#fff;'>About</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered By: <a
                    href="https://grafiastech.com/" target="_blank" style='color:#fff;'>&nbsp;Grafias Technology</a></p>
        </div>
    </div>
</footer>
