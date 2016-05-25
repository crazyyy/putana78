<?php

require("constants.php");
require('../../../../wp-config.php' );

$errors = array();
nocache_headers();

$user_login = '';
$user_pass = '';

if ( $_POST ) {
	if ( empty( $_POST['user_login'] ) )
		$errors['user_login'] = __('<strong>ERROR</strong>: The username field is empty.');
	if ( empty( $_POST['user_email'] ) )
		$errors['user_email'] = __('<strong>ERROR</strong>: The e-mail field is empty.');

	do_action('lostpassword_post');

	if ( empty( $errors ) ) {
		$user_data = get_userdatabylogin(trim($_POST['user_login']));
		// redefining user_login ensures we return the right case in the email
		$user_login = $user_data->user_login;
		$user_email = $user_data->user_email;

		if (!$user_email || $user_email != $_POST['user_email']) {
			$errors['invalidcombo'] = __('<strong>ERROR</strong>: Invalid username / e-mail combination.');
		} else {
			do_action('retreive_password', $user_login);  // Misspelled and deprecated
			do_action('retrieve_password', $user_login);

			// Generate something random for a password... md5'ing current time with a rand salt
			$key = substr( md5( uniqid( microtime() ) ), 0, 8);
			// Now insert the new pass md5'd into the db
			$wpdb->query("UPDATE $wpdb->users SET user_activation_key = '$key' WHERE user_login = '$user_login'");
			$message = __('Someone has asked to reset the password for the following site and username.') . "\r\n\r\n";
			$message .= get_option('siteurl') . "\r\n\r\n";
			$message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
			$message .= __('To reset your password visit the following address, otherwise just ignore this email and nothing will happen.') . "\r\n\r\n";
			$message .= get_option('siteurl') . "/wp-content/themes/wp-putana/ajax-login/resetpassword.php?key=$key\r\n";

			if (FALSE == wp_mail($user_email, sprintf(__('[%s] Password Reset'), get_option('blogname')), $message)) {
				echo AL_FAILURE;
				echo "\n";
				echo "The e-mail could not be sent.";
				exit();
			} else {
				echo AL_SUCCESS;
				exit();
			}
		}
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
