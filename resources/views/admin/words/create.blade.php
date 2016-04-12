@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Words</h1>
@stop

@section('panel-header')
    <i class="fa fa-stack-exchange fa-fw"></i> Registrasi kata - kata
@stop

@section('content')
    {!! Form::open(['route' => 'admin.words.store']) !!}
        @include('admin.words.form')
    {!! Form::close() !!}
@stop