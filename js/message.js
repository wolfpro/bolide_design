$(document).ready(function() {
$("#ajax-contact-form").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "send.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
result = '<div class="notification_ok">Заявка отправлена.<br>Мы свяжемся с вами в течение дня.</div>';
$("#fields").hide();
} else {
result = msg;
}
$('#note').html(result).fadeIn().delay(6500).fadeOut("slow");

$("#bt").on( "click", function() {

$.when( effect() ).done(function() {

});
});
}
});
return false;
});
});