<?php
/*
Plugin Name: AJAX Login
Plugin URI: http://jonas.einarsson.net/ajaxlogin
Description: Enables AJAX login, registration and lost password retrieval.
Author: Jonas Einarsson
Version: 1.0
*/

require_once("constants.php");

add_action('wp_head', 'ajaxlogin_head' );
add_action('admin_menu', 'ajaxlogin_add_optionsmenu');
add_action('plugins_loaded', 'ajaxlogin_widget_init');
add_action('activate_ajax-login/ajax-login.php', 'ajaxlogin_init');

function ajaxlogin_init() {

	update_option('al_loadingtimeout', 1000);
	update_option('al_loginredirect', '');

}

function ajaxlogin_head() {

	wp_print_scripts( array( 'sack' ));
?>
	<script type="text/javascript">
	// ajaxlogin settings
	var al_timeout = <?php echo get_option('al_loadingtimeout'); ?>;
	var al_redirectOnLogin = '<?php echo get_option('al_loginredirect'); ?>';

	// constants
	var al_base_uri = '<?php bloginfo( 'wpurl' ); ?>';
	var al_success = '<?php echo AL_SUCCESS; ?>';
	var al_failure = '<?php echo AL_FAILURE; ?>';

	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/ajax-login/ajaxlogin.js"></script>

<?php
}

function ajaxlogin_add_optionsmenu() {
  add_options_page('AJAX Login Settings', 'AJAX Login', 10, 'ajaxlogin', 'ajaxlogin_optionspage');
}

function get_ajaxlogin() {
	if (file_exists(TEMPLATEPATH . '/al_template.php')) {
		include(TEMPLATEPATH . '/al_template.php');
	} else {
		include('al_template.php');
	}
}

function ajaxlogin_widget() {

	get_ajaxlogin();

}

function ajaxlogin_widget_init() {
	if ( !function_exists('register_sidebar_widget') )
		return;

	register_sidebar_widget('AJAX Login', 'ajaxlogin_widget');
}


function ajaxlogin_optionspage() {

	if (''==get_option('al_loadingtimeout')) update_option('al_loadingtimeout', 1000);

	if (!current_user_can('manage_options'))
		wp_die(__('Cheatin&#8217; uh?'));


	if ($_POST['action'] == 'update') {

			$option = 'al_loadingtimeout';
			$value = trim($_POST[$option]);
			$value = stripslashes($value);
			$value = abs((int) $value);
			update_option($option, $value);

			$option = 'al_loginredirect';
			$value = trim($_POST[$option]);
			$value = stripslashes($value);
			$value = clean_url($value);
			update_option($option, $value);

			$ajaxlogin_updated = true;
	}

?>

<?php if ($ajaxlogin_updated) { ?>
<div id="message" class="updated fade"><p><strong><?php _e('Options saved.') ?></strong></p></div>
<?php } ?>

<div class="wrap">
<h2><?php _e('AJAX Login Settings') ?></h2>
<form method="post" action="options-general.php?page=ajaxlogin">
<?php wp_nonce_field('update-ajaxloginoptions') ?>
<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options &raquo;') ?>" /></p>
<table class="optiontable">
<tr valign="top">
<th scope="row"><?php _e('Fake loading timeout (ms):') ?></th>
<td><input name="al_loadingtimeout" type="text" id="al_loadingtimeout" value="<?php form_option('al_loadingtimeout'); ?>" size="5" />
<br />
<?php _e('Set to 0 to disable fake loading screen.') ?></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Login redirect URI:') ?></th>
<td><input name="al_loginredirect" type="text" id="al_loginredirect" style="width: 95%" value="<?php form_option('al_loginredirect'); ?>" size="45" />
<br />
<?php _e('Where the user is redirected on successful login. If left blank the user stays on the same page.') ?></td>
</tr>

</table>

  <p class="submit">
    <input type="hidden" name="action" value="update" />
    <input type="submit" name="Submit" value="<?php _e('Update Options &raquo;') ?>" />
  </p>
</form>

</div>



<?php

}

?>
