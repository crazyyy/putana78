<?php get_header(); ?>

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">

      <div style="padding:15px;">

        <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

        <div class="hr"></div>
      </div>

    </td>

  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
