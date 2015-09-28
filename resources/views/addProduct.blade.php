@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')         
  <!-- add products form -->
  
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
                         	
  <!-- add products form end -->        
@stop