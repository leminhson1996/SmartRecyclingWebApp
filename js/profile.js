$(document).ready(function() {
	var profileInfoData = null;

	$.ajax({
		url 		: 		'profile.php',
		type 		: 		'GET',
		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {

			var profileInfo = JSON.parse(data);

			$('#name').html(profileInfo['HoTen']);
			$('#telephone').html(profileInfo['SoDienThoai']);
			$('#email').html(profileInfo['Email']);
			$('#address').html(profileInfo['DiaChi']);
		}
	});

	$.ajax({
		url 		: 		'profileInfo.php',
		type 		: 		'GET',
		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {
			profileInfoData = JSON.parse(data);

			profileInfoData = Object.values(profileInfoData);

			$('.work-filter').removeClass('hidden');
			$('.recycling').on('click', function() {

				//$(this).addClass('active');

				var recyclingData = profileInfoData[0];
				recyclingData = JSON.parse(recyclingData);
				var dataLength = recyclingData.length;

				if (dataLength > 0) {

					for(var i = 0; i < dataLength; i++) {
						var recyclingTemplate = $('.recycling-template.hidden').clone();

						recyclingTemplate.removeClass('hidden');
						recyclingTemplate.find('.images').attr('src', recyclingData[i]['HinhAnh']);
						recyclingTemplate.find('.object').html(recyclingData[i]['TenVatThe']);
						recyclingTemplate.find('.material').html(recyclingData[i]['ChatLieu']);

						$('.project-wrapper').append(recyclingTemplate.html());
					}
				}

			});

			$('.shopping').on('click', function() {
				//$(this).addClass('active');

				var shoppingData = profileInfoData[1];
				shoppingData = JSON.parse(shoppingData);
				var dataLength = shoppingData.length;

				if(dataLength > 0) {

					for(var i = 0; i < dataLength; i++) {
						var shoppingTemplate = $('.shopping-template.hidden').clone();

						shoppingTemplate.removeClass('hidden');
						shoppingTemplate.find('.images').attr('src', shoppingData[i]['HinhAnh']);
						shoppingTemplate.find('.object').html(shoppingData[i]['TenVatThe']);
						shoppingTemplate.find('.material').html(shoppingData[i]['ChatLieu']);

						$('.project-wrapper').append(shoppingTemplate.html());
					}
				}
			});

			$('.charity').on('click', function() {
				//$(this).addClass('active');

				var charityData = profileInfoData[2];
				charityData = JSON.parse(charityData);
				var dataLength = charityData.length;

				if (dataLength > 0) {
					for(var i = 0; i < dataLength; i++) {
						var charityTemplate = $('.charity-template.hidden').clone();

						charityTemplate.removeClass('hidden');
						charityTemplate.find('.images').attr('src', charityData[i]['HinhAnh']);
						charityTemplate.find('.object').html(charityData[i]['TenVatThe']);
						charityTemplate.find('.material').html(charityData[i]['ChatLieu']);

						$('.project-wrapper').append(charityTemplate.html());
					}
				}
			});

			// var profileInfo = JSON.parse(data);

			// $('#name').html(profileInfo['HoTen']);
			// $('#telephone').html(profileInfo['SoDienThoai']);
			// $('#email').html(profileInfo['Email']);
			// $('#address').html(profileInfo['DiaChi']);
		}
	});
	
	


})