@extends('app')

@section('htmlheader_title')
  Proyecto
@endsection
@section('contentheader_title')
  Editar Proyecto
@endsection

@section('main-content')


    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Editar Proyecto'])
    {!! Form::close() !!}


@endsection
