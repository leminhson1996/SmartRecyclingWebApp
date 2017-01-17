$(document).ready(function() {
	$('.suggest').submit(function(e) {
		e.preventDefault();


			var serialize = $('.suggest').serialize();

			$.ajax({
				url  		: 		'Suggest.php',
				type 		: 		'POST',
				data 		: 		serialize,
				cache		: 	 	false,
				
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

