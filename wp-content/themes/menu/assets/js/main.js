//scroll//
$('a[href^="#"]').click(function() {
   var destino = $(this.hash);
   if (destino.length == 0) {
     destino = $('a[name="' + this.hash.substr(1) + '"]');
   }
   if (destino.length == 0) {
     destino = $('html');
   }
   $('html, body').animate({ scrollTop: destino.offset().top }, 500);
   return false;

$('#menu-mi_menu li').addClass('nav-item').children(this).addClass('nav-link js-scroll-trigger');
$('.nav-item:last-of-type a').addClass('btn btn-primary').removeClass('js-scroll-trigger');
});
