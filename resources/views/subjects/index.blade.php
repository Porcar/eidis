@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

  <h1> Materias </h1>

  <hr/>

  @foreach ($subjects as $subject)

    <article>

        <h2>

        <a href="{{ action('SubjectController@show', [$subject->id])}}">  {{ $subject->name }}</a>

        </h2>

    </article>

    <hr/>

  @endforeach

@endsection
