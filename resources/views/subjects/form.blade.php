<div class="form-group">

  {!! Form::label('name', 'Nombre:') !!}

  {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('school', 'Escuela:') !!}

  {!! Form::text('school', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('department', 'Departamento:') !!}

  {!! Form::text('department', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('description', 'Descripcion:') !!}

  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('semester_list', 'Semestre:') !!}

  {!! Form::select('semester_list[]',$semesters, null, ['class' => 'form-control'. 'multiple']) !!}

</div>

<div class="form-group">

  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
