@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')          
  <h2 class="sub-header">Edit Products</h2> 
  <hr>
  <div class="form-group">
  
    {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('', $product->name, array('class' => 'form-control input-md productName')) !!}
      </div><br><br>
      {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('', $product->quantity, array('class' => 'form-control input-md productQuantity')) !!}
      </div><br><br>
      {!! Form::label('','Image', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::file('image', array('class' => 'input-file')) !!}                  
    </div><br><br>
    <div class="col-md-4">
      {!! Form::submit('Submit', array('class' => 'btn btn-primary editProduct')); !!}
    </div>                
  </div>
          
@stop