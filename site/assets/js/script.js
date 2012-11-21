$(document).ready( function () {

	// Login ajax function.
	$('form#login').submit( function () {
		var form = $(this);
		$.ajax({
			url   : form.attr('action'),
			type  : form.attr('method'),
			data  : form.serialize(),
			success: function(data) {

				// Incorrect login information.
				if(data == 1) {
					$('#alert p').text('Incorrect login information.');
					$('#alert').show();

				// Valid login, redirect to twitter page.
				} else {
					window.location = '/index.php/twitter';
				}
			}
		});
		return false;
	} );

	// Twitter ajax function for applying returned information.
	$('form#twitter').submit( function () {
		var form = $(this);
		$.ajax({
			url   : form.attr('action'),
			type  : form.attr('method'),
			dataType: 'json',
			data  : form.serialize(),
			success: function(data) {

				// Unknown twitter user.
				if(data == false) {
					$('#tweets').hide();
					$('#alert p').text('Unknown twitter user.');
					$('#alert').show();

				// Session timeout.
				} else if(data == 2) {
					window.location = '/?timeout=true';

				// Returned tweets.
				} else {
					apply_tweets(data, $('#handle').val());
				}
			}
		});
		return false;
	} );
} );

// Print stylized returned tweets to div on page.
function apply_tweets(data, user) {
	$('#alert').hide();
	var html = '';

	// Cycle through tweets and apply html around it's content.
	$.each(data, function (index, value) {
		html += '<blockquote>' + value + '<small>@' + user + '</small>' + '</blockquote>';
	} );

	// Perform hide, wait for callback, apply html, and show again.
	$('#tweets').hide(200, function () {
		$(this).html(html).show(200);
	});
}
