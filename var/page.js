$('document').ready(function () {
    $(function () {
        var scroll_page = $('#scoll-top');
        var scroll_top = scroll_page.offset().top;
        $(window).scroll(function () {
            if ($(this).scrollTop() > scroll_top) {
                $('header').addClass("scroll_menu");
            } else {
                $('header').removeClass("scroll_menu");
            }
            if ($(this).scrollTop() > scroll_top) {
                $('nav').addClass("clear-margin-fixed");
            } else {
                $('nav').removeClass("clear-margin-fixed");
            }
        });
    });
});