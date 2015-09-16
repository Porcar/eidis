@extends('app')

@section('htmlheader_title')
  Proyectos
@endsection
@section('contentheader_title')
  Proyectos
@endsection

@section('main-content')


  @if ( !$projects->count() )
  <h2> No hay proyectos registrados </h2>
  @else

      <ul>
          @foreach( $projects as $project )
              <li>
                  {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                      <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                      (
                          {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                          {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                      )
                  {!! Form::close() !!}
              </li>
          @endforeach
      </ul>
  @endif

  <p>
      {!! link_to_route('projects.create', 'Create Project') !!}
  </p>

@endsection
