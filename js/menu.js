function toggleMenu(){
	var menu = document.getElementById('menu');
	var ul = document.getElementById('nav').classList;
	menu.addEventListener('click', function(){
		ul.toggle('open-nav');
		menu.classList.toggle('rotate');
		event.preventDefault();
	});
};

$(form).submit(function(event){
	event.preventDefault();

	var formMessages = $('#form-messages');
	var formMessagesError = $('#form-messages ul');
	var formData = $(form).serialize();

	var hasName = false;
	var hasEmailOrPhone = false;
	var hasMessage = false;

	// reset error text
	formMessagesError.text('');

	// start validation
	if($('#contact-form #fname').val() === ''){
		formMessagesError.append('<li>Please enter your name.</li>');
	} else {
		hasName = true;
	}

	if($('#contact-form #phone').val() === '' && $('#contact-form #email').val() === ''){
		formMessagesError.append('<li>Please enter a phone or email address to be reached at.</li>');
	} else {
		hasEmailOrPhone = true;
	}

	if($('#contact-form #message').val() === ''){
		formMessagesError.append('<li>Please leave a message.</li>');
	} else {
		hasMessage = true;
	}

	if(hasName && hasEmailOrPhone && hasMessage){
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			data: formData
		}).done(function(response){
			formMessages.addClass('success');
			formMessages.text(response);
			
			$('#formMessagesError').hide();
			$('#contact-form').hide();
		}).fail(function(data){
			formMessages.addClass('error');
			
			console.error(data);
		});
	}
});