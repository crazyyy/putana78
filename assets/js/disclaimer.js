function setCookie(name, value) {
  cookie_string=name + "=" + escape ( value );
  expires=new Date ();
  expires.setHours(expires.getHours() + 1);
  cookie_string += "; expires=" + expires.toGMTString();
  cookie_string += "; path=/";
  document.cookie=cookie_string;
}


function getCookie(name) {
  cookie_name = name + "=";
  cookie_length = document.cookie.length;
  cookie_begin = 0;
  while (cookie_begin < cookie_length) {
    value_begin = cookie_begin + cookie_name.length;
    if (document.cookie.substring(cookie_begin, value_begin) == cookie_name) {
      var value_end = document.cookie.indexOf (";", value_begin);
      if (value_end == -1) {
        value_end = cookie_length;
      }
      return unescape(document.cookie.substring(value_begin, value_end));
    }
    cookie_begin = document.cookie.indexOf(" ", cookie_begin) + 1;
    if (cookie_begin == 0) {
      break;
    }
  }
  return null;
}

function disclaimer_view() {

  var content_disclaimer='<div id="preloader" style="position:fixed; z-index:9999999; width:100%; height:100%; top:0px; left:0px; background:#ffffff;"><table width="100%" height="100%"><tr><td align="center"><table width="500" cellpadding="5" cellspacing="0" border="0"><tr><td colspan="2" style="font-family:Arial; font-size:26px; color:#000000;">Уважаемый посетитель! Страницы сайта могут содержать изображения и текстовые материалы сексуального характера, запрещенные к просмотру лицам младше 18 лет. Нажимая кнопку "Да", вы подтверждаете, что Вам уже есть 18 лет.<br /><br /></td></tr><tr><td align="center"><div style="display:inline-block; background:#007000; padding:5px; cursor:pointer;" onclick="disclaimer_delete()"><span style="font-family:Arial; font-size:26px; color:#ffffff; font-weight:bold;">ДА</span><br /><span style="font-family:Arial; font-size:14px; color:#ffffff; font-weight:bold;">мне есть 18 лет</span></div></td><td align="center"><div style="display:inline-block; background:#FF0000; padding:5px; cursor:pointer;" onclick="document.location.href=\'http://yandex.ru\'"><span style="font-family:Arial; font-size:26px; color:#ffffff; font-weight:bold;">НЕТ</span><br /><span style="font-family:Arial; font-size:14px; font-weight:bold; color:#ffffff;">мне нет 18 лет</span></div></td></tr></table></td></tr></div>';
  $('body').append(content_disclaimer);

}

function disclaimer_delete() {

  var current_date = new Date;
  var cookie_year = current_date.getFullYear ( ) + 1;
  var cookie_month = current_date.getMonth ( );
  var cookie_day = current_date.getDate ( );
  setCookie( "disclaimer", "1");

  $("#preloader").remove();
}



// if (!getCookie("disclaimer" )) {

//   $( document ).ready(function() {
//     disclaimer_view()
//   });

// }
