{!! Form::open([DB::table('users')->where('id', $user->id)->update(['active' => '1'])]) !!}
{!! Form::submit('Activar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
