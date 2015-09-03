@extends('app')

@section('htmlheader_title')
  Materias
@endsection
@section('contentheader_title')
  Materias
@endsection

@section('main-content')

@if ( !$subjects->count() )
  <h2>  No hay materias registradas. </h2>
@else

<div class="container">
@foreach( $subjects as $subject )
  <div class="row carousel-row">
        <div class="col-xs-12 slide-row">
            <div id="carousel-1" class="carousel slide slide-carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <img src="http://lorempixel.com/150/150?rand=1" alt="Image">
                </div>
              </div>
            </div>
            <div class="slide-content">
                <h4>{{ $subject->name }}</h4>
                <p>
                    {{ $subject->description }}
                </p>
            </div>
            <div class="slide-footer">
                <span class="pull-right buttons">


                    {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route'=>['subjects.destroy', $subject->id]]) !!}
                    <a href="{{route('subjects.show',$subject->id)}}" class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Ver</a>
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
                </span>
            </div>
        </div>
  </div>
  @endforeach
  <div class="col-xs-12 col-xs-offset-5">
  <a href="{{route('subjects.create')}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Añadir Materia  </a>
</div></div>

@endif






@endsection
