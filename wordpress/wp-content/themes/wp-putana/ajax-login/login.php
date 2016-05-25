<?php

require("constants.php");
require('../../../../wp-config.php' );

$errors = array();
nocache_headers();

$user_login = '';
$user_pass = '';
$using_cookie = FALSE;

if ( $_POST ) {
	$user_login = $_POST['log'];
	$user_login = sanitize_user( $user_login );
	$user_pass  = $_POST['pwd'];
	$rememberme = $_POST['rememberme'];
} else {
	$cookie_login = wp_get_cookie_login();
	if ( ! empty($cookie_login) ) {
		$using_cookie = true;
		$user_login = $cookie_login['login'];
		$user_pass = $cookie_login['password'];
	}
}

do_action_ref_array('wp_authenticate', array(&$user_login, &$user_pass));

if ( $user_login && $user_pass && empty( $errors ) ) {
	$user = new WP_User(0, $user_login);

	if ( wp_login($user_login, $user_pass, $using_cookie) ) {
		if ( !$using_cookie )
			wp_setcookie($user_login, $user_pass, false, '', '', $rememberme);
		do_action('wp_login', $user_login);
		echo AL_SUCCESS;
		exit();
	} else {
		if ( $using_cookie )
			$errors['expiredsession'] = __('Your session has expired.');
	}
}

if ( !empty( $error ) ) {
	$errors['error'] = $error;
	unset($error);
}

if ( !empty( $errors ) ) {
	if ( is_array( $errors ) ) {
		$newerrors = "";
		foreach ( $errors as $error ) {
			$stripped = str_replace("<strong>", "", $error);
			$stripped = str_replace("</strong>", "", $stripped);
			$newerrors .= $stripped . "\n";
		}
		$errors = $newerrors;
	}
}


echo AL_FAILURE;
echo "\n";
echo apply_filters('login_errors', $errors);
exit();
?>
