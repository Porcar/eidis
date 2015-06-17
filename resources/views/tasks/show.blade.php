@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>
    {{ $task->name }}
</h2>

    {{ $task->description }}

<p>


    {!! link_to_route('projects.objectives.show', 'Back to Tasks', array($project->slug, $objective->slug)) !!} |
</p>







@endsection
