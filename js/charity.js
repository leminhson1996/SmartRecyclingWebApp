$(document).ready(function() {
	$.ajax({
		url 		: 		'charity.php',
		type 		: 		'GET',

		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {

			console.log(data);

			var charityList = JSON.parse(data);
			charityList = Object.values(charityList);
			var charityLength = charityList.length;

			console.log(charityList);


			for (var i = 0; i < charityLength; i++) {
				var productInfo = $('.charity-template.hidden').clone();
				productInfo.removeClass('hidden');
				productInfo.find('.images').attr('src', charityList[i]['Hinh']);
				productInfo.find('.name').html(charityList[i]['TenDoVat']);
				if (charityList[i]['SoDienThoai'] != "")
					productInfo.find('.telephone').html(charityList[i]['SoDienThoai']);
				console.log(productInfo.html());

				$('.charity').append(productInfo.html());
			}

		}
	})
})