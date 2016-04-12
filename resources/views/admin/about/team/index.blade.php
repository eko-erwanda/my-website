@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Team</h1>
@stop

@section('panel-header')
    <i class="fa fa-cubes fa-fw"></i> team yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.about.team.create') !!}"><i class="fa fa-plus"></i> registrasi team baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.about.team.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop