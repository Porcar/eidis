@extends('app')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
  Materias
@endsection

@section('main-content')

  <h1>Editar: {!! $subject->name !!}  </h1>

  {!! Form::model($subject, ['method' => 'PATCH', 'action' => ['SubjectController@update', $subject->id]]) !!}

      @include ('subjects.form', ['submitButtonText' => 'Guardar Cambios'] )

  {!! Form::close() !!}

  @include ('errors.list')

@endsection
