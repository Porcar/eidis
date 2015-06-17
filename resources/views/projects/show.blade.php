@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>{{ $project->name }}</h2>

    @if ( !$project->objectives->count() )
        Your project has no objectives.
    @else
        <ul>
            @foreach( $project->objectives as $objective )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.objectives.destroy', $project->slug, $objective->slug))) !!}
                        <a href="{{ route('projects.objectives.show', [$project->slug, $objective->slug]) }}">{{ $objective->name }}</a>
                        (
                            {!! link_to_route('projects.objectives.edit', 'Edit', array($project->slug, $objective->slug), array('class' => 'btn btn-info')) !!},

                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
        {!! link_to_route('projects.objectives.create', 'Create objective', $project->slug) !!}
    </p>


@endsection
