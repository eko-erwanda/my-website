@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Skill</h1>
@stop

@section('panel-header')
    <i class="fa fa-bar-chart fa-fw"></i> Tambahkan skill
@stop

@section('content')
    {!! Form::open(['route' => 'admin.about.skill.store']) !!}
        @include('admin.about.skillset.skill.form')
    {!! Form::close() !!}
@stop