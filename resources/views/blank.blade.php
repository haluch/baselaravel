@extends('layout.master')
@section('title','TESTE')
@section('screen')

@section('css')

@stop

@section('content')
<span class='h3'>Teste</span>
<div class="row">
@include('layout.types',['type'=>'input','title'=>'Nome','col'=>'6'])
@include('layout.types',['type'=>'input','title'=>'Nome','col'=>'4'])
</div>
<div class="row">
@include('layout.types',['type'=>'button'])
</div>
@stop

@section('js')

@stop
