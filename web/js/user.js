$( document ).ready(function() {

	var csrfParam = $('meta[name="csrf-param"]').attr("content");
	var csrfToken = $('meta[name="csrf-token"]').attr("content");

	var userData = {
	    "firstName": "Иван",
	    "lastName": "Иванов",
	    "phoneNumbers": [
	        "812 123-1234",
	        "916 123-4567"
	    ]
	}

    $.ajax({
        url: "userCreate",
        method: "POST",
        data: {
            userData : userData,
            [csrfParam] : csrfToken
        },
        success: function (resp) {
            $('.ajax-result').html(resp);
        },
        error: function(err){
        	$('.ajax-result').html(err.responseText);
        }
    });

});