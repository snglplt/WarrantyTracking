document.addEventListener("DOMContentLoaded", function(event) {
	jQuery("#forgotpassform").validate({
		ignore: ":hidden",
		rules: {
			eposta: {
				required: true,
				email: true,
				minlength: 5
			}
		},
		submitHandler: function (form) {
			jQuery("#forgotpassloadmsg").show();
		    var $form = $(form);
		    $form.submit();
		}
	});

	jQuery("#newpassform").validate({
		ignore: ":hidden",
		rules: {
			upass: {
				required: true,
				minlength: 3
			},
			upass_tekrar: {
				required: true,
				minlength: 3,
                equalTo : "#upass"
			}
		},
		submitHandler: function (form) {
			jQuery("#forgotpassloadmsg").show();
		    var $form = $(form);
		    $form.submit();
		}
	});
});