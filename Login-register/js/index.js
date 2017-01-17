$(document).ready(function() {
	$('.register-form').submit(function(e) {
		e.preventDefault();

		var name = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var email = $('input[name="email"]').val();

		if(name == ""){
			$('.error.name').html('Vui lòng nhập tên');
		}else{
			$('.error.name').html('');
		}

		if(password == ""){
			$('.error.password').html('Vui lòng nhập mật khẩu');
		}else{
			$('.error.password').html('');
		}

		if(email == ""){
			$('.error.email').html('Vui lòng nhập email');
		}else{
			$('.error.email').html('');
		}

		if (name!="" && password!="" && email != "") {


			var serialize = $('.register-form').serialize();

			$.ajax({
				url  		: 		'registerUser.php',
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
		}
	});

	$('.login-form').submit(function(e) {
		e.preventDefault();

		var name = $('input[name="usernameLogin"]').val();
		var password = $('input[name="passwordLogin"]').val();

		if(name == ""){
			$('.error.name').html('Vui lòng nhập tên');
		}else{
			$('.error.name').html('');
		}

		if(password == ""){
			$('.error.password').html('Vui lòng nhập mật khẩu');
		}else{
			$('.error.password').html('');
		}

		if (name!="" && password!="") {

			var serialize = $('.login-form').serialize();

			$.ajax({
				url  		: 		'loginUser.php',
				type 		: 		'POST',
				data 		: 		serialize,
				cache		: 	 	false,
				
				error: function(jqXHR, textStatus, errorThrown) {
	  				 console.log("Status:="+textStatus + " Error:="+errorThrown);
				},

				success 	: 		function(data) {
					console.log('success');
					if (data)
						window.location.href = '../';
				}
			})
		}
	})
});


