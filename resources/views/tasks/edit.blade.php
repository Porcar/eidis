@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


<h2>Edit Task "{{ $task->name }}"</h2>

{!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.objectives.tasks.update', $project->slug, $objective->slug, $task->slug]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
{!! Form::close() !!}


@endsection
