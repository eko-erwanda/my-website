@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Portofolio</h1>
@stop

@section('panel-header')
    <i class="fa fa-hand-peace-o fa-fw"></i> Edit data portofolio
@stop

@section('content')
    {!! Form::model($portofolio, ['route' => ['admin.portofolio.update', $portofolio->id], 'method' => 'put', 'files' => true]) !!}
        @include('admin.portofolio.form')
        </br>
        <div class="form-group">
    		<label>foto saat ini</label>
            <div class="row">
    	        <img src="/images/{!! $portofolio->image !!}" width="70" height="70">
            </div>
    	</div>
    {!! Form::close() !!}
@stop