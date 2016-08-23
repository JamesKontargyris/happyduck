(function() {

    //Make service areas switcher menu appear when page loads
    $('.home-service-areas-switcher__menu').css('visibility', 'visible');

    // Make the first service areas switcher menu item active on page load
    // and display only the first service area block
    $('.home-service-areas-switcher__menu__link').first().addClass('active');
    $('.home-service-areas-switcher__service-area-content').css('display', 'none').first().css('display', 'block');

    // When a switcher menu link is clicked, display the relevant block of content
    $('.home-service-areas-switcher__menu__link').on('click', function(e)
    {
        // cache this element
        $this = $(this);
        // Make all links inactive, then make the clicked link active
        $('.home-service-areas-switcher__menu__link').removeClass('active');
        $this.addClass('active');
        // Fade out the div containing all blocks, hide them all, display the correct one, then show container div again
        $('.home-service-areas-switcher__service-area-blocks').fadeOut(200, function() {
            $('.home-service-areas-switcher__service-area-content').css('display', 'none');
            $('#' + $this.data('service-area-block')).css('display', 'block');
        }).fadeIn(200);

        //Stop click firing redirect to another page
        return false;
    });
})();