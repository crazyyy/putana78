<?php /* Template Name: Custom Girls Page */ get_header(); ?>

  <?php get_sidebar('left'); ?>

    <td width="100%" bgcolor="#FFFFFF" colspan="2" valign="top" align="left">

      <div style="padding:15px;">

      <?php
        $filtrname = $_GET['filtr'];

        if ( $filtrname == 'verified' ) {
          /* start query */
          $filtrtitle = 'Проститутки Питера с реальными фото';
          $subagrs = array( 'key' => 'verified', 'value' => true);
        } else if ( $filtrname == 'turnoff' ) {
          $filtrtitle = 'Проститутки Питера на выезд';
          $subagrs = array( 'key' => 'turnout_1_hour', 'value' => array('1','10000000000000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'apartments' ) {
          $filtrtitle = 'Проститутки Питера с апартаментами';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('1','10000000000000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'pricelow' ) {
          $filtrtitle = 'Дешевые проститутки и шлюхи Питера';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('1','2000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'price1' ) {
          $filtrtitle = 'Проститутки Питера от 2000 до 2500';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('2000','2500'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'price2' ) {
          $filtrtitle = 'Проститутки Питера от 2500 до 3000';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('2500','3000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'price3' ) {
          $filtrtitle = 'Проститутки Питера от 3000 до 4000';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('3000','4000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'price4' ) {
          $filtrtitle = 'Проститутки Питера от 4000 до 5000';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('4000','5000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'pricehigh' ) {
          $filtrtitle = 'Дорогие и элитные проститутки и шлюхи Питера';
          $subagrs = array( 'key' => 'apartments_1_hour', 'value' => array('5001','5000000'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'young' ) {
          $filtrtitle = 'Молодые проститутки и шлюхи Питера';
          $subagrs = array( 'key' => 'age', 'value' => array('1','19'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'age1' ) {
          $filtrtitle = 'Проститутки Питера от 20 до 25 лет';
          $subagrs = array( 'key' => 'age', 'value' => array('20','25'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'age2' ) {
          $filtrtitle = 'Проститутки Питера от 25 до 30 лет';
          $subagrs = array( 'key' => 'age', 'value' => array('25','30'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'age3' ) {
          $filtrtitle = 'Проститутки Питера от 30 до 35 лет';
          $subagrs = array( 'key' => 'age', 'value' => array('30','35'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'mature' ) {
          $filtrtitle = 'Зрелые проститутки и шлюхи Питера';
          $subagrs = array( 'key' => 'age', 'value' => array('30','100'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'classic' ) {
          $filtrtitle = 'Проститутки Питера - Классический секс';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'classic_sex');
        } else if ( $filtrname == 'blowjob' ) {
          $filtrtitle = 'Проститутки Питера - Минет в презервативе';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'blowjob_in_a_condom');
        } else if ( $filtrname == 'anal' ) {
          $filtrtitle = 'Проститутки Питера - Анальный секс';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'anal_sex');
        } else if ( $filtrname == 'groupe' ) {
          $filtrtitle = 'Проститутки Питера - Групповой секс';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'group_sex');
        } else if ( $filtrname == 'lesbian' ) {
          $filtrtitle = 'Проститутки Питера - Лесбийский секс';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'lesbian_sex');
        } else if ( $filtrname == 'eroticmassage' ) {
          $filtrtitle = 'Проститутки Питера - Массаж эротический';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'erotic_massage');
        } else if ( $filtrname == 'relaxingmas' ) {
          $filtrtitle = 'Проститутки Питера - Массаж расслабляющий';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'relaxing_massage');
        } else if ( $filtrname == 'classicalmas' ) {
          $filtrtitle = 'Проститутки Питера - Массаж классический';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'classical_massage');
        } else if ( $filtrname == 'professimass' ) {
          $filtrtitle = 'Проститутки Питера - Массаж профессиональный';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'professional_massage');
        } else if ( $filtrname == 'thai' ) {
          $filtrtitle = 'Проститутки Питера - Массаж тайский';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'thai_massage');
        } else if ( $filtrname == 'urological' ) {
          $filtrtitle = 'Проститутки Питера - Массаж урологический';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'massage_urological');
        } else if ( $filtrname == 'spot' ) {
          $filtrtitle = 'Проститутки Питера - Массаж точечный';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'massage_spot');
        } else if ( $filtrname == 'domination' ) {
          $filtrtitle = 'Проститутки Питера - Доминация';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'domination');
        } else if ( $filtrname == 'fetish' ) {
          $filtrtitle = 'Проститутки Питера - Фетиш';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'fetish');
        } else if ( $filtrname == 'bandage' ) {
          $filtrtitle = 'Проститутки Питера - Бандаж';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'bandage');
        } else if ( $filtrname == 'mrs_' ) {
          $filtrtitle = 'Проститутки Питера - Госпожа';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'mrs_');
        } else if ( $filtrname == 'slave' ) {
          $filtrtitle = 'Проститутки Питера - Рабыня';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'slave');
        } else if ( $filtrname == 'flogging' ) {
          $filtrtitle = 'Проститутки Питера - Порка';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'flogging');
        } else if ( $filtrname == 'trampling' ) {
          $filtrtitle = 'Проститутки Питера - Трамплинг';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'trampling');
        } else if ( $filtrname == 'face_sitting' ) {
          $filtrtitle = 'Проститутки Питера - Фэйс-ситтинг';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'face_sitting');
        } else if ( $filtrname == 'blowjobwocondom' ) {
          $filtrtitle = 'Проститутки Питера - Минет без резинки';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'blowjob_without_condom');
        } else if ( $filtrname == 'deepthroating' ) {
          $filtrtitle = 'Проститутки Питера - Глубокий минет';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'deepthroating');
        } else if ( $filtrname == 'cunnilingus' ) {
          $filtrtitle = 'Проститутки Питера - Куннилингус';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'cunnilingus');
        } else if ( $filtrname == 'pose_69' ) {
          $filtrtitle = 'Проститутки Питера - Поза 69';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'pose_69');
        } else if ( $filtrname == 'roleplaying' ) {
          $filtrtitle = 'Проститутки Питера - Ролевые игры';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'role_playing_games');
        } else if ( $filtrname == 'toys' ) {
          $filtrtitle = 'Проститутки Питера - Игрушки';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'toys');
        } else if ( $filtrname == 'married' ) {
          $filtrtitle = 'Проститутки Питера - С семейной парой';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'a_married_couple');
        } else if ( $filtrname == 'cummouth' ) {
          $filtrtitle = 'Проститутки Питера - Окончание в рот';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'cum_in_mouth');
        } else if ( $filtrname == 'breast' ) {
          $filtrtitle = 'Проститутки Питера - Окончание на грудь';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'at_the_end_of_the_breast');
        } else if ( $filtrname == 'faceend' ) {
          $filtrtitle = 'Проститутки Питера - Окончание на лицо';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'face_end');
        } else if ( $filtrname == 'blowjobcar' ) {
          $filtrtitle = 'Проститутки Питера - Минет в машине';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'blowjob_in_the_car');
        } else if ( $filtrname == 'escort' ) {
          $filtrtitle = 'Проститутки Питера - Эскорт';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'escort');
        } else if ( $filtrname == 'stripteasepro' ) {
          $filtrtitle = 'Проститутки Питера - Стриптиз профи';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'striptease_pro');
        } else if ( $filtrname == 'amateurstrip' ) {
          $filtrtitle = 'Проститутки Питера - Стриптиз не профи';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'amateur_striptease');
        } else if ( $filtrname == 'lesbianshow' ) {
          $filtrtitle = 'Проститутки Питера - Лесби-шоу';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'lesbian_show');
        } else if ( $filtrname == 'strap' ) {
          $filtrtitle = 'Проститутки Питера - Страпон';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'strap');
        } else if ( $filtrname == 'anilingus' ) {
          $filtrtitle = 'Проститутки Питера - Анилингус делаю';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'anilingus');
        } else if ( $filtrname == 'goldenrain' ) {
          $filtrtitle = 'Проститутки Питера - Золотой дождь принимаю';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'golden_rain_accept');
        } else if ( $filtrname == 'givegolden' ) {
          $filtrtitle = 'Проститутки Питера - Золотой дождь выдаю';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'i_give_out_golden_rain');
        } else if ( $filtrname == 'analfisting' ) {
          $filtrtitle = 'Проститутки Питера - Фистинг анальный';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'anal_fisting');
        } else if ( $filtrname == 'fisting' ) {
          $filtrtitle = 'Проститутки Питера - Фистинг классический';
          $subagrs = array( 'meta_key' => 'interested_in', 'meta_value' => 'fisting');
        } else if ( $filtrname == 'height1' ) {
          $filtrtitle = 'Проститутки Питера ростом до 150 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('1','150'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height2' ) {
          $filtrtitle = 'Проститутки Питера ростом от 150 до 155 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('150','155'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height3' ) {
          $filtrtitle = 'Проститутки Питера ростом от 155 до 160 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('155','160'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height4' ) {
          $filtrtitle = 'Проститутки Питера ростом от 160 до 165 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('160','165'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height5' ) {
          $filtrtitle = 'Проститутки Питера ростом от 165 до 170 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('160','170'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height6' ) {
          $filtrtitle = 'Проститутки Питера ростом от 170 до 175 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('170','175'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height7' ) {
          $filtrtitle = 'Проститутки Питера ростом от 175 до 180 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('175','180'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'height8' ) {
          $filtrtitle = 'Проститутки Питера ростом от 180 см.';
          $subagrs = array( 'key' => 'height', 'value' => array('180','250'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight1' ) {
          $filtrtitle = 'Проститутки Питера весом до 50 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('1','50'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight2' ) {
          $filtrtitle = 'Проститутки Питера весом от 50 до 55 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('50','55'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight3' ) {
          $filtrtitle = 'Проститутки Питера весом от 55 до 60 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('55','60'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight4' ) {
          $filtrtitle = 'Проститутки Питера весом от 60 до 65 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('60','65'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight5' ) {
          $filtrtitle = 'Проститутки Питера весом от 65 до 70 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('65','70'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight6' ) {
          $filtrtitle = 'Проститутки Питера весом от 70 до 80 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('70','80'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'weight7' ) {
          $filtrtitle = 'Проститутки Питера весом от 80 кг.';
          $subagrs = array( 'key' => 'weight', 'value' => array('80','250'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist1' ) {
          $filtrtitle = 'Проститутки Питера с грудью 1 размера.';
          $subagrs = array( 'key' => 'bustі', 'value' => array('0','1'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist2' ) {
          $filtrtitle = 'Проститутки Питера с грудью 2 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('2','2'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist3' ) {
          $filtrtitle = 'Проститутки Питера с грудью 3 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('3','3'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist4' ) {
          $filtrtitle = 'Проститутки Питера с грудью 4 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('4','4'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist5' ) {
          $filtrtitle = 'Проститутки Питера с грудью 5 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('5','5'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist6' ) {
          $filtrtitle = 'Проститутки Питера с грудью 6 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('6','6'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        } else if ( $filtrname == 'buist7' ) {
          $filtrtitle = 'Проститутки Питера с грудью больше 6 размера';
          $subagrs = array( 'key' => 'bustі', 'value' => array('7','10'), 'compare' => 'BETWEEN', 'type' => 'NUMERIC' );
        }
      ?>

        <h1 class="girls-title inner-title"><?php echo $filtrtitle; ?></h1>

        <?php $args = array( 'post_type' => 'girls', 'meta_query' => array( $subagrs ) );
        query_posts( $args ); if (have_posts()): while (have_posts()) : the_post(); ?>

          <?php get_template_part('loop-girls'); ?>

        <?php endwhile; else: ?>
          <div>
            <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
          </div><!-- /article -->
        <?php endif; ?>

        <?php get_template_part('pagination'); ?>

      </div>
    </td>

  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
