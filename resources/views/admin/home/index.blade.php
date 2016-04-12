@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Home</h1>
@stop

@section('panel-header')
    <i class="fa fa-home fa-fw"></i> Slider yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.home.create') !!}"><i class="fa fa-plus"></i> registrasi slider baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.home.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop