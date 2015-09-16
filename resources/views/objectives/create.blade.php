@extends('app')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
    Proyectos
@endsection

@section('main-content')

<h2>Create Objective for Project "{{ $project->name }}"</h2>

{!! Form::model(new App\Objective, ['route' => ['projects.objectives.store', $project->slug], 'class'=>'']) !!}
    @include('objectives/partials/_form', ['submit_text' => 'Create Objective'])
{!! Form::close() !!}

@endsection
