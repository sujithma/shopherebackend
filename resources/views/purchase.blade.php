@extends('layout.default')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}

  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>

@stop

@include('includes.header')

@section('content')
  <!-- Edit purchase model  start-->
  <div class="modal fade editPurchase" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Purchase</h4>
        </div>
        <div class="modal-body">
          {!! Form::label('Product', '', array('class' => 'col-md-4 control-label',)) !!}
        </div>        
        <div class="modal-body">
            {!! Form::select('products.name', $products, array('class' => 'form-control', 'id' => 'editproduct')) !!}
        </div>
        

       

        <div class="modal-body">
          {!! Form::label('Date', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('date','', array('class' => 'form-control input-md', 'id' => 'editdate')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Purchased Shop', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('shop','', array('class' => 'form-control input-md', 'id' => 'editShop')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Quantity', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('quantity','', array('class' => 'form-control input-md', 'id' => 'editquantity')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Total Price', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
            {!! Form::text('totalPrice','', array('class' => 'form-control input-md', 'id' => 'edittotal')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Unit Price', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('unitPrice','', array('class' => 'form-control input-md', 'id' => 'editunit')) !!}
        </div>

        <div class="modal-footer">
          <a class="btn btn-primary editPurchaseSubmit">Save</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>    
    </div>
  </div>

  <!-- Edit purchase model  end-->
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
            <div class="allPurchase">
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
                             <a class="btn btn-block btn-info editButton" data-id="{{ $purchase->id }}" type="purchase">Edit</a>
                            </td>
                            <td>
                              <a class="btn btn-block btn-info delete" data-id="{{ $purchase->id }}" type="purchase">Remove</a>
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
           
            <!-- add sale start -->
        
        <div class="AddPurchase">                      
          <div class="form-group">
            {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
            <div class="col-md-4">
              {!! Form::select('products.name', $products, array('class' => 'form-control', 'id' => 'Purchaseproduct')) !!}
              </div><br><br>
              {!! Form::label('', 'Date', array('class' => 'col-md-4 control-label','placeholder'=>'yyyy-mm-dd')) !!}
            <div class="col-md-4">
              {!! Form::text('','', array('class' => 'form-control input-md PurchaseDate')) !!}
              </div><br><br>
               {!! Form::label('', 'Purchased Shop', array('class' => 'col-md-4 control-label')) !!}
            <div class="col-md-4">
              {!! Form::text('','', array('class' => 'form-control input-md PurchaseShop')) !!}
              </div><br><br>
              {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
            <div class="col-md-4">
              {!! Form::text('','', array('class' => 'form-control input-md PurchaseQuantity')) !!}
              </div><br><br>
              {!! Form::label('','Total Price', array('class' => 'col-md-4 control-label')) !!}
            <div class="col-md-4">
              {!! Form::text('','', array('class' => 'form-control input-md PurchaseTotal')) !!}                 
            </div><br><br>
             {!! Form::label('','Unit Price', array('class' => 'col-md-4 control-label')) !!}
            <div class="col-md-4">
              {!! Form::text('','', array('class' => 'form-control input-md PurchaseUnit')) !!}                 
            </div><br><br>
            <div class="col-md-4">
              {!! Form::submit('Submit', array('class' => 'btn btn-primary addPurchaseSubmit')); !!}
            </div>                
          </div>
        </div>

              <!-- add sale end-->



            @include('includes.footer')
          </div>
        </div>
      </div>
    </div>    
  </div>
@stop