@extends('layout.default')



@section('content')
banking
<a href="{{ action('AdminController@logout') }}" class="btn btn-primary logout" style="float:right">Logout</a>
@stop