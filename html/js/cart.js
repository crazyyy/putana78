function Add(e){0==cart.length&&GetArray(),-1==Find(e)?(cart.push(e),OffButton(e)):(Delete(e),OnButton(e)),str=cart.join("."),SetCookie("cart",str),ViewCart()}function OffButton(e){element_id="cart_"+e,null!=document.getElementById(element_id)&&(document.getElementById(element_id).className="cart_remove")}function OnButton(e){element_id="cart_"+e,null!=document.getElementById(element_id)&&(document.getElementById(element_id).className="cart_add")}function Find(e){for(i=0;i<cart.length;i++)if(cart[i]==e)return i;return-1}function Delete(e){for(i=0;i<cart.length;i++)cart[i]==e&&cart.splice(i,1)}function CleanCart(){for(i=0;i<cart.length;i++)id=cart[i],OnButton(id);return cart=new Array,SetCookie("cart",""),ViewCart(),document.location.href="/",!1}function ViewCart(){cart.length>0?null==document.getElementById("cart_div")&&(div=document.createElement("div"),div.id="cart_div",document.body.appendChild(div)):document.body.removeChild(document.getElementById("cart_div")),document.getElementById("cart_div").innerHTML='<a href="'+cart_link+'" title="Перейти к отложенным анкетам" rel="nofollow">Мой список</a> ('+cart.length+') <br /><a href="javascript:CleanCart();" class="cart_clean" onclick="return confirm(\'Вы уверены, что хотите очистить список отложенных анкет?\')">очистить список</a>'}function OnLoad(){for(GetArray(),ViewCart(),i=0;i<cart.length;i++)id=cart[i],OffButton(id)}function GetArray(){cookie=GetCookie("cart"),null!=cookie&&""!=cookie&&(cart=cookie.split("."))}function SetCookie(e,t){cookie_string=e+"="+escape(t),expires=new Date("2200","12","30"),cookie_string+="; expires="+expires.toGMTString(),cookie_string+="; path=/",document.cookie=cookie_string}function GetCookie(e){for(cookie_name=e+"=",cookie_length=document.cookie.length,cookie_begin=0;cookie_begin<cookie_length;){if(value_begin=cookie_begin+cookie_name.length,document.cookie.substring(cookie_begin,value_begin)==cookie_name){var t=document.cookie.indexOf(";",value_begin);return-1==t&&(t=cookie_length),unescape(document.cookie.substring(value_begin,t))}if(cookie_begin=document.cookie.indexOf(" ",cookie_begin)+1,0==cookie_begin)break}return null}var cart_link="/devushki_cart.php",cart=new Array;$(document).ready(function(){$(".cart_add").click(function(){element=$(this).attr("id"),element=element.split("_"),element_id=element[1],Add(element_id)}),$(".cart_remove").click(function(){element=$(this).attr("id"),element=element.split("_"),element_id=element[1],Add(element_id)})}),$(window).load(function(){OnLoad()});
//# sourceMappingURL=maps/cart.js.map