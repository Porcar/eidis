@extends('app')

@section('htmlheader_title')
  Proyectos
@endsection
@section('contentheader_title')
  Crear Proyectos
@endsection

@section('main-content')


  {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
      @include('projects/partials/_form', ['submit_text' => 'Crear Proyecto'])
  {!! Form::close() !!}

@endsection
