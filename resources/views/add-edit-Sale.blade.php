@extends('layout.default')


@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";    
  </script>
@stop
@section('content')         
  <!-- add products form -->
  <h2 class="sub-header">Add Sale</h2>
  <hr>
  <div class="form-group">
    {!! Form::label('', 'Product Name', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::select('products.name', $products, array('class' => 'form-control', 'id' => 'saleproduct')) !!}
      </div><br><br>
      {!! Form::label('', 'Date', array('class' => 'col-md-4 control-label','placeholder'=>'yyyy-mm-dd')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md saleDate')) !!}
      </div><br><br>                            
      {!! Form::label('', 'Quantity', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md saleQuantity')) !!}
      </div><br><br>
      {!! Form::label('','Total Price', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md saleTotal')) !!}                 
    </div><br><br>
     {!! Form::label('','Unit Price', array('class' => 'col-md-4 control-label')) !!}
    <div class="col-md-4">
      {!! Form::text('','', array('class' => 'form-control input-md saleUnit')) !!}                 
    </div><br><br>
    <div class="col-md-4">
      {!! Form::submit('Submit', array('class' => 'btn btn-primary addSaleSubmit')); !!}
    </div>                
  </div>          
                         	
  <!-- add products form end -->        
@stop


