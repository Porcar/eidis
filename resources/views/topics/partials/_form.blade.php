<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>

<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    {!! Form::checkbox('active') !!}
</div>


<div class="form-group">

  {!! Form::label('subject_list', 'Semestre:') !!}

  {!! Form::select('subject_list[]',$subjects, null, ['class' => 'form-control'. 'multiple']) !!}

</div>

<div class="form-group">

  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
