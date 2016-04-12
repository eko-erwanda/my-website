@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Recrutment</h1>
@stop

@section('panel-header')
    <i class="fa fa-calendar-check-o fa-fw"></i> Edit recrutment
@stop

@section('content')
    {!! Form::model($recrutment,['route' => ['admin.about.recrutment.update',$recrutment->id], 'method' => 'PATCH']) !!}
        @include('admin.about.skillset.recrutment.form')
    {!! Form::close() !!}
@stop