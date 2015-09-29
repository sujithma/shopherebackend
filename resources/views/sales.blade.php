@extends('layout.default')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";  
  </script>
@stop

@section('content')	
  <a style="float : right" class="btn btn-primary" href="{{ action('salesController@addSale') }}">Add Sale</a>

 <!-- all sales table -->
  
          		@if (count($allsales)<1) 
		  <h4>You have no Sale made</h4>             
		@else 
          <div class="table-responsive">
      <table class="table table-striped">
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
                    <tr>
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
                       <a class="btn btn-block btn-info editButton" data-id="{{ $sale->id }}" type="sale">Edit</a>
                      </td>
                      <td>
                      <a class="btn btn-block btn-info delete" data-id="{{ $sale->id }}" type="sale">Remove</a>
                      </td>	                   
                    </tr>	               
	              </tbody>
	            @endforeach
	            </table>				       
		    	</div>
		  	</div>
		@endif 
  
	

			



@stop