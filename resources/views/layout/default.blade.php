<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Dashboard with Off-canvas Sidebar</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         {!! HTML::style('assets/css/bootstrap.min.css') !!}  
         {!! HTML::style('assets/css/styles.css') !!}           
        @yield('style')
       
    </head>
    <body>
@include('includes.header') 

<div class="container-fluid">    
      <div class="row row-offcanvas row-offcanvas-left">        
         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">           
            <ul class="nav nav-sidebar">
              <li class="{{ Request::is('home*') ? 'active' : '' }}"><a href="{{ action('AdminController@home') }}">Home</a></li>              
              <li class="{{ Request::is('product*') ? 'active' : '' }}"><a href="{{ action('ProductController@product') }}">Products</a></li>
              <li class="{{ Request::is('purchase*') ? 'active' : '' }}"><a href="{{ action('PurchaseController@purchase') }}">Purchase</a></li>
              <li class="{{ Request::is('sales*') ? 'active' : '' }}"><a href="{{ action('salesController@sales') }}">Sales</a></li>
              <li class="{{ Request::is('banking*') ? 'active' : '' }}"><a href="{{ action('BankingController@banking') }}">Banking</a></li>
              <li class="{{ Request::is('profit*') ? 'active' : '' }}"><a href="{{ action('ProfitController@profit') }}">Profit</a></li>
            </ul>                     
        </div>
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
              <h1 class="page-header">
            Dashboard
            <p class="lead">(<a href="http://www.bootply.com/128936">with off-canvas sidebar</a>)</p>
          </h1>

                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-center">
                  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
          </div> -->
          
         

          @yield('content')
          
      </div><!--/row-->
    </div>
</div><!--/.container-->

@include('includes.footer')
        
    <!-- script references 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        
         {!! HTML::script('assets/js/jquery.js') !!}

        {!! HTML::script('assets/js/scripts.js') !!} 
        {!! HTML::script('assets/js/bootstrap.min.js') !!}
        
        @yield('script')
    </body>
</html>