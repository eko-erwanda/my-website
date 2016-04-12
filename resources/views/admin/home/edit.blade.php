@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Home</h1>
@stop

@section('panel-header')
    <i class="fa fa-home fa-fw"></i> Edit data slider
@stop

@section('content')
    {!! Form::model($home, ['route' => ['admin.home.update', $home->id], 'method' => 'put', 'files' => true]) !!}
        @include('admin.home.form')
        </br>
        <div class="form-group">
    		<label>foto saat ini</label>
            <div class="row">
    	        <img src="/images/{!! $home->image !!}" width="70" height="70">
            </div>
    	</div>
    {!! Form::close() !!}
@stop