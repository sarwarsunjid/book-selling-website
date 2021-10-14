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
                                    
                                    <li><a href="http://localhost/boipotro.com/public/contact">CONTACT</a></li>
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
                                    
                                    <li><a href="http://localhost/boipotro.com/public/contact">CONTACT</a></li>
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


    <div class="slider-area">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider" class="slides"> 
                    <img src="{{asset('frontEnd')}}/img/slider/1.jpg" alt="" title="#slider-direction-1"  />
                    <img src="{{asset('frontEnd')}}/img/slider/2.jpg" alt="" title="#slider-direction-2"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="text-center slider-direction">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title-1">SELL YOUR USED BOOKS</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a href="#" class="title-3">SEE MORE</a>
                    </div>
                    <!-- layer 4 -->
                    <div class="layer-4">
                        <form action="http://localhost/boipotro.com/public/search" class="title-4">
                            <input type="text" name="name" placeholder="Enter your book category here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title-1">SELL YOUR USED BOOKS</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a href="#" class="title-3">SEE MORE</a>
                    </div>
                    <!-- layer 4 -->
                    <div class="layer-4">
                        <form action="http://localhost/boipotro.com/public/search" class="title-4">
                            <input type="text" name="name" placeholder="Enter your book category here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('mainContent')

    
        <!-- Featured Product Area Start -->
        <div class="featured-product-area section-padding">
            <h2 class="section-title">PRODUCTS</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-menu">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="first-item active">
                                    <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">New Arrival</a>
                                </li>
                                <li role="presentation">
                                    <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">Products</a>
                                </li>
                            </ul>
                        </div>         
                    </div>
                </div>   
                <div class="row">
                    
                    <div class="product-list tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                            <div class="featured-product-list indicator-style">
                                 @if(!empty($data))
                                        @foreach($data as $post)
                                <div class="single-p-banner">
                                   
                                    <div class="col-md-3">
                                        
                                        <div class="single-banner">
                                            
                                            <div class="product-wrapper">
                                                <a href="#" class="single-banner-image-wrapper">
                                                    <img alt="" src="{{asset("img/$post->image")}}">
                                                </a>
                                                <div class="product-description">
                                                    <div class="functional-buttons">
                                                        <a href="#" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="fa fa-compress"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-bottom text-center">
                                                <a href="#">{{ $post->bookname }}</a>

                                            </div>
                                            
                                        </div>
                                           
                                    </div>
                                    
                                </div>
                                    @endforeach
                                    @endif
                                
                                
                            </div>
                        </div>
                
                    </div>
                </div>             
            </div>
        </div>
        
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


