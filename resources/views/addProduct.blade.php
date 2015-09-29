@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')         
  <!-- add products form -->
  <h2 class="sub-header">Add New Product</h2>
  <hr>
  {!! Form::open(array('method' => 'post', 'enctype' => 'multipart/form-data')) !!}
  <div class="form-group">
    {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">        
      {!! Form::text('name','', array('class' => 'form-control input-md productName')) !!}
      </div>
        @if($errors->any())
            <h4>{{$errors->first('name')}}</h4>
        @endif<br><br>
      {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('quantity','', array('class' => 'form-control input-md productQuantity')) !!}
      </div>
      @if($errors->any())
            <h4>{{$errors->first('quantity')}}</h4>
        @endif<br><br>
      {!! Form::label('','Image', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::file('image', array('class' => 'input-file')) !!}                  
    </div>
    @if($errors->any())
            <h4>{{$errors->first('image')}}</h4>
        @endif
    <br><br>
    <div class="col-md-4">
      {!! Form::submit('Submit', array('class' => 'btn btn-primary')); !!}
    </div>                
  </div>
                         	
  <!-- add products form end -->        
@stop