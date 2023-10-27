document.addEventListener("DOMContentLoaded", function(event) {
	jQuery("#registerform").validate({
		ignore: ":hidden",
		rules: {
			eposta: {
				required: true,
				email: true,
				minlength: 5
			},
			eposta_onay: {
				required: true,
				email: true,
				minlength: 5,
                equalTo : "#eposta"
			},
			name: {
				required: true,
				minlength: 3
			},
			surname: {
				required: true,
				minlength: 3
			},
			gsm: {
				required: true,
				minlength: 11
			},
			gsm2: {
				required: false,
				minlength: 11
			},
			parola: {
				required: true,
				minlength: 3
			},
			parola_tekrar: {
				required: true,
				minlength: 3,
                equalTo : "#parola"
			}
		},
		submitHandler: function (form) {
			jQuery("#registerloadmsg").show();
		    var $form = $(form);
		    $form.submit();
		}
	});
});