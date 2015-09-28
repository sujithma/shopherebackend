<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop</title>

        <!-- Bootstrap Core CSS      -->
        <!-- {!! HTML::style('Assets/css/bootstrap.css') !!} -->
        <!-- Custom CSS -->
        {!! HTML::style('Assets/css/bootstrap.min.css') !!}
        {!! HTML::style('Assets/css/portfolio-item.css') !!} 
        {!! HTML::style('Assets/css/sidebar.css') !!}         
        @yield('style')
        @include('includes.header')
    </head>

    <body>
        
        <!-- Page Content -->
        <!-- /.container -->        
        {!! HTML::script('Assets/js/jquery.js') !!}
        {!! HTML::script('Assets/js/bootstrap.js') !!} 
        {!! HTML::script('Assets/js/bootstrap.min.js') !!}
        {!! HTML::script('Assets/js/sidebar.js') !!}
        @yield('script')
        @include('includes.slider')
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                        @include('includes.footer')
                    </div>
                </div>
            </div>
        </div>
        
     
    </body>

</html>