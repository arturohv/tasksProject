'use strict';
$(document).ready(function() {
	
	$('#action').click(function(event) {
		generate_table();

	});
});


function generate_table () {
	var rows = $('#row').val();
	var cols = $('#col').val();
	var texto = $('#texto').val();
	

	var content = "<table border=1>"
	for (var i = 1; i <= rows; i++) {
		content += '<tr>';
		for (var c = 1; c <= cols; c++) {
			content += '<td>' + texto + '</td>';
		};
		content += '</tr>';
		
	};
	
	content += "</table>"

	$('#tabla').html(content);
}