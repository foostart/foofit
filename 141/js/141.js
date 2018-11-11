$(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
$('document').ready(function () {
    var swiper = new Swiper('.swiper-container', {
        paginationClickable: true, // Khi click vào nút pagination slide sẽ chuyển trang
        spaceBetween: 18, // Khoảng cách giữa các slide tính bằng px
        centeredSlides: true,
        slidesOffsetBefore: 122,
        slidesPerView: 4,
        slidesPerGroup: 1,
        autoplay: 3000,
        loop: true, // lặp lại khi chạy
        breakpointsInverse: true,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
                slidesOffsetBefore: 115,
                centeredSlides: true
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesOffsetBefore: 480,
                centeredSlides: true
            },
            414: {
                slidesPerView: 2,
                spaceBetween: 10,
                slidesOffsetBefore: 310,
                centeredSlides: true
            },
            375: {
                slidesPerView: 2,
                spaceBetween: 10,
                slidesOffsetBefore: 282,
                centeredSlides: true
            },
            360: {
                slidesPerView: 2,
                spaceBetween: 15,
                slidesOffsetBefore: 275,
                centeredSlides: true
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 15,
                slidesOffsetBefore: 245,
                centeredSlides: true
            }
        }
    });
});

