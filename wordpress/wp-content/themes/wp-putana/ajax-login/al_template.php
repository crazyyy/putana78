<?php

/**********************

 This is the default template for AJAXLOGIN.

 Please do make a copy and put in your theme directory.

 Elements which always must exist:
  - The forms al_registerForm, al_loginForm and al_lostPassword
  - The message spans al_registerMessage, al_loginMessage and al_lostPasswordMessage

 Elements that must exist for the al_show****()-functions to work (recommended!)
  - al_loading
  - al_login
  - al_register
  - al_lostPassword

 Just follow the format of the original al_template.php and you should be safe.

 I know that the original does not conform to XHTML validation because of the <style>-tag. Just copy the styles you are using to your own CSS and you'll validate just fine.

 The surrounding <li> are only there for widget compability.
 ***********************/
?>



<?php
  global $user_ID, $user_identity;
  get_currentuserinfo();
  if (!$user_ID) {


  /*******
  This part is drawn when user is NOT logged in.
  *******/

?>

<div id="al_loading" class="al_nodisplay">
  <span class="title title-this">Загрузка...</span>
  <div class="hr2"></div>
  <br>
  <hr/>
  <div style="height: 100%; text-align:center;">
    <img id="al_loadingImage" alt="Loading..." src="<?php echo get_template_directory_uri(); ?>/ajax-login/al_loading.gif"/>
  </div>
</div>

<div id="al_login">
  <span class="title title-this">Вход</span>
  <br>
  <span class="s12">для размещения анкет</span>
  <div class="hr2"></div>
  <div>
    <form name="al_loginForm" onsubmit="return false;" id="al_loginForm" action="#" method="post">
      <label>Пользователь:<br /><input onkeypress="return al_loginOnEnter(event);" type="text" name="log" value="" size="20" tabindex="7" /></label><br />
      <label>Пароль:<br /> <input onkeypress="return al_loginOnEnter(event);" type="password" name="pwd" value="" size="20" tabindex="8" /></label><br />
      <label><input type="checkbox" name="rememberme" value="forever" tabindex="9" /> Запомнить?</label><br />
      <input type="button" name="submit" class="my-login" value="Войти &raquo;" tabindex="10" onclick="al_login();"/><br/>
      <span id="al_loginMessage"></span>
      <a href="javascript:al_showRegister();">Регистрация</a> | <a href="javascript:al_showLostPassword();">Забыли пароль?</a>
    </form>
  </div>
</div>

<div id="al_register" class="al_nodisplay">
  <span class="title title-this">Регистрация</span>
  <div class="hr2"></div>
  <hr/>
  <div>
    <form name="al_registerForm" onsubmit="return false;" id="al_registerForm" action="#" method="post">
      <label>Пользователь:<br /><input onkeypress="return al_registerOnEnter(event);" type="text" name="user_login" value="" size="20" tabindex="7" /></label><br />
      <label>Почта:<br /> <input onkeypress="return al_registerOnEnter(event);" type="text" name="user_email" value="" size="20" tabindex="8" /></label><br />
      <input type="button" name="submit" value="Регистрация &raquo;" tabindex="10" onclick="al_register();"/><br/>
      <span id="al_registerMessage">Пароль будет выслан вам на почту<br/></span>
      <a href="javascript:al_showLogin();">Войти</a> | <a href="javascript:al_showLostPassword();">Забыли пароль?</a>
    </form>
  </div>
</div>

<div id="al_lostPassword" class="al_nodisplay">
  <span class="title title-this">Восстановить пароль</span>
  <div class="hr2"></div>
  <hr/>
  <div>
    <form name="al_lostPasswordForm" onsubmit="return false;" id="al_lostPasswordForm" action="#" method="post">
      <label>Пользователь:<br /><input onkeypress="return al_retrievePasswordOnEnter(event);" type="text" name="user_login" value="" size="20" tabindex="7" /></label><br />
      <label>Почта:<br /> <input onkeypress="return al_retrievePasswordOnEnter(event);" type="text" name="user_email" value="" size="20" tabindex="8" /></label><br />
      <input type="button" name="submit" value="Восстановить &raquo;" tabindex="10" onclick="al_retrievePassword();"/><br/>
      <span id="al_lostPasswordMessage">Подверждение было выслано вам на почту<br/></span>
      <a href="javascript:al_showLogin();">Войти</a> | <a href="javascript:al_showRegister();">Зарегистрироваться</a>
    </form>
  </div>
</div>


<?php } else {

  /*******
  This part is drawn when user IS logged in.
  *******/
?>


<div>
  <h3><?php echo $user_identity; ?></h3>
  <hr/>
  <div>
    <a href="<?php echo get_settings('siteurl') . '/wp-login.php?action=logout&amp;redirect_to=' . $_SERVER['REQUEST_URI']; ?>"><?php _e('Logout'); ?></a>
  </div>
</div>

<?php
  }
?>
