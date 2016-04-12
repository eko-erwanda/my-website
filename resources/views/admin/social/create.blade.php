@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Social</h1>
@stop

@section('panel-header')
    <i class="fa fa-plus-square fa-fw"></i> Registrasi social
@stop

@section('content')
    {!! Form::open(['route' => 'admin.social.store']) !!}
        @include('admin.social.form')
    {!! Form::close() !!}
@stop