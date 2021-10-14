<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>  @yield('title_area')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/img/">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
        

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        @yield('Style_css')
        
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--Header Area Start-->
       
        <!--Header Area End-->
        <!-- Mobile Menu Start -->
       
        <!-- Mobile Menu End -->        
        <!-- slider Area Start -->
        @yield('slider')
        <!-- slider Area End-->    
        <!-- Online Banner Area Start -->    
        @yield('mainContent')
        <!-- Featured Product Area End -->
       
        <!-- Footer Area Start -->
        @include('User.inc.footer')
        <!--End of Quickview Product-->         
        <!-- all js here -->
        <!-- jquery latest version -->
        @yield('js_block')
    </body>
</html>