$(document).ready(function() {
	$('#contact-submit').on('click', function(e){

		e.preventDefault();

		$.ajax({
			url 		: 		'search.php',
			type 		: 		'GET',
			data 		: 		$('#contact').serialize(),

			error: function(jqXHR, textStatus, errorThrown) {
	  			console.log("Status:="+textStatus + " Error:="+errorThrown);
			},

			success 	: 		function(data) {
				console.log('success');
				
				var resultList = JSON.parse(data);
				var resultLength = resultList.length;

				console.log(resultList);

				if (!resultLength) {
					var error = $('.error.hidden');
					error.removeClass('hidden');

					$('#modalSearch').modal('show');
				}else {
					var error = $('.error');
					error.addClass('hidden');

					for(var i = 0; i < resultLength; i++) {
						var searchResult = $('.search-result-template.hidden').clone();
						searchResult.removeClass('hidden');

						searchResult.find('.object-result').html(resultList[i]['TenVatThe']);
						searchResult.find('.material-result').html(resultList[i]['ChatLieu']);
						searchResult.find('.purpose-result').html(resultList[i]['MucDich']);
						searchResult.find('.description-result').html(resultList[i]['MoTa']);
						searchResult.find('.content-result').html(resultList[i]['NoiDung']);
						searchResult.find('.images').attr('src', resultList[i]['HinhAnh']);
						searchResult.find('.link-result').attr('href', 'DisplaySingle.php?Id=' + resultList[i]['Id']);

						$('.modal-body').append(searchResult.html());

					}

					$('#modalSearch').modal('show');
				}


			}
		})
	})
})
