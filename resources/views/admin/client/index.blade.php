@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Client</h1>
@stop

@section('panel-header')
    <i class="fa fa-users fa-fw"></i> client yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.client.create') !!}"><i class="fa fa-plus"></i> registrasi client baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.client.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop