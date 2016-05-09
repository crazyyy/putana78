<?php get_header(); ?>

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">

      <div style="padding:15px;">

        <h1 class="girls-title inner-title">Все девушки, путаны, шлюхи Питера</h1>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php get_template_part('loop-girls'); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>

        <?php get_template_part('pagination'); ?>

      </div>
    </td>

  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
