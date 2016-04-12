@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Team</h1>
@stop

@section('panel-header')
    <i class="fa fa-cubes fa-fw"></i> Registrasi team
@stop

@section('content')
    {!! Form::open(['route' => 'admin.about.team.store', 'files' => true]) !!}
        @include('admin.about.team.form')
    {!! Form::close() !!}
@stop