@extends('layout.default')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";
    var AddProductUrl = "{{ action(('AdminController@addProduct')) }}";    

  </script>

@stop

@include('includes.header')
@section('content')
	
	<div class="modal fade editSale" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Sale</h4>
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
        <a class="btn btn-primary editSaleSubmit">Save</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
    
  </div>
</div>




	<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a  class="allSaleSlide">All Sales<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a class="addSaleSlide">Add New<span class="sub_icon glyphicon glyphicon-link "></span></a></li>
       
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
              		@if (count($allsales)<1) 
				  <h4>You have no Sale made</h4>             
				@else 
              	 	<div class="row productview">
     				 	<div class="col-md-12">
			        
			              <table class="table table-striped table-bordered" id="todolist">
			                <thead>
			                  <tr>
			                    <th class="col-md-1">Product</th>
			                    <th class="col-md-1">Date</th>
			                    <th class="col-md-1">Quantity</th>
			                    <th class="col-md-1">Total Price</th>
			                    <th class="col-md-1">Unit Price</th>
			                    <th class="col-md-1">Edit</th>
			                    <th class="col-md-1">Delete</th>
			                  </tr>
			                </thead>
			                
			                 @foreach ($allsales as $sale) 
			                <tbody>
			                   
			                    <tr class="todoData">
			                      <td>
			                      {{ $sale->name }}
			                      </td>
			                      <td>
			                       {{ $sale->date}}
			                      </td>
			                      <td>
			                        {{ $sale->quantity }}
			                      </td>
			                       <td>
			                        {{ $sale->total_price }}
			                      </td>
			                       <td>
			                        {{ $sale->unit_price }}
			                      </td>
			                      <td>
				                     <a class="btn btn-block btn-info editSaleButton" data-id="{{ $sale->id }}">Edit</a>
				                   </td>
				                   <td>
				                      <a class="btn btn-block btn-info deleteSale" data-id="{{ $sale->id }}">Remove</a>
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
        
        <div class="viewAddSale">
					<table>
        			<tr>
        				<td></td><td> {!! Form::label('Title', '', array('class' => 'col-md-4 control-label')) !!}</td>
              			<td>{!! Form::select('products.name', $products, array('class' => 'form-control', 'id' => 'editproduct')) !!}</td>
              		</tr>
              		<tr>
        				<td></td><td> {!! Form::label('Date', '', array('class' => 'col-md-4 control-label')) !!}</td>
              			<td>{!! Form::text('title','', array('class' => 'form-control input-md saleDate','placeholder'=>'yyyy-mm-dd')) !!}</td>


              		</tr>
              		<tr>
        				<td></td><td> {!! Form::label('Quantity', '', array('class' => 'col-md-4 control-label')) !!}</td>
              			<td>{!! Form::text('title','', array('class' => 'form-control input-md productQuantity')) !!}</td>
              		</tr>
              		<tr>
        				<td></td><td> {!! Form::label('Total Price', '', array('class' => 'col-md-4 control-label')) !!}</td>
              			<td>{!! Form::text('title','', array('class' => 'form-control input-md productQuantity')) !!}</td>
              		</tr>
              		<tr>
        				<td></td><td> {!! Form::label('UnitPrice', '', array('class' => 'col-md-4 control-label')) !!}</td>
              			<td>{!! Form::text('title','', array('class' => 'form-control input-md productQuantity')) !!}</td>
              		</tr>
              		
              		  <tr><td>{!! Form::submit('Submit', array('class' => 'btn btn-primary addproduct')) !!}</td></tr>
              		</table>
              		<!-- add sale start -->
                </div>



     @include('includes.footer')
            </div>
          </div>
        </div>
      </div>
      
    </div>

@stop