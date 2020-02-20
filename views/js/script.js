$(function() {
	
	$("#name_error_message").hide();
	$("#email_error_message").hide();
	$("#message_error_message").hide();
	
	var error_name = false;
	var error_email = false;
	var error_message = false;
	
	$("#form_name").focusout(function() {
		
		alert("test");
		
	});
	
});