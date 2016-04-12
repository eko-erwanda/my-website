@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Portofolio</h1>
@stop

@section('panel-header')
    <i class="fa fa-hand-peace-o fa-fw"></i> Registrasi portofolio
@stop

@section('content')
    {!! Form::open(['route' => 'admin.portofolio.store', 'files' => true]) !!}
        @include('admin.portofolio.form')
    {!! Form::close() !!}
@stop