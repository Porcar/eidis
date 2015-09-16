@extends('app')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
  Materias
@endsection

@section('main-content')
  <h2><b>Nombre:</b> {{ $subject->name }}</h2>

    <article>

        <h2><b>Escuela:</b> {{ $subject->school }}</h2>
        <h2><b>Departamento:</b>  {{ $subject->department }}</h2>
        <h2><b>Profesor:</b> Manuel Jauregui </h2>
        <h2><b>Preparador:</b> Valeria Muñoz </h2>
        @unless ($subject->semesters->isEmpty())

        <h2><b>Semestres:</b> </h2>
        <ul>
            @foreach ($subject->semesters as $semester)
              <li><h3> {{ $semester->code }}</h3></li>
            @endforeach
        </ul>
        @endunless
        <div class="body">
        <h3>  <b>Descripción: </b>{{ $subject->description }} </h3> </div>



    </article>
    <hr/>




<div class="row">
    <div class="col-xs-12">

  {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route'=>['subjects.destroy', $subject->id]]) !!}
    <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}
  </div>
  </div>

    <hr/>

@endsection
