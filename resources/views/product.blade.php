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
  @endif 

  {!! $products->render() !!}
    
  <!-- all products table end-->
          
@stop