@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Recrutment</h1>
@stop

@section('panel-header')
    <i class="fa fa-calendar-check-o fa-fw"></i> Buat Recrutment
@stop

@section('content')
    {!! Form::open(['route' => 'admin.about.recrutment.store']) !!}
        @include('admin.about.skillset.recrutment.form')
    {!! Form::close() !!}
@stop