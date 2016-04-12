@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Paket</h1>
@stop

@section('panel-header')
    <i class="fa fa-gift fa-fw"></i> Edit paket
@stop

@section('content')
    {!! Form::model($paket,['route' => ['admin.paket.update',$paket->id], 'method' => 'PATCH']) !!}
        @include('admin.paket.form')
    {!! Form::close() !!}
@stop