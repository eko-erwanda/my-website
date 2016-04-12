@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Users</h1>
@stop

@section('panel-header')
    <i class="fa fa-user fa-fw"></i> User yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.user.create') !!}"><i class="fa fa-plus"></i> registrasi user baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.user.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop