@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Social</h1>
@stop

@section('panel-header')
    <i class="fa fa-plus-square fa-fw"></i> Social yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  <a href="{!! route('admin.social.create') !!}"><i class="fa fa-plus"></i> registrasi social baru</a>
  </div>
  <div class="box-body no-padding">
        @include('admin.social.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop