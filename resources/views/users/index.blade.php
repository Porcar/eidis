@extends('app')
@section('htmlheader_title')
    Usuarios
@endsection
@section('contentheader_title')
    Usuarios
@endsection
@section('main-content')

<div class="box-body">
<table class="table table-striped table-bordered table-hover text-center">
    <thead>
    <tr class="bg-info">
        <th>Nombre</th>
        <th>C.I.</th>
        <th>E-mail</th>
        <th>Tipo</th>
        <th>Telefono</th>
        <th>Estado</th>

        <th colspan="3">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td><a href="{{route('users.show',$user->id)}}"</a>{{ $user->name }}</td>
            <td>{{ $user->identification }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->phone }}</td>

          @if ($user->active==1)
              <td><a href="{{route('users.update2',$user->id)}}"> <span class="label label-success">Activo</span></td>
              <td>
                <a href="{{route('users.update2',$user->id)}}" class="glyphicon glyphicon-remove" style="color:red"></a>
              </td>
          @else
              <td><a href="{{route('users.update2',$user->id)}}"><span class="label label-danger">Desactivado</span></td>
              <td>
              <a href="{{route('users.update2',$user->id)}}" class="glyphicon glyphicon-ok" style="color:green"></a>
              </td>
          @endif


            <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
            <td>
            {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </tbody>

</table>
</div>


@endsection
