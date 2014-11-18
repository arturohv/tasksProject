
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
				<li class="ui-state-default list-group-item">Can be dropped..</li>
				<li class="ui-state-default list-group-item">..on an empty list</li>
				<li class="ui-state-default list-group-item">Item 3</li>
				<li class="ui-state-default list-group-item">Item 4</li>
				<li class="ui-state-default list-group-item">Item 5</li>
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
          	<ul id="sortable2" class="droptrue">
				<li class="ui-state-highlight">Cannot be dropped..</li>
				<li class="ui-state-highlight">..on an empty list</li>
				<li class="ui-state-highlight">Item 3</li>
				<li class="ui-state-highlight">Item 4</li>
				<li class="ui-state-highlight">Item 5</li>
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