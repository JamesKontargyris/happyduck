(function() {
    // Show/hide toggle for siblings of the clicked element
    $('.is-toggle').on('click', function()
    {
        $(this).siblings($(this).data('toggle-items')).toggleClass('show');
    })

})();