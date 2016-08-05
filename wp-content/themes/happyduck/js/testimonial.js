(function() {
    // Match heights of all testimonia__content elements
    $('.testimonial__content').matchHeight();
    // Convert testimonials to fade carousel
    $('.testimonial').slick({
        arrows: false,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 6000,
        slidesToShow: 1,
        adaptiveHeight: true,
        fade: true,
        cssEase: 'linear'
    });
})();