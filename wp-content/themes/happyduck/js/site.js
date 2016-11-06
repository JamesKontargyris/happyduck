(function() {

    // Redirect the user to the homepage if they click on the header logo
    $('.header__logo').on('click', function()
    {
        window.location.href = '/';
    });

    // Show/hide toggle for siblings of the clicked element
    $('.is-toggle').on('click', function()
    {
        // Toggle an .is-toggle--open class to target this element when toggled
        $(this).toggleClass('is-toggle--open');

        if(typeof $(this).siblings($(this).data('toggle-items')) != 'undefined' && $(this).siblings($(this).data('toggle-items')).length >= 1) {
            $(this).siblings($(this).data('toggle-items')).toggleClass('show');
        } else {
            $($(this).data('toggle-items')).toggleClass('show');
        }

        // If a data attribute is set to give focus to an element, set focus on that element
        if(typeof $(this).data('focus') != 'undefined') {
            $($(this).data('focus')).focus();
        }

        // toggle the down/up arrow on service bar clicks
        if($(this).hasClass('is-service-header')) {
            $(this).find('.service__header i').toggleClass('service__toggle-arrow--toggled');
        }

        return false;
    });

    $('.is-close').on('click', function()
    {
        if(typeof $(this).siblings($(this).data('close-items')) != 'undefined' && $(this).siblings($(this).data('close-items')) >= 1) {
            $(this).siblings($(this).data('close-items')).removeClass('show').css('display', 'none');
        } else {
            $($(this).data('close-items')).removeClass('show').css('display', 'none');
        }
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

    // Make all icon--badge elements the same width and height
    var badges = jQuery('.icon--badge');
    jQuery(badges).each(function(){
        jQuery(this).height(jQuery(this).width());
    });
})();