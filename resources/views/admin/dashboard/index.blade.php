@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Message & News Letter</h1>
@stop

@section('panel-header')
   	<i class="fa fa-comment fa-fw"></i> Komentar dari Pengunjung website dan permintaan Newsletter
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  </div>
  <div class="box-body no-padding">
        @include('admin.dashboard.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop