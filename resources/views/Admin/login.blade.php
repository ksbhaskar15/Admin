<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Login</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content="">
        <meta name="author" content="360degreeinfo">
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <style type="text/css">
            .error{ float: left; color: red; }
        </style>

    </head>
    <body class="fix-menu">
        <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="login-card card-block auth-body"> 
                            <form class="md-float-material" method="post"  action="{{ url('check') }}"> 
                            	@csrf() 
                                <div class="auth-box">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center txt-primary">Sign In</h3>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $username }}"> 
                                             @error('username')
                                                <span  class="f-left m-0 text-danger">Enter Username</span>
                                             @enderror
                                         </div>  
                                    </div>
                                    <br>
                                    <div class="row">
                                         <div class="col-md-12">
                                            <input type="password" class="form-control" name="password" placeholder="Password"> 
                                            @error('password')
                                               <span class="f-left m-0 text-danger">Enter Password</span>
                                             @enderror
                                         </div>
                                    </div>
                                      
                                    <div class="row m-t-25 text-left">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                            <a href="forgot-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <script type="text/javascript" src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/lib/tether/dist/js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>  
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').validate({
                    rules:{
                        username:{ required:true },
                        password:{ required:true }
                    },
                    messages:{
                        username:{ required:"Please Enter Username" },
                        password:{ required:"Please Enter Password" }
                    }
                })
            });
        </script>
    </body> 
</html>