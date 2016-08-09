(function() {

    // Redirect the user to the homepage if they click on the header logo
    $('.header__logo').on('click', function()
    {
        window.location.href = '/';
    });


    // Add class to header when screen is mobile size
    var $window = $(window),
        $header = $('.header');

    // On page load
    if ($window.width() < 900) {
        $header.addClass('header--is-mobile');
        // Make header sticky on mobile devices
        $(".header--is-mobile").sticky({topSpacing:0});
        return;
    }
    // On window resize
    $window.resize(function resize(){
        if ($window.width() < 900) {
            $header.addClass('header--is-mobile');
            // Make header sticky on mobile devices
            $(".header--is-mobile").sticky({topSpacing:0});
            return;
        }
        $(".header--is-mobile").unstick();
        $header.removeClass('header--is-mobile');
    }).trigger('resize');




    // Show/hide toggle for siblings of the clicked element
    $('.is-toggle').on('click', function()
    {
        $(this).siblings($(this).data('toggle-items')).toggleClass('show');
        // toggle the down/up arrow on service bar clicks
        $(this).find('.service__header i').toggleClass('service__toggle-arrow--toggled');
        // Toggle an .is-toggle--open class to adjust this element when toggled
        $(this).toggleClass('is-toggle--open');
        return false;
    })

    /*
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });

})();