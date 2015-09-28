@extends('layout.default')

@section('script')
	{!! HTML::script('Assets/js/custom.js') !!}
  <script type="text/javascript">
    var token = "{{ csrf_token() }}";  
  </script>
@stop
@section('content')
  <h4> profit</h4>
@stop