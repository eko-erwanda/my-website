@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Words</h1>
@stop

@section('panel-header')
    <i class="fa fa-stack-exchange fa-fw"></i> Edit kata-kata
@stop

@section('content')
    {!! Form::model($words,['route' => ['admin.words.update',$words->id], 'method' => 'PATCH']) !!}
        @include('admin.words.form')
    {!! Form::close() !!}
@stop