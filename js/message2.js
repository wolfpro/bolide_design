$(document).ready(function() {
$("#ajax-contact-form-too").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "sendmail.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
result = '<div class="notification_ok">Заявка отправлена.<br>Мы свяжемся с вами в течение дня.</div>';
$("#fields2").hide();
} else {
result = msg;
}
$('#note2').html(result).fadeIn().delay(6500).fadeOut("slow");

$("#btn_d").on( "click", function() {

$.when( effect() ).done(function() {

});
});
}
});
return false;
});
});