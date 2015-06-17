@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


<h2>Edit Project</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
    {!! Form::close() !!}


@endsection
