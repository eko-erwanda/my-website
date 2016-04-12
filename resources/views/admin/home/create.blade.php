@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Home</h1>
@stop

@section('panel-header')
    <i class="fa fa-home fa-fw"></i> Registrasi slider
@stop

@section('content')
    {!! Form::open(['route' => 'admin.home.store', 'files' => true]) !!}
        @include('admin.home.form')
    {!! Form::close() !!}
@stop