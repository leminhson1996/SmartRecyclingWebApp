$(document).ready(function() {
	$('#contact-submit').on('click', function(e){

		e.preventDefault();

		console.log('click');
		$.ajax({
			url 		: 		'search.php',
			type 		: 		'GET',
			data 		: 		$('#contact').serialize(),

			error: function(jqXHR, textStatus, errorThrown) {
	  			console.log("Status:="+textStatus + " Error:="+errorThrown);
			},

			success 	: 		function(data) {
				console.log('success');
				console.log(data);
			}
		})
	})
})