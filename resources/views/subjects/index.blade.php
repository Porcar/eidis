@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

  <h1> Materias </h1>

  <hr/>

    @if ( !$subjects->count() )
      <h2>  No hay materias registradas. </h2>
    @else
        <ul>
            @foreach( $subjects as $subject )
                <li> <h3>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('subjects.destroy', $subject->id))) !!}
                        <a href="{{ route('subjects.show', $subject->id) }}">{{ $subject->name }}</a>
                        (
                            {!! link_to_route('subjects.edit', 'Edit', array($subject->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li> </h3>
            @endforeach
        </ul>
    @endif

    <p><h3>
        {!! link_to_route('subjects.create', 'Añadir una nueva materia') !!}
    </p></h3>



@endsection
