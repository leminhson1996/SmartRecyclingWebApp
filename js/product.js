$(document).ready(function() {
	$.ajax({
		url 		: 		'product.php',
		type 		: 		'GET',

		error: function(jqXHR, textStatus, errorThrown) {
	  		console.log("Status:="+textStatus + " Error:="+errorThrown);
		},

		success 	: 		function(data) {

			productList = JSON.parse(data);
			var productLength = productList.length;

			for (var i = 0; i < productLength; i++) {
				var productInfo = $('.product-template.hidden').clone();
				productInfo.removeClass('hidden');
				productInfo.find('.images').attr('src', productList[i]['Hinh']);
				productInfo.find('.fancybox').attr('href', productList[i]['Hinh'])
				productInfo.find('.caption').html(productList[i]['MoTa']);

				$('.project-wrapper').append(productInfo.html());
			}

		}
	})
})