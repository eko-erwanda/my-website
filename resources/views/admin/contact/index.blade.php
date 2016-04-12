@extends('admin.layout')

@section('page-header')
    <h1 class="page-header">Contacts</h1>
@stop

@section('panel-header')
    <i class="fa fa-phone fa-fw"></i> Contact yang terdaftar
@stop

@section('content')

<div class="box box-default">
  <div class="box-header">
  @if (count($contact) >= 1)
  <strong><a href="#">Kontak yang di perbolehkan hanya ada 1, edit untuk merubah data..!</a></strong>
  @else
  <a href="{!! route('admin.contact.create') !!}"><i class="fa fa-plus"></i> registrasi kontak baru</a>
  @endif
  </div>
  <div class="box-body no-padding">
        @include('admin.contact.table')
  </div>
  <div class="box-footer clearfix">
  </div>
</div>

@stop