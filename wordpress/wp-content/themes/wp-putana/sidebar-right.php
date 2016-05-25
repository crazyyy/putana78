  <td></td>
  <td bgcolor="#cdcdcd" colspan="2" valign="top" align="left">
    <div style="width:200px; padding:15px;">

      <?php get_ajaxlogin(); ?>
      <div class="hr2"></div>
      <br>
      <!--noindex -->
      <span class="title">Реклама</span>
      <br>
      <div class="hr2"></div>
      <?php if ( is_active_sidebar('widgetarea1') ) : ?>
        <?php dynamic_sidebar( 'widgetarea1' ); ?>
      <?php else : ?>

        <!-- If you want display static widget content - write code here
        RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

      <?php endif; ?>


      <br>

      <!--/noindex-->
    </div>
  </td>
</tr>
