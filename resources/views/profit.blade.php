@extends('layout.default')


@include('includes.header')
@section('content')
profit
<a href="{{ action('AdminController@logout') }}" class="btn btn-primary logout" style="float:right">Logout</a>x
@s