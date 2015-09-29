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
    {!! Form::open(array('method' => 'post', 'enctype' => 'multipart/form-data', 'action' => 'ProductController@addProduct')) !!}    
    {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('name', $product->name, array('class' => 'form-control input-md productName')) !!}
      </div>
      @if($errors->any())
            <h4>{{$errors->first('name')}}</h4>
        @endif<br><br>
      {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('quantity', $product->quantity, array('class' => 'form-control input-md productQuantity')) !!}
      </div>
      @if($errors->any())
            <h4>{{$errors->first('quantity')}}</h4>
        @endif<br><br>
      {!! Form::label('','Image', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      <img src="/Assets/images/{{ $product->image }}" class="img-thumbnail" width="100" height="100">
      {!! Form::file('image', array('class' => 'input-file')) !!}                  
    </div>
     @if($errors->any())
            <h4>{{ $errors->first('image') }}</h4>
        @endif<br><br><br><br><br><br><br><br>
        <input type="hidden" name="id" value="{{ $product->id }}"> 
    <div class="col-md-4">
      {!! Form::submit('Submit', array('class' => 'btn btn-primary editProduct')) !!}
    </div>                 
  </div>
  {!! Form::close() !!}        
@stop