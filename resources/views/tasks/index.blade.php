@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>
    {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
    {!! link_to_route('projects.objectives.show', $objective->name, [$objective->slug]) !!} -
    {{ $task->name }}
</h2>

{{ $task->description }}


@endsection
