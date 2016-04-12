@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Paket</h1>
@stop

@section('panel-header')
    <i class="fa fa-gift fa-fw"></i> Registrasi paket
@stop

@section('content')
    {!! Form::open(['route' => 'admin.paket.store']) !!}
        @include('admin.paket.form')
    {!! Form::close() !!}
@stop