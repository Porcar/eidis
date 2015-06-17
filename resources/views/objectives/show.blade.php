@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>{{ $objective->name }}</h2>

    @if ( !$objective->tasks->count() )
        Your objective has no tasks.
    @else
        <ul>
            @foreach( $objective->tasks as $task )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.objectives.tasks.destroy',$project->slug, $objective->slug, $task->slug))) !!}
                        <a href="{{ route('projects.objectives.tasks.show', [$project->slug, $objective->slug, $task->slug]) }}">{{ $task->name }}</a>
                        (
                            {!! link_to_route('projects.objectives.tasks.edit', 'Edit', array($project->slug, $objective->slug, $task->slug), array('class' => 'btn btn-info')) !!},

                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.show', 'Back to objectives', $project->slug) !!} |
        {!! link_to_route('projects.objectives.tasks.create', 'Create Task', array($project->slug, $objective->slug)) !!}
    </p>


@endsection
