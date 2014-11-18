'use strict';
$(document).ready(function() {
	
	$('#btnAgregar').click(function(event) {
		var retVal = prompt("Ingrese su nueva tarea : ", "Tarea nueva");
   		setTask(retVal);
	});
});
	
	function getTask(){
		$.getJSON('getTasks', {}, function(json) { 
		  console.log(json);       
            	
          

        });
        
	}

	function setTask(valor){

		console.log(valor);
		$.post( "settasks",{ key : valor});
		
	}

	 $(function() {
		$( "ul.droptrue" ).sortable({
		connectWith: "ul"
		});
		$( "ul.dropfalse" ).sortable({
		connectWith: "ul",
		dropOnEmpty: false
		});
		$( "#sortable1, #sortable2, #sortable3" ).disableSelection();
	});


	


