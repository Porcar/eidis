@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

  <h1> Usuarios </h1>

  <hr/>

  @foreach ($users as $user)

    <article>

        <h2>

        <a href="{{ action('UserController@show', [$user->id])}}">  {{ $user->name }}</a>

        </h2>

    </article>

    <hr/>

  @endforeach

@endsection
