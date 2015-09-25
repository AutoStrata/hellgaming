(function($) {
    "use strict";
    if(screen.width < 601) {
        $(".menu-responsive").toggle(function () {
            $('#menu').addClass('active');
            $('#wrapper').addClass('mask');
        }, function () {
            $('#menu').removeClass('active');
            $('#wrapper').removeClass('mask');
        });
        $('body:not("#menu")').click(function () {
            $('#menu').removeClass('active');
            $('#wrapper').removeClass('mask');
            //$('.mega-menu-dropdown').removeClass('open');
        });

        $("#menu > li.dropdown > a").toggle(function () {
            $(this).parent().removeClass('open');
            $(this).next().addClass('show');
        }, function () {
            $(this).parent().removeClass('open');
            $(this).next().removeClass('show');
        });
    }



//    /* Clicks within the dropdown won't make
//     it past the dropdown itself */
//    $("#menu,.menu-responsive").click(function(e){
//        e.stopPropagation();
//    });

})(jQuery);