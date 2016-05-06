
var cart_link='/devushki_cart.php';
var cart=new Array();

function Add(id) {
  if(cart.length==0)
  {
    GetArray();
  }
  if(Find(id)==-1) {
    cart.push(id);
    OffButton(id);
  }
  else {
    Delete(id);
    OnButton(id);
  }
  str=cart.join('.');
  SetCookie('cart', str);
  
  ViewCart(); 
}


function OffButton(id) {
  element_id='cart_'+id+'';
  if(document.getElementById(element_id)!=null)
  {
    document.getElementById(element_id).className='cart_remove';
  }
}


function OnButton(id) {
  element_id='cart_'+id+'';
  if(document.getElementById(element_id)!=null)
  {
    document.getElementById(element_id).className='cart_add';
  }
}


function Find(id) {
  for(i=0; i<cart.length; i++) {
    if(cart[i]==id) return i;
  }
  return -1;
}

function Delete(id) {
  for(i=0; i<cart.length; i++) {
    if(cart[i]==id) {
      cart.splice(i, 1)
    }
  }
}


function CleanCart() {
  for(i=0; i<cart.length; i++) {
    id=cart[i];
    OnButton(id);
  }
  cart=new Array();
  SetCookie('cart', '');
  ViewCart();
  document.location.href='/';
  return false;
} 

function ViewCart() {
  if(cart.length>0) {
    if(document.getElementById('cart_div')==null) {
      div=document.createElement('div');
      div.id='cart_div';
      document.body.appendChild(div);
    }
  }
  else
  {
    document.body.removeChild(document.getElementById("cart_div"));
  }
  document.getElementById('cart_div').innerHTML='<a href="'+cart_link+'" title="Перейти к отложенным анкетам" rel="nofollow">Мой список</a> ('+cart.length+') <br /><a href="javascript:CleanCart();" class="cart_clean" onclick="return confirm(\'Вы уверены, что хотите очистить список отложенных анкет?\')">очистить список</a>';
}


function OnLoad() {
  GetArray();
  ViewCart();
  for(i=0; i<cart.length; i++) {
    id=cart[i];
    OffButton(id);
  }
}


function GetArray() {
  cookie=GetCookie('cart');
  if(cookie!=null && cookie!='') {
    cart=cookie.split('.');
  }
}


function SetCookie(name, value) {
  cookie_string=name + "=" + escape ( value );
  expires=new Date ('2200', '12', '30');
  cookie_string += "; expires=" + expires.toGMTString();
  cookie_string += "; path=/";
  document.cookie=cookie_string;
}


function GetCookie(name) {
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



$(document).ready(function() {
  $('.cart_add').click(function() {
    element=$(this).attr('id');
    element=element.split('_');
    element_id=element[1];
    Add(element_id);
  });
  $('.cart_remove').click(function() {
    element=$(this).attr('id');
    element=element.split('_');
    element_id=element[1];
    Add(element_id);
  });
});

$(window).load(function() {
  OnLoad();
});
