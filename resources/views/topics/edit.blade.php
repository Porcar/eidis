@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


<h2>Editar Objetivo "{{ $objective->name }}"</h2>

    {!! Form::model($objective, ['method' => 'PATCH', 'route' => ['projects.objectives.update', $project->slug, $objective->slug]]) !!}
        @include('objectives/partials/_form', ['submit_text' => 'Edit Objectivo'])
    {!! Form::close() !!}


@endsection
