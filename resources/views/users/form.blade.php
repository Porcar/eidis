<div class="form-group">

  {!! Form::label('name', 'Nombre:') !!}

  {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('identification', 'Cedula:') !!}

  {!! Form::text('identification', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('email', 'E-mail:') !!}

  {!! Form::text('email', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('phone', 'Telefono:') !!}

  {!! Form::text('phone', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('roles_id', 'Rol:') !!}

  {!! Form::text('roles_id', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('roles_list', 'Role:') !!}

  {!! Form::select('roles',$roles, null, ['class' => 'form-control'. 'multiple']) !!}

</div>


<div class="form-group">

  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
