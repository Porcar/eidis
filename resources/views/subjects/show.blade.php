@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
  <h1>Nombre: {{ $subject->name }}</h1>

    <article>

        <h2>Escuela: {{ $subject->school }}</h2>
        <h2>Departamento:  {{ $subject->department }}</h2>

        @unless ($subject->semesters->isEmpty())

        <h5>Semestre: </h5>
        <ul>
            @foreach ($subject->semesters as $semester)
              <li> {{ $semester->code }}</li>
            @endforeach
        </ul>
        @endunless
        <div class="body">Descripción: {{ $subject->description }}</div>



    </article>
    <hr/>

    {!! delete_form(['subjects.destroy', $subject->id]) !!}

    <hr/>

@endsection
