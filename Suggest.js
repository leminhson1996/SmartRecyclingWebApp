$(document).ready(function() {
	$('.suggest').submit(function(e) {
		e.preventDefault();


			var formData = new FormData($(this)[0]);

			$.ajax({
				url  		: 		'Suggest.php',
				type 		: 		'POST',
				data 		: 		formData,
				cache		: 	 	false,
				processData : 		false,
				contentType	: 		false,
				async		: 		false,
				
				error: function(jqXHR, textStatus, errorThrown) {
	  				 console.log("Status:="+textStatus + " Error:="+errorThrown);
				},

				success 	: 		function(data) {
					console.log('success');
					console.log(data);
				}
			})
	});

});
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

