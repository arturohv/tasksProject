<div class="row">
	<div class="col-md-12">
		<h1>Practica Query</h1>
		<p>
			<input type="text" id='edit'>
			<input type="text" class='edit'>
			<button id="action">Action</button>
		</p>
		<div class="container">
    		<ul>
    			<?php foreach ($vendedores as $vendedor): ?>
        			<?php echo "<li>$vendedor->nombre</li>"; ?>
    			<?php endforeach; ?>
    		</ul>
			<?php echo $vendedores->links(); ?>
		</div>
		<ul id="lista">
			
		</ul>
	</div>
</div>
{{HTML::script('js/index.js')}}