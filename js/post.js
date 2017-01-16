$(document).ready(function() {
	$.ajax({
		url 		: 		'post.php',
		type 		: 		'GET',

		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {
			console.log('success');
			//console.log(data);

			var postList = JSON.parse(data);


			$('.username').html(postList['ThanhVien']);
			$('.material').html(postList['ChatLieu']);
			$('.description').html(postList['MoTa']);
			$('.purpose').html(postList['MucDich']);
			$('.object').html(postList['TenVatThe']);
			$('.paragraph').html(postList['NoiDung']);
		}
	})
})