$(document).ready(function(){

//smooth scroll to element
//	$(document).on('click', 'a', function(event){
//		event.preventDefault();
//
//		$('html, body').animate({
//			scrollTop: $( $.attr(this, 'href') ).offset().top
//		}, 1000);
//	});

});






function check2(){
	
	var username = document.getElementById("contact-name").value;
	var email = document.getElementById("contact-email").value; 
	var message = document.getElementById("contact-message").value;
	
	var nameS = document.getElementById("nameS");
	var mailS = document.getElementById("mailS");
	var messageS = document.getElementById("mesageS");
	
	var reg_user=/^[A-Z]{1}[a-z]{2,15}(\s[A-Z]{1}[a-z]{2,15}){1,5}$/;
	var reg_email=/^([a-z0-9_\.-]{3,50})@([a-z0-9]{2,20}.){1,5}[a-z]{2,8}$/;
	
	var greske=0; 
	
	if(!reg_user.test(username)){
		document.getElementById("div-name").className = "form-group has-feedback";
		document.getElementById("div-name").className += " has-error";
		document.getElementById("span-name").className = "";
		document.getElementById("span-name").className += "glyphicon glyphicon-remove form-control-feedback";
		greske++;
	}else{
		document.getElementById("div-name").className = "form-group has-feedback";
		document.getElementById("div-name").className += " has-success";
		document.getElementById("span-name").className = "";
		document.getElementById("span-name").className += "glyphicon glyphicon-ok form-control-feedback";
	}
	if(!reg_email.test(email)){
		document.getElementById("div-email").className = "form-group has-feedback";
		document.getElementById("div-email").className += " has-error";
		document.getElementById("span-email").className = "";
		document.getElementById("span-email").className += "glyphicon glyphicon-remove form-control-feedback";
		greske++;
	}else{
		document.getElementById("div-email").className = "form-group has-feedback";
		document.getElementById("div-email").className += " has-success";
		document.getElementById("span-email").className = "";
		document.getElementById("span-email").className += "glyphicon glyphicon-ok form-control-feedback";
	}
	if(message==""){
		document.getElementById("div-message").className = "form-group has-feedback";
		document.getElementById("div-message").className += " has-error";
		document.getElementById("span-message").className = "";
		document.getElementById("span-message").className += "glyphicon glyphicon-remove form-control-feedback";
	}else{
		document.getElementById("div-message").className = "form-group has-feedback";
		document.getElementById("div-message").className += " has-success";
		document.getElementById("span-message").className = "";
		document.getElementById("span-message").className += "glyphicon glyphicon-ok form-control-feedback";
	}
	 
	
	if(greske==0){
		return true;
	}else{
		return false;
	}
}
	function namecheck() {
		var username = document.getElementById("contact-name").value;
		var reg_user=/^[A-Z]{1}[a-z]{2,15}(\s[A-Z]{1}[a-z]{2,15}){1,5}$/;
		if(!reg_user.test(username)){
			document.getElementById("div-name").className = "form-group has-feedback";
			document.getElementById("div-name").className += " has-error";
			document.getElementById("span-name").className = "";
			document.getElementById("span-name").className += "glyphicon glyphicon-remove form-control-feedback";
		}else{
			document.getElementById("div-name").className = "form-group has-feedback";
			document.getElementById("div-name").className += " has-success";
			document.getElementById("span-name").className = "";
			document.getElementById("span-name").className += "glyphicon glyphicon-ok form-control-feedback";
		}
	} 
	function emailcheck() {
		var email = document.getElementById("contact-email").value;
		var reg_email=/^([a-z0-9_\.-]{3,50})@([a-z0-9]{2,20}.){1,5}[a-z]{2,8}$/;
		if(!reg_email.test(email)){
			document.getElementById("div-email").className = "form-group has-feedback";
			document.getElementById("div-email").className += " has-error";
			document.getElementById("span-email").className = "";
			document.getElementById("span-email").className += "glyphicon glyphicon-remove form-control-feedback";
		}else{
			document.getElementById("div-email").className = "form-group has-feedback";
			document.getElementById("div-email").className += " has-success";
			document.getElementById("span-email").className = "";
			document.getElementById("span-email").className += "glyphicon glyphicon-ok form-control-feedback";
		}
	}  
	function messagecheck() {
		var message = document.getElementById("contact-message").value;
		if(message==""){
			document.getElementById("div-message").className = "form-group has-feedback";
			document.getElementById("div-message").className += " has-error";
			document.getElementById("span-message").className = "";
			document.getElementById("span-message").className += "glyphicon glyphicon-remove form-control-feedback";
		}else{
			document.getElementById("div-message").className = "form-group has-feedback";
			document.getElementById("div-message").className += " has-success";
			document.getElementById("span-message").className = "";
			document.getElementById("span-message").className += "glyphicon glyphicon-ok form-control-feedback";
		}
	} 