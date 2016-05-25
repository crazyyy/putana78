var al_status;
var al_loginForm, al_registerForm, al_lostPasswordForm;
var al_loginMessage, al_registerMessage, al_lostPasswordMessage;
var al_sack = new sack();

var al_otheronload = window.onload;
window.onload = al_init;
function al_init() {

	if (al_otheronload) al_otheronload();

	al_status = 0;

	al_loginForm = document.getElementById("al_loginForm");
	al_registerForm = document.getElementById("al_registerForm");
	al_lostPasswordForm = document.getElementById("al_lostPasswordForm");

	al_loginMessage = document.getElementById("al_loginMessage");
	al_registerMessage = document.getElementById("al_registerMessage");
	al_lostPasswordMessage = document.getElementById("al_lostPasswordMessage");
}


function al_showLogin() {

	document.getElementById("al_login").style.display = "none";
	document.getElementById("al_register").style.display = "none";
	document.getElementById("al_lostPassword").style.display = "none";

	if (0 != al_timeout) {
		document.getElementById("al_loading").style.display = "block";
		setTimeout('al_showLogin2();', al_timeout);
	} else {
		al_showLogin2();
	}
}

function al_showLogin2() {

	document.getElementById("al_loading").style.display = "none";
	document.getElementById("al_login").style.display = "block";
	al_loginForm.log.focus();

}

function al_showRegister() {

	document.getElementById("al_login").style.display = "none";
	document.getElementById("al_register").style.display = "none";
	document.getElementById("al_lostPassword").style.display = "none";

	if (0 != al_timeout) {
		document.getElementById("al_loading").style.display = "block";
		setTimeout('al_showRegister2();', al_timeout);
	} else {
		al_showRegister2();
	}
}

function al_showRegister2() {

	document.getElementById("al_loading").style.display = "none";
	document.getElementById("al_register").style.display = "block";

	al_registerForm.user_login.focus();
}


function al_showLostPassword() {

	document.getElementById("al_login").style.display = "none";
	document.getElementById("al_register").style.display = "none";
	document.getElementById("al_lostPassword").style.display = "none";

	if (0 != al_timeout) {
		document.getElementById("al_loading").style.display = "block";
		setTimeout('al_showLostPassword2();', al_timeout);
	} else {
		al_showLostPassword2();
	}
}

function al_showLostPassword2() {

	document.getElementById("al_loading").style.display = "none";
	document.getElementById("al_lostPassword").style.display = "block";

	al_lostPasswordForm.user_login.focus();
}


function al_login() {

	if (0 != al_status) {
		return;
	}

	if (al_loginForm.log.value == '') {
		alert("Please enter username.");
		al_loginForm.log.focus();
		return;
	}

	if (al_loginForm.pwd.value == '') {
		alert("Please enter password.");
		al_loginForm.pwd.focus();
		return;
	}

	al_sack.setVar("log", al_loginForm.log.value);
	al_sack.setVar("pwd", al_loginForm.pwd.value);
	al_sack.setVar("rememberme", al_loginForm.rememberme.value);

	al_sack.requestFile = al_base_uri + "/wp-content/themes/wp-putana/ajax-login/login.php";
	al_sack.method = "POST";
	al_sack.onError = al_ajaxError;
	al_sack.onCompletion = al_loginHandleResponse;
	al_sack.runAJAX();
	al_status = 1;

}

function al_loginHandleResponse() {

	al_status = 0;

	var responselines = al_sack.response.split("\n",2);
	if (responselines[0] == al_failure) {
		alert(responselines[1]);
		return;
	}
	if (responselines[0] == al_success) {

		if (al_redirectOnLogin == '')
			window.location.reload(true);
		else
			window.location.href = al_redirectOnLogin;

		return;
	}

	alert("Unknown login response.");

}

function al_register() {

	if (0 != al_status) {
		return;
	}

	if (al_registerForm.user_login.value == '') {
		alert("Please enter username.");
		al_registerForm.user_login.focus();
		return;
	}

	if (al_registerForm.user_email.value == '') {
		alert("Please enter e-mail address.");
		al_registerForm.user_email.focus();
		return;
	}

	al_sack.setVar("user_login", al_registerForm.user_login.value);
	al_sack.setVar("user_email", al_registerForm.user_email.value);

	al_sack.requestFile = al_base_uri + "/wp-content/themes/wp-putana/ajax-login/register.php";
	al_sack.method = "POST";
	al_sack.onError = al_ajaxError;
	al_sack.onCompletion = al_registerHandleResponse;
	al_sack.runAJAX();
	al_status = 1;

}

function al_registerHandleResponse() {

	al_status = 0;

	var responselines = al_sack.response.split("\n",2);
	if (responselines[0] == al_failure) {
		alert(responselines[1]);
		return;
	}
	if (responselines[0] == al_success) {
		alert("Registration complete. Please check your e-mail.");
		al_loginMessage.innerHTML = "Your password is in your mail.<br/>";
		al_loginForm.log.value = al_registerForm.user_login.value;
		al_registerForm.user_login.value = "";
		al_registerForm.user_email.value = "";
		al_showLogin();
		al_loginForm.pwd.focus();
		return;
	}

	alert("Unknown registration response.");

}

function al_retrievePassword() {
	if (0 != al_status) {
		return;
	}

	if (al_lostPasswordForm.user_login.value == '') {
		alert("Please enter username.");
		al_lostPasswordForm.user_login.focus();
		return;
	}

	if (al_lostPasswordForm.user_email.value == '') {
		alert("Please enter e-mail address.");
		al_lostPasswordForm.user_email.focus();
		return;
	}

	al_sack.setVar("user_login", al_lostPasswordForm.user_login.value);
	al_sack.setVar("user_email", al_lostPasswordForm.user_email.value);

	al_sack.requestFile = al_base_uri + "/wp-content/themes/wp-putana/ajax-login/lostpassword.php";
	al_sack.method = "POST";
	al_sack.onError = al_ajaxError;
	al_sack.onCompletion = al_lostPasswordHandleResponse;
	al_sack.runAJAX();
	al_status = 1;
}

function al_lostPasswordHandleResponse() {

	al_status = 0;

	var responselines = al_sack.response.split("\n",2);
	if (responselines[0] == al_failure) {
		alert(responselines[1]);
		return;
	}
	if (responselines[0] == al_success) {
		alert("Check your e-mail for the confirmation link.");
		al_loginMessage.innerHTML = "Your confirmation link is in your mail.<br/>";
		al_loginForm.log.value = al_lostPasswordForm.user_login.value;
		al_lostPasswordForm.user_login.value = "";
		al_lostPasswordForm.user_email.value = "";
		al_showLogin();
		al_loginForm.pwd.focus();
		return;
	}

	alert("Unknown password retrieval response.");

}

function al_ajaxError() {
	alert("We are sorry, there was an error while sending the request.\nPlease try again!\nIf error persists, please contact the webmaster.");

	alert(al_sack.responseStatus[0] + ':\n' + al_sack.response);
	al_sack = new sack();
}

function al_loginOnEnter(e) {

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;
	else
		keynum = 0;

	if (keynum==13)
		al_login();

}
function al_registerOnEnter(e) {

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;
	else
		keynum = 0;

	if (keynum==13)
		al_register();

}
function al_retrievePasswordOnEnter(e) {

	if(window.event) // IE
		keynum = e.keyCode;
	else if(e.which) // Netscape/Firefox/Opera
		keynum = e.which;
	else
		keynum = 0;

	if (keynum==13)
		al_retrievePassword();

}
