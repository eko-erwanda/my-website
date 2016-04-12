@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Contact</h1>
@stop

@section('panel-header')
    <i class="fa fa-phone fa-fw"></i> Registrasi kontak
@stop

@section('content')
    {!! Form::open(['route' => 'admin.contact.store']) !!}
        @include('admin.contact.form')
    {!! Form::close() !!}
@stop