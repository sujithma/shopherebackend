@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')        
   <a style="float : right" class="btn btn-primary" href="{{ action('ProductController@addProduct') }}">Add Product</a><br>           
  <!-- all products table -->

  @if (count($products)<1) 
    <h4>You have no Products</h4>             
  @else     
	 	<div class="col-md-12">    
        <table class="table table-striped table-bordered">
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
                <td>
                 <a class="btn btn-block btn-info editButton" data-id="{{ $product->id }}" type="product">Edit</a>
                </td>
                <td>
                <a class="btn btn-block btn-info delete" data-id="{{ $product->id }}" type="product">Remove</a>
                </td>                    
              </tr>               
            </tr>           
        </tbody>
      @endforeach
      </table>        
	 </div>  
  @endif 

  {!! $products->render() !!}
    
  <!-- all products table end-->
          
@stop