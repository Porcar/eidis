@extends('app')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
  Materias
@endsection

@section('main-content')

<h1>Ingresa la información relacionada a la nueva materia</h1>

<hr/>

{!! Form::open(['url' => 'subjects']) !!}


    @include ('subjects.form', ['submitButtonText' => 'Agregar Materia'] )


{!! Form::close() !!}

  @include ('errors.list')

@endsection
