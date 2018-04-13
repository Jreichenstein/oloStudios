$(function() {

	// Get the form.
	var form = $('#contactsV4_form');

	// Get the messages div.
	var formMessages = $('#contact');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})

		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$('.contactsV4 .container').addClass('hide');
			$('#contactsV4__page2').removeClass('hide');


			// Clear the form.
			$('#name, #email, #message').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});
