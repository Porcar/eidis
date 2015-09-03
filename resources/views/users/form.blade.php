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

  {!! Form::label('active', 'Estado:') !!}

  {!! Form::text('active', null, ['class' => 'form-control']) !!}

</div>


<div class="form-group">

  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
