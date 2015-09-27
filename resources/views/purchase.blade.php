@extends('layout.default')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>

@stop

@include('includes.header')

@section('content')

  <div id="wrapper" class="active">  
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
        <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
      <ul class="sidebar-nav" id="sidebar">     
        <li><a  class="allPurchaseSlide">All Purchases<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        <li><a class="addPurchaseSlide">Add New<span class="sub_icon glyphicon glyphicon-link "></span></a></li>     
      </ul>
    </div>
          
    <!-- Page content -->
    <div id="page-content-wrapper">
      <!-- Keep all page content within the page-content inset div! -->
      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">            	         
            <!-- all sales table -->
            <div class="allSale">
              @if (count($purchases)<1) 
                <h4>You have no Purchase made</h4>             
              @else 
                <div class="row productview">
                  <div class="col-md-12">            
                    <table class="table table-striped table-bordered" id="todolist">
                      <thead>
                        <tr>
                          <th class="col-md-1">Product</th>
                          <th class="col-md-1">Date</th>
                          <th class="col-md-1">Purchased Shop</th>
                          <th class="col-md-1">Quantity</th>
                          <th class="col-md-1">Total Price</th>
                          <th class="col-md-1">Unit Price</th>
                          <th class="col-md-1">Edit</th>
                          <th class="col-md-1">Delete</th>
                        </tr>
                      </thead>                    
                      @foreach ($purchases as $purchase) 
                        <tbody>                       
                          <tr class="todoData">
                            <td>
                              {{ $purchase->name }}
                            </td>
                            <td>
                              {{ $purchase->date}}
                            </td>
                            <td>
                              {{ $purchase->purchased_shop}}
                            </td>
                            <td>
                              {{ $purchase->quantity }}
                            </td>
                            <td>
                              {{ $purchase->total_price }}
                            </td>
                            <td>
                              {{ $purchase->unit_price }}
                            </td>
                            <td>
                             <a class="btn btn-block btn-info editSaleButton" data-id="{{ $purchase->id }}">Edit</a>
                            </td>
                            <td>
                              <a class="btn btn-block btn-info deleteSale" data-id="{{ $purchase->id }}">Remove</a>
                            </td>                        
                          </tr>                   
                        </tbody>
                      @endforeach
                    </table>                 
                  </div>
                </div>
              @endif 
            </div>
            <!-- all sales table end-->  

            @include('includes.footer')
          </div>
        </div>
      </div>
    </div>    
  </div>
@stop