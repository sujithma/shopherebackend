@extends('layout.default')
@include('includes.header')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";
    var AddProductUrl = "{{ action(('AdminController@addProduct')) }}";    

  </script>

@stop
@include('includes.header')
@section('content')




<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a  class="allProductSlide">All Products<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a class="addProductSlide">Add New<span class="sub_icon glyphicon glyphicon-link "></span></a></li>
          
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              	

        		<!-- all products table -->
          <div class="allProduct">
        		@if (count($products)<1) 
    				  <h4>You have no Products</h4>             
    				@else 
              	 	<div class="row productview">
     				 	<div class="col-md-12">
			        
			              <table class="table table-striped table-bordered" id="todolist">
			                <thead>
			                  <tr>
			                    <th class="col-md-1">Name</th>
			                    <th class="col-md-1">Quantity</th>
			                    <th class="col-md-1">Image</th>
			                  </tr>
			                </thead>
			                
			                 @foreach ($products as $product) 
			                <tbody>
			                   
			                    <tr class="todoData">
			                      <td>
			                      {{ $product->name }}
			                      </td>
			                      <td>
			                       {{ $product->quantity }}
			                      </td>
			                      <td>
			                        {{ $product->image }}
			                      </td>
			                   
			                  </tr>
			               
			              </tbody>
			            @endforeach
			            </table>
						       
				    	</div>
				  	</div>
				@endif 
      </div>         
        		<!-- all products table end-->

        		<!-- add products form -->
             <div class="viewAddProduct">
              <div class="form-group">
                {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
                <div class="col-md-4">
                  {!! Form::text('','', array('class' => 'form-control input-md productName')) !!}
                  </div><br><br>
                  {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
                <div class="col-md-4">
                  {!! Form::text('','', array('class' => 'form-control input-md productQuantity')) !!}
                  </div><br><br>
                  {!! Form::label('','Image', array('class' => 'col-md-4 control-label')) !!}
                <div class="col-md-4">
                  {!! Form::file('image', array('class' => 'input-file')) !!}                  
                </div><br><br>
                <div class="col-md-4">
                  {!! Form::submit('Submit', array('class' => 'btn btn-primary','id'=>'signSubmit')); !!}
                </div>                
              </div>
            </div>                        	
        		<!-- add products form end -->

              @include('includes.footer')
            </div>
          </div>
        </div>
      </div>
      
    </div>






@stop