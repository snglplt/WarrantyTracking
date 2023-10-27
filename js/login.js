document.addEventListener("DOMContentLoaded", function(event) {
	jQuery("#loginform").validate({
		ignore: ":hidden",
		rules: {
			uname: {
				required: true,
				email: true,
				minlength: 3
			},
			upass: {
				required: true,
				minlength: 3
			}
		},
		submitHandler: function (form) {
			jQuery("#loginloadmsg").show();
		    var $form = $(form);
		    $form.submit();
		}
	});
});