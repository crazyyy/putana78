<?php /* Template Name: Front Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div style="padding:15px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
      <?php endwhile; else: // If 404 page error ?>
        <div style="padding:15px;">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      <?php endif; ?>
        <br>
        <div class="hr"></div>

        <?php
          query_posts( array(
            'post_type' => girls,
            'showposts' => 50 )
          );
        ?>

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part('loop-girls'); ?>
        <?php endwhile; ?>

        <br>
        <center><big><a href="<?php echo home_url(); ?>/girls">Все девушки (<?php $count_posts = wp_count_posts('girls'); echo $count_posts->publish; // ?>)</a></big></center>
        <br>
        <br>
      </div>
    </td>

  <?php get_sidebar('right'); ?>
<?php get_footer(); ?>
