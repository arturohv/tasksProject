
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Task</title>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}

	{{HTML::style('bootstrap/css/estilos.css')}}
</head>
<body id="body">
<br><br><br><br><br><br>
<div class="container">
   {{ Form::open(array('url' => "tasks/$tarea->id/update")) }}
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Edit Task</legend>
               
          
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Home Work</label>
              <div class="col-md-3">
                {{ Form::text('tarea', $tarea->description,array('class' => 'form-control')) }}
             </div>
            </div>
    <br><br><br>
            <!-- Form actions -->
            <div class="form-group">
              <div  id ="btn1"class="col-md-12 text-left">
                {{Form::submit('Salvar', array('class' => 'btn btn-primary btn-lg'))}}
                {{ Form::close() }}
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</body>