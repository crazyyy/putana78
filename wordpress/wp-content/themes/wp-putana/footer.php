                <tr class="footers">
                  <td bgcolor="#cdcdcd" align="left">&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td bgcolor="#FFFFFF" align="left">&nbsp;</td>
                  <td bgcolor="#FFFFFF" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="left">&nbsp;</td>
                  <td bgcolor="#cdcdcd" align="right">&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top"></td>
        </tr>
      </tbody>
    </table>
    <br>
    <div style="width:600px; color:#C1C1C1; font-size:10px;">
      <br>
      <!--noindex-->Уважаемые посетители, просим Вас воспринимать данный ресурс, как место
      <br> знакомства с девушками и парнями, а не как место размещения информации о занятии проституцией
      <br> в Вашем городе! Лица, разместившие у нас информацию о себе, хотят познакомиться и приятно провести
      <br> время. Никто из них не оказывает услуги сексуального характера, а всего лишь ищет друзей по интересам!
      <!--/noindex-->
      <br>
      <br> Администрация сайта не несет ответственности за размещаемую пользователями в анкетах информацию. Сайт предназначен только для лиц старше 18 лет, если Вам меньше 18 лет - немедленно покиньте сайт!
      <br>
      <br> 2012-<?php echo date("Y"); ?> © <?php bloginfo('name'); ?>. Запрещено любое копирование информации.
      <br>
      <br>
      <?php wpeFootNav(); ?>
      <br>
      <br> Новые анкеты:
      <?php $temp = $wp_query; $wp_query= null; query_posts('post_type=girls'.'&showposts=10'); while (have_posts()) : the_post();?>
        <a class="new-items" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;
      <?php endwhile; ?>
      <?php $wp_query = null; $wp_query = $temp;?>
      <br>
      <br>
    </div>

    <br>
  </center>

  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cart.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/disclaimer.js"></script>

</body>
</html>
