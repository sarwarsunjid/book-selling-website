@extends('frontView.master')

@section('title_area')
    boipotro.com | An online Bookstore 
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

@section('slider')
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
                                    
                                    <li><a href="">CONTACT</a></li>
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
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="#">Menu</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="shop.html">Shopping Page</a></li>
                                            <li><a href="single-product.html">Single Shop Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
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
        <!-- Mobile Menu End -->   
@endsection

@section('mainContent')
        <div class="map-area">
            <div id="googleMap" style="width:100%;height:445px;"></div>
        </div>
        <!-- Address Information Area Start -->
        <div class="address-info-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm">
                        <div class="address-single">
                            <div class="all-adress-info">
                                <div class="icon">
                                    <span><i class="fa fa-user-plus"></i></span>
                                </div>
                                <div class="info">
                                    <h3>PHONE</h3>
                                    <p>+880-1914583690</p> 
                                    <p>+880-1952607134</p>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="address-single">
                            <div class="all-adress-info">
                                <div class="icon">
                                    <span><i class="fa fa-map-marker"></i></span>
                                </div>
                                <div class="info">
                                    <h3>ADDRESS</h3>
                                    <p>344/A Tilpapara,</p>
                                    <p>Khilgaon,Dhaka-1217</p>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="address-single no-margin">
                            <div class="all-adress-info">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <h3>E-MAIL</h3>
                                    <p>boipotro@gmail.com</p>
                                    <p>www.boipotro.com</p>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <!-- Address Information Area End -->
        

        <!-- Contact Form Area Start -->
        <div class="contact-form-area">
            <div class="container">
                <div class="about-title">
                    <h3>LEAVE A MESSAGE</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('coc'))
                            <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">*</button>
                        <strong>{{ Session('coc') }}</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>
                                {{ $error }} 
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('cc'))
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">*</button>
                        <strong>{{ Session('cc') }}</strong>
                    </div>
                    @endif
                        <form action="http://localhost/boipotro.com/public/store" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="contact-form-left">
                                        <input type="text" placeholder="Your Name" name="name" id="name" />
                                        <input type="email" placeholder="Your Email" name="email" id="email" />
                                        <input type="text" placeholder="Your phone" name="phone" id="phone" />
                                    </div>                              
                                </div>
                                <div class="col-md-7">
                                    <div class="contact-form-right">
                                        <div class="input-message">
                                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                            <input class="btn btn-default" type="submit"  name="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Area End -->
        
        
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
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(23.763474, 90.431483)
              };
              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-icon.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>       

@endsection


