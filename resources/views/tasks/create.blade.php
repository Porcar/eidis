@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>Create Task for Objective "{{ $objective->name }}"</h2>

{!! Form::model(new App\Task, ['route' => ['projects.objectives.tasks.store', $project->slug, $objective->slug], 'class'=>'']) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
{!! Form::close() !!}

@endsection
