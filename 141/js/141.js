$(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
$('document').ready(function () {
    $('#owl-carousel').owlCarousel({
        margin: 30,
        loop: true,
        stagePadding: 15,
        smartSpeed: 450,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            800: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });
});

