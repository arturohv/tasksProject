<div class="row">
	<div class="col-md-12">
		<h1>Table Generator...</h1>
		
			<label for="row">Filas</label>
			<input type="text" id='row'>
			<label for="col">Columnas</label>
			<input type="text" id='col'>
			<label for="texto">Texto</label>
			<input type="text" id='texto'>
			<button id="action">Fill</button>
			
		
	<div id="tabla">

	</div>

	<table>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>

		
	</div>
</div>
{{HTML::script('js/fill.js')}}