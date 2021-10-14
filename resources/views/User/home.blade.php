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
                                    <li><a href="home/create">Create Shop</a></li>
                                    <li><a href="http://localhost/boipotro.com/public/home/show">View Post</a></li> &nbsp &nbsp&nbsp&nbsp
                                    <li> 
                                    <form method="get" action="http://localhost/boipotro.com/public/home/search/" class="title-4">
                                        <input type="text" name="name"placeholder="Enter your Category here">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                                    </li>
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
        <!-- About Us Area Start -->
            <div class="shopping-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <div class="shop-widget-top">
                                <aside class="widget widget-categories">
                                    <h2 class="sidebar-title text-center">CATEGORY</h2>
                                    @foreach($categories as $category)
                                    <ul class="sidebar-menu">
                                        <li>
                                            <a href="#">
                                               <i class="fa fa-angle-double-right"></i>
                                                {{$category->name}}                                         
                                                <span>{{$category->posts_count}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endforeach
                                </aside> 
                                                     
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-tab-area">
                            <div class="shop-tab-list">
        
                            </div>
                           
                        </div>
    @if(!empty($post)) 
     @foreach($post->all() as $post)
        <div class="about-us-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="about-bottom-inner">
                        <div class="col-md-3">
                            <div class="about-image">
                                <img src="{{asset("img/$post->image")}}" width="500" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h1>{{$post->bookname}}</h1>
                                </div>

                                <div class="availability">
                                    <span>Description</span>
                                </div>
                                    <p>{{$post->description}}</p>
                                    
                                    <label for="">Price : </label> {{$post->price}} <br>    
                                    <label for="">Phone Number : </label> {{$post->phonenumber}}
                             
                             <div class="availability">
                                    <span><a href="http://localhost/boipotro.com/public/home/singleshow/{{ $post->id }}">See Post And Comment</a></span>
                                </div>
                            </div>
                             <form method="post" action="{{ asset('home/rating').'/'.$post->id }}">
                                    @method('POST')
                                    @csrf
                                 <!-- http://localhost/learn/public/home/rating/ -->   
                                    <select class="form-control"name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected>4</option>
                                        <option value="5" selected>5</option>
                                    </select>
                                <br>
                                    <input type="submit"  class="btn btn-alert" value="rate">
                            </form>
                                <br>
                                    <section class="comment-list">
                                      <!-- First Comment -->
                                      <article class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                          <figure class="thumbnail">
                                            <img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
                                            <figcaption class="text-center">  user</figcaption>
                                          </figure>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                          <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                              <header class="text-left">  
                                              </header>
                                              <div class="comment-post">
                                                <hr>
                                                @if(Session::has('cc'))
                                                <div class="alert alert-success">
                                                    <button class="close" data-dismiss="alert">*</button>
                                                    <strong>{{ Session('cc') }}</strong>
                                                </div>
                                                @endif
                                                <form method="post" action="{{ asset('home/comment').'/'.$post->id }}">
                                                         @method('POST')
                                                            @csrf
                                                <p>
                                                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Write Your Comment" name="comment">
                                                </p>
                                                <input type="submit"class="btn btn-success" value="comment">
                                                 </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </article>
                                    </section>
                                </div>
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
{{-- About Us Area End --}}

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





                        