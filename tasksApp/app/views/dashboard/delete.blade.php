<h3>Confirma Eliminar Tarea</h3>

{{ Form::open(array('url' => "tasks/$tarea->id/delete")) }}
	{{ Form::label('tarea', 'Tarea:') }}
	{{ Form::label('tarea', $tarea->description) }}
	
	<br>
	{{Form::submit('Eliminar', array())}}

{{ Form::close() }}