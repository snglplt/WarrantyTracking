document.addEventListener("DOMContentLoaded", function(event) {
	jQuery("#commentsform").validate({
		ignore: ":hidden",
		rules: {
			message: {
				required: true
			}
		},
		submitHandler: function (form) {
			jQuery("#loadmessage").show();
		    var $form = $(form);
		    $form.submit();
		}
	});
});