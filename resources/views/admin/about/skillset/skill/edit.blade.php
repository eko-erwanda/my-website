@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Skill</h1>
@stop

@section('panel-header')
    <i class="fa fa-bar-chart fa-fw"></i> Edit skill
@stop

@section('content')
    {!! Form::model($skill,['route' => ['admin.about.skill.update',$skill->id], 'method' => 'PATCH']) !!}
        @include('admin.about.skillset.skill.form')
    {!! Form::close() !!}
@stop