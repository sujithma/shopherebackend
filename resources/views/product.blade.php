@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')        
   <a style="float : right" class="btn btn-primary" href="{{ action('ProductController@showAddProduct') }}">Add Product</a>        
  <!-- all products table -->

  @if (count($products)<1) 
    <h4>You have no Products</h4>             
  @else  
   
  <h2 class="sub-header">All Products</h2>
  <hr>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>  	 	            
            <th class="col-md-1">Name</th>
            <th class="col-md-1">Quantity</th>
            <th class="col-md-1">Image</th>
            <th class="col-md-1">Edit</th>
            <th class="col-md-1">Delete</th>
          </tr>
          </thead>            
           @foreach ($products as $product) 
          <tbody>
             
              <tr>
                <td>
                {{ $product->name }}
                </td>
                <td>
                 {{ $product->quantity }}
                </td>
                <td>
                  {{ $product->image }}
                </td>  
                <td>
                 <a class="editProduct" href="{{ action('ProductController@editProduct', ['id' => $product->id]) }}">Edit</a>
                </td>
                <td>
                <a class="productDelete" data-id="{{ $product->id }}">Remove</a>
                </td>                    
                            
            </tr>           
        </tbody>
      @endforeach
      </table>        
	 </div>  
  @endif 

  <div align="center">{!! $products->render() !!} </div>
    
  <!-- all products table end-->
          
@stop