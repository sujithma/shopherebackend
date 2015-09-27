@extends('layout.default')


@include('includes.header')
@section('content')
home
<a href="{{ action('AdminController@logout') }}" class="btn btn-primary logout" style="float:right">Logout</a>
@stop