@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Skills & recrutment</h1>
@stop

@section('panel-header')
   	<i class="fa fa-compress fa-fw"></i> Progres skill dan Recrutment
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  @if (count($recrutment) >= 1)
  <strong><a class="pull-right" href="#">Recrutment yang di perbolehkan hanya ada 1, edit untuk merubah data..!</a></strong>
  @else
  <a class="pull-right" href="{!! route('admin.about.recrutment.create') !!}"><i class="fa fa-plus"></i> Buat Recrutment</a>
  @endif

  @if (count($skill) >= 4)
  <strong><a href="#">skill yang di perbolehkan hanya ada 4, edit untuk merubah data..!</a></strong>
  @else
  <a href="{!! route('admin.about.skill.create') !!}"><i class="fa fa-plus"></i> Tambahkan Skill baru</a>
  @endif
  </div>
  <div class="box-body no-padding">
        @include('admin.about.skillset.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop