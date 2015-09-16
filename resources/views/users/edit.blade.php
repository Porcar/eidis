@extends('app')

@section('htmlheader_title')
  Editar Usuario
@endsection
@section('contentheader_title')
  Editar usuario
@endsection

@section('main-content')

  <h1>Editar: {!! $user->name !!}  </h1>

  {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}

      @include ('users.form', ['submitButtonText' => 'Guardar Cambios'] )

  {!! Form::close() !!}

  @include ('errors.list')

@endsection
