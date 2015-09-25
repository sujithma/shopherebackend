@extends('layout.default')



@section('content')
sales
<a href="{{ action('AdminController@logout') }}" class="btn btn-primary logout" style="float:right">Logout</a>
@stop