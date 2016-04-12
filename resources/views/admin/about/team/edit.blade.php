@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Team</h1>
@stop

@section('panel-header')
    <i class="fa fa-cubes fa-fw"></i> Edit data team
@stop

@section('content')
    {!! Form::model($team, ['route' => ['admin.about.team.update', $team->id], 'method' => 'put', 'files' => true]) !!}
        @include('admin.about.team.form')
        </br>
        <div class="form-group">
    		<label>gambar saat ini</label>
            <div class="row">
                <img src="/images/{!! $team->image !!}" width="80px" height="80px">
            </div>
    	</div>
    {!! Form::close() !!}
@stop