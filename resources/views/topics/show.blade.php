@extends('app')

@section('htmlheader_title')
  Teoría
@endsection
@section('contentheader_title')
  {{ $topic->name }}
@endsection
@section('main-content')

<div class="row">
  <div class="col-lg-10">
    <div id="infovis"></div>
    <div id="log"></div>
  </div>
</div>


@endsection
