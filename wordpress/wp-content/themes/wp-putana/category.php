<?php get_header(); ?>

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">

      <h1 class="cat-title inner-title"><?php _e( 'Categories for', 'wpeasy' ); the_category(', '); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

    </td>

  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
