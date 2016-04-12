@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Social</h1>
@stop

@section('panel-header')
    <i class="fa fa-plus-square fa-fw"></i> Edit social
@stop

@section('content')
    {!! Form::model($social,['route' => ['admin.social.update',$social->id], 'method' => 'PATCH']) !!}
        @include('admin.social.form')
    {!! Form::close() !!}
@stop