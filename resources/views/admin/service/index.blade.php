@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Service</h1>
@stop

@section('panel-header')
    <i class="fa fa-gears fa-fw"></i> Service yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  @if (count($service) >= 3)
  <strong><a href="#">Service yang di perbolehkan hanya 3, edit untuk merubah data..!</a></strong>
  @else
  <a href="{!! route('admin.service.create') !!}"><i class="fa fa-plus"></i> registrasi service baru</a>
  @endif
  </div>
  <div class="box-body no-padding">
        @include('admin.service.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop