@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Contact</h1>
@stop

@section('panel-header')
    <i class="fa fa-phone fa-fw"></i> Edit kontak
@stop

@section('content')
    {!! Form::model($contact,['route' => ['admin.contact.update',$contact->id], 'method' => 'PATCH']) !!}
        @include('admin.contact.form')
    {!! Form::close() !!}
@stop