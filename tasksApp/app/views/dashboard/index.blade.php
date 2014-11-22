
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Task</title>
  {{HTML::style('bootstrap/css/bootstrap.min.css')}}

  {{HTML::style('bootstrap/css/estilos.css')}}
</head>
<style>
#sortable1, #sortable2, #sortable3, #sortable4 
{  background: #eee; width: auto; padding: 10px}

</style>
<body id="body">

  <div class="container">

    <br><br><br>
    <div id="user">
      <h1 class="text-center"><img id="img"src="http://3.bp.blogspot.com/-GfvFqo0gqIU/TVwxfRzQVfI/AAAAAAAAAAY/D-_uBlWMQ1c/s1600/Nuevo-usuario.jpg"  class="img-circle"> :{{ Auth::user()->email }}</h1>
    </div>
    <br><br>

    <div class="row">  	
      <div class="col-md-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center"><strong>New Tasks</strong></div>
          <div class="panel-body">
            <ul id="sortable1" class="droptrue list-group">

            </ul>
          </div>
          <div class="panel-footer">        	
           <button type="button" id="btnAgregar" class="btn btn-primary">Add Tasks</button>
         </div>
       </div>
     </div>
     <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Processing Tasks</strong></div>
        <div class="panel-body">
         <ul id="sortable2" class="droptrue list-group">							

         </ul>
       </div>
     </div>
   </div>
   <div class="col-md-3">
    <div class="panel panel-info">
      <div class="panel-heading text-center"><strong>Tasks Completed</strong></div>
      <div class="panel-body">
        <ul id="sortable3" class="droptrue list-group">							

        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="panel panel-warning">
      <div class="panel-heading text-center"><strong>Tareas Verificadas</strong></div>
      <div class="panel-body">
        <ul id="sortable4" class="droptrue list-group">							

        </ul>
      </div>
    </div>
  </div>
</div>
</div>
{{HTML::script('js/dashboard.js');}}
</body>