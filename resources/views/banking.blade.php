@extends('layout.default')

@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";  
  </script>
@stop

@section('content')              
  <div class="form-group">
    {!! Form::label('', 'Bank Name', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('bankName','', array('class' => 'form-control input-md bankName')) !!}
      </div>
      <br><br>
      {!! Form::label('', 'Amount Credited', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md creditAmount')) !!}
      </div>
      <br><br>
      {!! Form::label('', 'Current Balance', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md currentBalance')) !!}
      </div>
      <br><br>
      <div class="col-md-4">
        {!! Form::submit('Submit', array('class' => 'btn btn-primary addTransactionSubmit')); !!}
    </div>  
    @if($errors->any())
      <h4>{{ $errors->first('bankName') }}</h4>
    @endif              
  </div>
@stop