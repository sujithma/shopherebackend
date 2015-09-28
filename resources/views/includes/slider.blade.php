<div id="wrapper" class="active">    
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
  <ul id="sidebar_menu" class="sidebar-nav">
       <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
  </ul>
  <ul class="sidebar-nav" id="sidebar">     
    <li><a class="allProductSlide" href="{{ action('AdminController@home') }}">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
    <li><a class="addProductSlide" href="{{ action('ProductController@product') }}">Products<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
    <li><a class="addProductSlide" href="{{ action('PurchaseController@purchase') }}">Purchases<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
    <li><a class="addProductSlide" href="{{ action('salesController@sales') }}">Sales<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
    <li><a class="addProductSlide" href="{{ action('BankingController@banking') }}">Banking<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
    <li><a class="addProductSlide" href="{{ action('ProfitController@profit') }}">Profit<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>  
  </ul>
</div>