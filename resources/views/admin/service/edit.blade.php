@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Service</h1>
@stop

@section('panel-header')
    <i class="fa fa-gears fa-fw"></i> Edit data service
@stop

@section('content')
    {!! Form::model($service, ['route' => ['admin.service.update', $service->id], 'method' => 'put', 'files' => true]) !!}
        @include('admin.service.form')
        </br>
        <div class="form-group">
    		<label>foto saat ini</label>
            <div class="row">
    	        <img src="/images/{!! $service->image !!}" width="70" height="70">
            </div>
    	</div>
    {!! Form::close() !!}
@stop