$(document).ready(function() {
	$.ajax({
		url 		: 		'profile.php',
		type 		: 		'GET',
		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {
			console.log(data);

			var profileInfo = JSON.parse(data);

			console.log(profileInfo);

			$('#name').html(profileInfo['HoTen']);
			$('#telephone').html(profileInfo['SoDienThoai']);
			$('#email').html(profileInfo['Email']);
			$('#address').html(profileInfo['DiaChi']);
		}
	})
})