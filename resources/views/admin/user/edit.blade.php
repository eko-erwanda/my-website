@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Users</h1>
@stop

@section('panel-header')
    <i class="fa fa-user fa-fw"></i> Edit user
@stop

@section('content')
    {!! Form::model($users,['route' => ['admin.user.update',$users->id], 'method' => 'PATCH']) !!}
        @include('admin.user.form')
    {!! Form::close() !!}
@stop