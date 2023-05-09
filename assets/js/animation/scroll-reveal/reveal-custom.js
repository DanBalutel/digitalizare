
/*----------------------------------------------------
 Scroll reveal animation
 ----------------------------------------------------*/
(function($) {
;
    if (Modernizr.csstransforms3d) {
        window.sr = ScrollReveal();
        sr.reveal('.reveal', {
            duration: 800,
            delay: 400,
            reset: true,
            easing: 'linear',
            scale: 1
        });
    }
})(jQuery);