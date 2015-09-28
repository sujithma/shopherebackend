<!-- Navigation -->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
                      
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li> <a class="navbar-brand" href="{{ action('AdminController@home') }}">Home</a>
                </li>
                <li>
                    <a class="navar-sub" href="{{ action('ProductController@product') }}">Products</a>
                </li>
                <li>
                    <a class="navar-sub" href="{{ action('PurchaseController@purchase') }}">Purchase</a>
                </li>
                <li>
                    <a class="navar-sub" href="{{ action('salesController@sales') }}">Sales</a>
                </li>
                <li>
                    <a class="navar-sub" href="{{ action('BankingController@banking') }}">Banking</a>
                </li>
                <li>
                    <a class="navar-sub" href="{{ action('ProfitController@profit') }}">Profit</a>
                </li>
                <li>
                  <a href="{{ action('AdminController@logout') }}">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>