{!! Form::open([DB::table('users')->where('id', $user->id)->update(['active' => '0'])]) !!}
{!! Form::submit('Desactivar', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
