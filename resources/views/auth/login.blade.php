@extends('frontView.master')

@section('title_area')
	User
@endsection

@section('Style_css')
<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/img/">
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('frontEnd')}}/css/bootstrap.min.css" >
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/meanmenu.min.css">
        <!-- Font-Awesome css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/font-awesome.min.css">
        <!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/pe-icon-7-stroke.css">
        <!-- Flaticon css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/flaticon.css">
        <!-- venobox css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/venobox/venobox.css" type="text/css" media="screen" />
        <!-- nivo slider css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/lib/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.css">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/responsive.css">
        <!-- modernizr css -->
        <script src="{{asset('frontEnd')}}/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/vendor/jquery-1.12.0.min.js"></script>
@endsection

@section('mainContent')
<div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="header-logo">
                            <a href="http://localhost/boipotro.com/public/">
                                <img src="{{asset('frontEnd')}}/img/lug.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-12 hidden-xs">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul id="nav">
                                    <li><a href="http://localhost/boipotro.com/public/">HOME</a></li>
                                    
                                    <li><a href="contact.html">CONTACT</a></li>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   
                                    <li><a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="http://localhost/boipotro.com/public/admin">Admin</a></li> 
                                            <li><a href="http://localhost/boipotro.com/public/login">User</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

	<!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">

                
                    <div class="col-md-6 col-sm-6">

                        <form method="POST" action="{{ route('login') }}" class="create-account-form" >
                       	@csrf
                            <h2 class="heading-title">
                                User Login
                            </h2>
                            <p class="form-row">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="lost-password form-group">
                                <a href="#" rel="nofollow">Forgot your password?</a>
                            </p> 
                            <div class="submit">					
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        SING IN
                                    </span>
                                </button>
                            </div>                          
                       </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form method="POST" action="{{ route('register') }}" class="create-account-form" >
                       	@csrf
                            <h2 class="heading-title">
                                Create an account
                            </h2>
                            <p class="form-row">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" placeholder="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone no.">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
                            </p>
                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                                                  
                       </form>

                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->
        
 


	
@endsection

@section('js_block')

        <!-- bootstrap js -->
        <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('frontEnd')}}/js/owl.carousel.min.js"></script>
        <!-- jquery-ui js -->
        <script src="{{asset('frontEnd')}}/js/jquery-ui.min.js"></script>
        <!-- jquery Counterup js -->
        <script src="{{asset('frontEnd')}}/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/waypoints.min.js"></script> 
        <!-- jquery countdown js -->
        <script src="{{asset('frontEnd')}}/js/jquery.countdown.min.js"></script>
        <!-- jquery countdown js -->
        <script type="text/javascript" src="{{asset('frontEnd')}}/venobox/venobox.min.js"></script>
        <!-- jquery Meanmenu js -->
        <script src="{{asset('frontEnd')}}/js/jquery.meanmenu.js"></script>
        <!-- wow js -->
        <script src="{{asset('frontEnd')}}/js/wow.min.js"></script>   
        <script>
            new WOW().init();
        </script>
        <!-- scrollUp JS -->        
        <script src="{{asset('frontEnd')}}/js/jquery.scrollUp.min.js"></script>
        <!-- plugins js -->
        <script src="{{asset('frontEnd')}}/js/plugins.js"></script>
        <!-- Nivo slider js -->
        <script src="{{asset('frontEnd')}}/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="{{asset('frontEnd')}}/lib/home.js" type="text/javascript"></script>
        <!-- main js -->
        <script src="{{asset('frontEnd')}}/js/main.js"></script>

@endsection