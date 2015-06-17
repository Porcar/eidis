@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
  <h1>Nombre: {{ $user->name }}</h1>

    <article>

        <h2>Cedula:  {{ $user->identification }}</h2>
        <h2>E-mail: {{ $user->email }}</h2>
        <h2>Telefono:  {{ $user->phone }}</h2>
        <h2>Rol:  {{ $user->roles_id }}</h2>
    </article>
    <hr/>


    {!! delete_form(['users.destroy', $user->id]) !!}

    <hr/>

@endsection
