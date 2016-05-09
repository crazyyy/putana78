<?php get_header(); ?>

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div style="padding:15px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
          <br>
          <div class="hr"></div>
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td align="left" valign="top">
                  <h2><?php the_title(); ?></h2>
                  <br>
                </td>
                <td align="right" valign="top">
                  <small>Анкета № <?php the_ID(); ?> </small> &nbsp;
                  <div id="cart_<?php the_ID(); ?>" class="cart_add" title="Мой список"></div>
                  <br>
                </td>
              </tr>
            </tbody>
          </table>

          <?php if ( get_field('verified') ) { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">  Фото проверены 100% <br><br>
          <?php } ?>

          <?php $images = get_field('gallery'); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <a rel="lightbox" href="<?php echo $image['url']; ?>">
              <img border="0" class="preview" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
          <br>
          <br>

          <span class="big"><nobr><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icon_metro.gif" width="20" height="20" border="0" alt=""> <?php the_field('metro'); ?> &nbsp;</nobr> <nobr><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icon_phone.gif" width="20" height="20" border="0" alt=""> <?php the_field('phone'); ?></nobr></span>
          <br>
          <br><?php the_content(); ?>
          <div class="hr"></div>
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td width="27%" align="left" valign="top">
                  <span class="param">Возраст, лет:</span> <?php the_field('age'); ?>
                  <br>
                  <span class="param">Рост, см:</span> <?php the_field('height'); ?>
                  <br>
                  <span class="param">Вес, кг:</span> <?php the_field('weight'); ?>
                  <br>
                  <span class="param">Бюст, размер:</span> <?php the_field('bustі'); ?>
                  <br>
                </td>
                <td width="27%" align="left" valign="top">
                  <span class="param">Апартаменты:</span>
                  <br> 1 час: <?php the_field('apartments_1_hour'); ?>
                  <br> 2 часа: <?php the_field('apartments_2_hour'); ?>
                  <br> Ночь: <?php the_field('apartments_night'); ?>
                  <br>
                </td>
                <td width="46%" align="left" valign="top">
                  <span class="param">Выезд:</span>
                  <br> 1 час: <?php the_field('turnout_1_hour'); ?>
                  <br> 2 часа: <?php the_field('turnout_2_hour'); ?>
                  <br> Ночь: <?php the_field('turnout_night'); ?>
                  <br>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="hr"></div>
          <span class="param">Сексуальные интересы:</span>
          <br>
          <br>
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td width="40%" valign="top" align="left">
                  <?php $selected = get_field('interested_in'); ?>

                  <?php if( in_array('classic_sex', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Классический секс
                  <?php if( in_array('classic_sex', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('blowjob_in_a_condom', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Минет в презервативе
                  <?php if( in_array('blowjob_in_a_condom', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('anal_sex', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Анальный секс
                  <?php if( in_array('anal_sex', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('group_sex', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Групповой секс
                  <?php if( in_array('group_sex', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('lesbian_sex', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Лесбийский секс
                  <?php if( in_array('lesbian_sex', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>
                  <br>

                  <?php if( in_array('erotic_massage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж эротический
                  <?php if( in_array('erotic_massage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('relaxing_massage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж расслабляющий
                  <?php if( in_array('relaxing_massage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('classical_massage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж классический
                  <?php if( in_array('classical_massage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('professional_massage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж профессиональный
                  <?php if( in_array('professional_massage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('thai_massage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж тайский
                  <?php if( in_array('thai_massage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('massage_urological', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж урологический
                  <?php if( in_array('massage_urological', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('massage_spot', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Массаж точечный
                  <?php if( in_array('massage_spot', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>
                  <br>

                  <?php if( in_array('domination', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Доминация
                  <?php if( in_array('domination', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('fetish', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Фетиш
                  <?php if( in_array('fetish', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('bandage', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Бандаж
                  <?php if( in_array('bandage', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('mrs_', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Госпожа
                  <?php if( in_array('mrs_', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('slave', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Рабыня
                  <?php if( in_array('slave', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('flogging', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Порка
                  <?php if( in_array('flogging', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('trampling', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Трамплинг
                  <?php if( in_array('trampling', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('face_sitting', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Фэйс-ситтинг
                  <?php if( in_array('face_sitting', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                </td>
                <td width="60%" valign="top" align="left">

                  <?php if( in_array('blowjob_without_condom', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Минет без резинки
                  <?php if( in_array('blowjob_without_condom', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('deepthroating', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Глубокий минет
                  <?php if( in_array('deepthroating', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('cunnilingus', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Куннилингус
                  <?php if( in_array('cunnilingus', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('pose_69', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Поза 69
                  <?php if( in_array('pose_69', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('role_playing_games', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Ролевые игры
                  <?php if( in_array('role_playing_games', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('toys', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Игрушки
                  <?php if( in_array('toys', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>


                  <?php if( in_array('a_married_couple', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  С семейной парой
                  <?php if( in_array('a_married_couple', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('cum_in_mouth', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Окончание в рот
                  <?php if( in_array('cum_in_mouth', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('at_the_end_of_the_breast', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Окончание на грудь
                  <?php if( in_array('at_the_end_of_the_breast', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>


                  <?php if( in_array('face_end', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Окончание на лицо
                  <?php if( in_array('face_end', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('blowjob_in_the_car', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Минет в машине
                  <?php if( in_array('blowjob_in_the_car', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('escort', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Эскорт
                  <?php if( in_array('escort', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>


                  <?php if( in_array('striptease_pro', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Стриптиз профи
                  <?php if( in_array('striptease_pro', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('amateur_striptease', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Стриптиз не профи
                  <?php if( in_array('amateur_striptease', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('lesbian_show', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Лесби-шоу
                  <?php if( in_array('lesbian_show', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>
                  <br>

                  <?php if( in_array('strap', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Страпон
                  <?php if( in_array('strap', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('anilingus', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Анилингус делаю
                  <?php if( in_array('anilingus', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('golden_rain_accept', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Золотой дождь принимаю
                  <?php if( in_array('golden_rain_accept', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('i_give_out_golden_rain', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Золотой дождь выдаю
                  <?php if( in_array('i_give_out_golden_rain', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('anal_fisting', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Фистинг анальный
                  <?php if( in_array('anal_fisting', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                  <?php if( in_array('fisting', $selected) ) { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_yes.png" width="12" height="12" border="0">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_no.png" width="12" height="12" border="0"> <span class="noact">
                  <?php } ?>
                  Фистинг классический
                  <?php if( in_array('fisting', $selected) ) { } else { ?>
                  </span>
                  <?php } ?><br>

                </td>
              </tr>
            </tbody>
          </table>
          <div class="hr"></div>
        </div>

      <?php endwhile; else: ?>
      <div style="padding:15px;">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </div>
      <?php endif; ?>
    </td>

  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
