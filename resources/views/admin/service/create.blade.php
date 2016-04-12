@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Service</h1>
@stop

@section('panel-header')
    <i class="fa fa-gears fa-fw"></i> Registrasi service
@stop

@section('content')
    {!! Form::open(['route' => 'admin.service.store', 'files' => true]) !!}
        @include('admin.service.form')
    {!! Form::close() !!}
@stop