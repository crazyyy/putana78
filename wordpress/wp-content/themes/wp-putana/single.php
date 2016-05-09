<?php /* Template Name: Front Page */ get_header(); ?>
  <tr class="maincontent">

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div style="padding:15px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <br>
          <div class="hr"></div>
        </div>
      <?php endwhile; else: ?>
      <div style="padding:15px;">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </div>
      <?php endif; ?>
    </td>

  <?php get_sidebar('right'); ?>

  </tr>

<?php get_footer(); ?>
