@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<h2>Crear un nuevo Tema</h2>

{!! Form::model(new App\Topic, ['route' => ['subjects.topics.store', $subject->slug], 'class'=>'']) !!}
    @include('topics/partials/_form', ['submit_text' => 'Create Objective'])
{!! Form::close() !!}

@endsection
