@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Paket</h1>
@stop

@section('panel-header')
    <i class="fa fa-gift fa-fw"></i> Paket yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  @if (count($paket) >= 3)
  <strong><a href="#">Paket yang di perbolehkan hanya 3, edit untuk merubah data..!</a></strong>
  @else
  <a href="{!! route('admin.paket.create') !!}"><i class="fa fa-plus"></i> registrasi paket baru</a>
  @endif
  </div>
  <div class="box-body no-padding">
        @include('admin.paket.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop