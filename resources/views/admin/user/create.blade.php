@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Users</h1>
@stop

@section('panel-header')
    <i class="fa fa-user fa-fw"></i> Registrasi user
@stop

@section('content')
    {!! Form::open(['route' => 'admin.user.store']) !!}
        @include('admin.user.form')
    {!! Form::close() !!}
@stop