@extends('layout.default')



@section('content')
purchase
<a href="{{ action('AdminController@logout') }}" class="btn btn-primary logout" style="float:right">Logout</a>
@stop