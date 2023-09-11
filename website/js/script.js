$(function() {
    // menu navbar
    $('html, body').click(function() {
        $('.menu-toggle').removeClass('active');
        $('.mobile').slideUp(200);
    })

    $('.menu-toggle').click(function(e) {
        e.stopPropagation();
        $(this).toggleClass('active');
        $('.mobile').slideToggle(200);
    })

    $('.mobile').click(function(e) {
        e.stopPropagation();
    })

    // smooth scroll
    if($('target').length > 0) {
        var el = '.'+$('target').attr('target');
        var scroll = $('section'+el).offset().top;
        $('html, body').animate({'scrollTop': scroll}, 500);
    }

    // slider
    var currentSlide = 0;
    var maxSlide = $('.banner-img').length-1;
    var delay = 5000;

    function initSlider() {
        $('.banner-img').hide();
        $('.banner-img').eq(0).show();
    }

    function changeSlider() {
        setInterval(function() {
            $('.banner-img').eq(currentSlide).fadeOut(1000);
            currentSlide++;
            if(currentSlide > maxSlide) {
                currentSlide = 0;
            }
            $('.banner-img').eq(currentSlide).fadeIn(1000);
        }, delay);
    }

    initSlider()
    changeSlider();
})