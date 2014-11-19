<h3>Editar Tarea</h3>

{{ Form::open(array('url' => "tasks/$tarea->id/update")) }}
	{{ Form::label('tarea', 'Tarea') }}
	{{ Form::text('tarea', $tarea->description) }}
	
	<br>
	{{Form::submit('Salvar', array())}}

{{ Form::close() }}