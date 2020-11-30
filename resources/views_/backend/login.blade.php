<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title style="text-align: center"> Admin Login </title>

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('backend/font/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="{{route('admin-login')}}" autocomplete="off">
                    <h1>Admin Login Form</h1>
                    @if (session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif
                    @csrf
                    <h5 style="text-align: left"> Email:</h5>
                    <input type="email" class="form-control" required name="email" value="{{ old('email') }}"
                           placeholder="Email">

                    <h5 style="text-align: left"> Password:</h5>
                    <input type="password" class="form-control" required name="password" placeholder="Password">

                    <input type="checkbox" name="remember" class="pull-left">
                    <label for="" class="pull-left">&nbsp;&nbsp; Remember Me</label><br><br>
                    <button type="submit" class="btn btn-primary pull-right"> Login</button>
                    <div class="clearfix"></div>
                    <div>
                        <p>©2019 All Rights Reserved. Grafiastech!. Privacy and Terms</p>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>

