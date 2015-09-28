@extends('layout.default')

@section('script')
  {!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";  
  </script>

@stop

@include('includes.header')
@section('content')
  



  <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a  class="addTransaction">Add Transaction<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        
       
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
                

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
        

     @include('includes.footer')
            </div>
          </div>
        </div>
      </div>
      
    </div>

@stop