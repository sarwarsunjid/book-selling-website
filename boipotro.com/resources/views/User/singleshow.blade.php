@extends('User.master')

@section('title_area')
    User Profile
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
                            <a href="http://localhost/boipotro.com/public/home">
                                <img src="{{asset('frontEnd')}}/img/lug.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 hidden-xs">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul id="nav">
                                    <li><a href="http://localhost/boipotro.com/public/home">Home</a></li>
                                    <li><a href="http://localhost/boipotro.com/public/home/create">Create Shop</a></li>
                                    <li><a href="http://localhost/boipotro.com/public/home/show">View Post</a></li>
                                </ul>
                            </nav>
                        </div>                        
                    </div>

                    <div class="col-md-1 hidden-sm">
                        <div class="header-right">
                            
                                    <div class="header-right">
                            <ul>
                               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->name}}   <span class="caret"></span>
                                </a>
                                  
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>        
                           </ul>    
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    
                                </li>
                                <div class="col-md-1 hidden-sm">
                        

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- Breadcrumbs Area Start -->

        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                           <h2>My Account</h2> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a title="Return to Home" href="index.html">Home</a>
                                </li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Breadcrumbs Area Start -->

        <!-- Contact Form Area Start -->  
            <div class="about-us-area section-padding">
		    <div class="container">
                            <div class="row">
                                <div class="about-top-inner">
                                    <div class="col-md-5">
                                                @foreach($post->all()  as $post)
                                            <div class="about-content">
                                                <img src="{{asset("img/$post->image")}}" width="500">
                                            </div>
                                            </div>
                       
                                    <div class="col-md-6 col-sm-5">
                                    <div class="single-product-details">
                                        
                                        <h2>{{$post->bookname }}</h2>
                                        <div class="availability">
                                            <span>Description</span>
                                                <p>{{ $post->description }}</p>
                                                <p> <label for="">Phone : </label> {{ $post->phonenumber }}</p>
                                                <p> <label for="">Price : </label> {{ $post->price }}</p>
                                        <p> <label for="">Price : </label> {{ $post->price }}</p>
                                    @endforeach
                                    @foreach($ratings as $rating)
                                                <p><label for="">Rating : </label> {{ $rating->rating }}</p>
                                            @endforeach
                                        <div class="social-share">
                                            <label>Share: </label>
                                            <ul class="social-share-icon">
                                                <li><a href="#"><i class="flaticon-social"></i></a></li>
                                                <li><a href="#"><i class="flaticon-social-1"></i></a></li>
                                                <li><a href="#"><i class="flaticon-social-2"></i></a></li>
                                            </ul> 
                                            
                                            
                                            <br><br><br>
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-md-7">
                                                  <h2 class="page-header">Comments</h2>
                                                    <section class="comment-list">
                                                      <!-- First Comment -->
                                                      <!-- Second Comment Reply -->
                                                      @foreach($comments as $c)
                                                      <article class="row">
                                                        <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                                          <figure class="thumbnail">
                                                            <img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
                                                            <figcaption class="text-center">   user</figcaption>
                                                          </figure>
                                                        </div>
                                                        <div class="col-md-9 col-sm-9">
                                                          <div class="panel panel-default arrow left">
                                                            <div class="panel-heading right">Reply</div>
                                                            <div class="panel-body">
                                                              <header class="text-left">
                                                              </header>
                                                              <div class="comment-post">
                                                                <p>
                                                                  {{ $c->comment  }}
                                                                </p>
                                                              </div>
                                                              <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </article>
                                                    </section>
                                                     @endforeach
                                                </div>
                                            </div>
                                        </div>                   
                                    </div>
                                </div>         
                                    <div class="col-md-6">
                                        <div class="about-image">
                                            <img src="img/about/1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="about-bottom-inner">
                                    <div class="col-md-6">
                                        <div class="about-image">
                                            <img src="img/about/2.jpg" alt="">
                                        </div>
                                    </div>      
                                </div>
            		      </div>
            		</div>
            		<!-- About Us Area End -->
               </div> 
        </div> 
</div>
<br><br><br><br><br><br>                    

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





                        