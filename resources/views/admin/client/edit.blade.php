@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Client</h1>
@stop

@section('panel-header')
    <i class="fa fa-phone fa-fw"></i> Edit data client
@stop

@section('content')
    {!! Form::model($client, ['route' => ['admin.client.update', $client->id], 'method' => 'put', 'files' => true]) !!}
        @include('admin.client.form')
        </br>
        <div class="form-group">
    		<label>gambar saat ini</label>
            <div class="row">
                <img src="/images/{!! $client->client_img !!}" width="70" height="70">
    	        <img src="/images/{!! $client->company_img !!}" width="100" height="70">
            </div>
    	</div>
    {!! Form::close() !!}
@stop