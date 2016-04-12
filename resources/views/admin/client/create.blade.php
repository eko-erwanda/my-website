@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Client</h1>
@stop

@section('panel-header')
    <i class="fa fa-users fa-fw"></i> Registrasi client
@stop

@section('content')
    {!! Form::open(['route' => 'admin.client.store', 'files' => true]) !!}
        @include('admin.client.form')
    {!! Form::close() !!}
@stop