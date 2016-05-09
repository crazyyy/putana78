<?php if ( get_field('verified') ) { ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('foto_verified looper'); ?>>
<?php } else { ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
<?php } ?>

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
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td><a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <br>
                </td>
                <td align="right">
                  <div id="cart_<?php the_ID(); ?>" class="cart_add" title="Мой список"></div>
                </td>
              </tr>
            </tbody>
          </table>
          <div style="width:1px; height:9px;"></div>
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icon_phone.gif" width="20" height="20" border="0" alt=""> <span class="big"><?php the_field('phone'); ?></span> &nbsp; &nbsp; <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icon_metro.gif" width="20" height="20" border="0" alt=""> <span class="big"><?php the_field('metro'); ?></span>
          <br>
          <div style="width:1px; height:9px;"></div>
          <table width="90%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td width="32%" valign="top" class="s12">
                  Возраст, лет: <?php the_field('age'); ?>
                  <br> Рост, см: <?php the_field('height'); ?>
                  <br> Вес, кг: <?php the_field('weight'); ?>
                  <br> Бюст, размер: <?php the_field('bustі'); ?>
                  <br>
                </td>
                <td width="32%" valign="top" class="s12">
                  Апартаменты:
                  <br> 1 час: <?php the_field('apartments_1_hour'); ?>
                  <br> 2 часа: <?php the_field('apartments_2_hour'); ?>
                  <br> Ночь: <?php the_field('apartments_night'); ?>
                  <br>
                </td>
                <td width="36%" valign="top" class="s12">
                  Выезд:
                  <br> 1 час: <?php the_field('turnout_1_hour'); ?>
                  <br> 2 часа: <?php the_field('turnout_2_hour'); ?>
                  <br> Ночь: <?php the_field('turnout_night'); ?>
                  <br>
                </td>
              </tr>
            </tbody>
          </table>
          <div style="width:1px; height:9px;"></div>

          <?php $selected = get_field('interested_in'); ?>
          Основные интересы: <?php if( in_array('classic_sex', $selected) ) { ?>Классический секс, <?php } ?><?php if( in_array('blowjob_in_a_condom', $selected) ) { ?>Минет в презервативе, <?php } ?><?php if( in_array('anal_sex', $selected) ) { ?>Анальный секс, <?php } ?><?php if( in_array('group_sex', $selected) ) { ?>Групповой секс, <?php } ?><?php if( in_array('lesbian_sex', $selected) ) { ?>Лесбийский секс<?php } ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="hr"></div>
