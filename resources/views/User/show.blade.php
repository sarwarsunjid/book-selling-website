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
        <br>    
        
        <!-- Contact Form Area Start -->
        <div class="contact-form-area">
            <div class="container">
                <div class="about-title">
                    <div class="availability">
            <span>User Shop</span>
        </div>
                    
                    
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellpadding="0" width=""> 
                        <thead>
                            <tr>
                                <th class="th-sm">ID</th>
                                <th class="th-sm">Book Name</th>
                                <th class="th-sm">Description</th>
                                <th class="th-sm">Image</th>
                                <th class="th-sm">Phone Number
                                <th class="th-sm">Price</th>
                                <th class="th-sm">Created Time</th>
                                <th class="th-sm">Updated Time</th>
                                <th class="th-sm">Edit</th>
                                <th class="th-sm">Delete</th>
                            </tr>

                        </thead>   
                   
                    <tbody>
                        @foreach($post as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->bookname}}</td>
                            <td>{{$post->description}}</td>
                            <td><img src="{{asset("img/$post->image")}}" width="200"  ></td>
                            <td>{{$post->phonenumber}}</td>
                            <td>{{$post->price}}</td>
                            <td>{{$post->Created_at}}</td>
                            <td>{{$post->Updated_at}}</td>
                            <td><a href="http://localhost/boipotro.com/public/home/edit/{{ $post->id}}/">Edit</a></td>
                            <td><a href="http://localhost/boipotro.com/public/home/delete/{{ $post->id}}/">Delete</a></td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                     </table>

                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
                
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
@endsection





                        
    </div>
</body>
</html>
