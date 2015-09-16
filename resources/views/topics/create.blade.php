@extends('app')

@section('htmlheader_title')
  Teoría
@endsection
@section('contentheader_title')
  Teoría
  <hr>
  <hr>
@endsection

@section('main-content')

<h2>Crear un nuevo Tema</h2>

{!! Form::open(['url' => 'topics']) !!}

    {!! Form::hidden('subject_id', $subject->id) !!}

    @include ('topics.partials._form', ['submitButtonText' => 'Agregar Materia'] )


{!! Form::close() !!}


@endsection
