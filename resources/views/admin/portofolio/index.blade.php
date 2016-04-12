@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Portofolio</h1>
@stop

@section('panel-header')
    <i class="fa fa-hand-peace-o fa-fw"></i> Portofolio yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.portofolio.create') !!}"><i class="fa fa-plus"></i> registrasi portofolio baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.portofolio.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop