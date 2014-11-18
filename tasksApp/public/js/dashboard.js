'use strict';
$(document).ready(function() {
	/*Llama al evento del boton agregar*/
	$('#btnAgregar').click(function(event) {
		var retVal = prompt("Ingrese su nueva tarea : ", "Tarea nueva");
   		setTask(retVal);
   		getTask();
	});

	getTask();
});
	
	/*Obtine las tareas y las inserta en las distintas casillas*/
	function getTask(){
		$.getJSON('gettasks', {}, function(json) {	
			$("#sortable1 li").remove();
			$("#sortable2 li").remove();
			$("#sortable3 li").remove();
			$("#sortable4 li").remove();
			for (var i = 0; i < json.length; i++) {
				if (json[i].statusid == 1) {
					$('#sortable1').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item">' + json[i].description + '</li>');
				};

				if (json[i].statusid == 2) {
					$('#sortable2').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item">' + json[i].description + '</li>');
				};					
				
				
			};
            	
          

        });
        
	}

	/*Envia la informacion de la tarea nueva*/
	function setTask(valor){		
		$.post( "settasks",{ key : valor});		
	}

	function setTaskStatusChange(id, status){		
		$.post( "settaskschangestatus",{ key : id, newstatus : status});		
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

	/*Obtiene el id del elemento arrastrado hacia la casilla 1*/ 
	$('#sortable1').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        alert(liId);
      		setTaskStatusChange(liId,1);	
		}
	}).disableSelection(); 

	/*Obtiene el id del elemento arrastrado hacia la casilla 2*/ 
	$('#sortable2').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        //alert(liId);
      		setTaskStatusChange(liId,2);	
		}
	}).disableSelection();

 


	


