<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-looper looper'); ?>>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td align="left" valign="top">
            <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </a><!-- /post thumbnail -->
          </td>
          <td width="100%" valign="top" class="s12" style="padding-left:15px;">
            <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            <div style="width:1px; height:9px;"></div>
              <?php wpeExcerpt('wpeExcerpt40'); ?>
            <div style="width:1px; height:9px;"></div>

          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="hr"></div>

  <?php endwhile; else: ?>
  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
