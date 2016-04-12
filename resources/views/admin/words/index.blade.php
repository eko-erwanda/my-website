@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Words</h1>
@stop

@section('panel-header')
    <i class="fa fa-stack-exchange fa-fw"></i> Kata-kata yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  @if (count($words) >= 1)
  <strong><a href="#">kata - kata yang di perbolehkan hanya ada 1, edit untuk merubah data..!</a></strong>
  @else
  <a href="{!! route('admin.words.create') !!}"><i class="fa fa-plus"></i> registrasi kata-kata baru</a>
  @endif
  </div>
  <div class="box-body no-padding">
        @include('admin.words.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop