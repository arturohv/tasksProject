
 <style>
#sortable1, #sortable2, #sortable3 
{  background: #eee; width: auto; padding: 10px}

</style>
<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>Nuevas</strong></div>
        <div class="panel-body">
         	<ul id="sortable1" class="droptrue list-group">
				
			</ul>
        </div>
        <div class="panel-footer">        	
        	<button type="button" id="btnAgregar" class="btn btn-default">Agregar Tarea</button>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>En proceso</strong></div>
        <div class="panel-body">
          	<ul id="sortable2" class="dropfalse list-group">							

			</ul>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>Terminadas</strong></div>
        <div class="panel-body">
         
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><strong>Verificadas</strong></div>
        <div class="panel-body">
         
        </div>
      </div>
    </div>
  </div>
</div>
{{HTML::script('js/dashboard.js');}}