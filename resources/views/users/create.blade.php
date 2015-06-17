@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h1>Escribe el nuevo usuario</h1>

<hr/>

{!! Form::open(['url' => 'users']) !!}


    @include ('users.form', ['submitButtonText' => 'Agregar Usuario'] )


{!! Form::close() !!}

  @include ('errors.list')

@endsection
