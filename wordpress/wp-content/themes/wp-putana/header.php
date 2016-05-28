<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=1080">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <center>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td align="left"><img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" width="834" height="285" border="0"></td>
        </tr>
        <tr>
          <td valign="top">
            <table bgcolor="#faff00" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td align="left">&nbsp;</td>
                  <td align="right">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2">
                    <?php wpeHeadNav(); ?>
                  </td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                  <td align="right">&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
        </tr>
        <tr>
          <td valign="top">
            <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td colspan="8">&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#cdcdcd" align="left">&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td bgcolor="#FFFFFF" align="left">&nbsp;</td>
                  <td bgcolor="#FFFFFF" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="left">&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="right">&nbsp;</td>
                </tr>
