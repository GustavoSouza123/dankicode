$(function() {
    /* function to create slides */
    var totalSections = 0
    function createSlides(title, numSlides) {
        totalSections++;
        $('.container').append(`<div class="section section${totalSections}"></div>`);
        $(`.section${totalSections}`).append(`<h1>${title}</h1>`);
        $(`.section${totalSections}`).append('<div class="slides-area"></div>');
        for(var i = 0; i < numSlides; i++) {
            $(`.section${totalSections} .slides-area`).append(`<div class="slide">${i+1}</div>`);
        }
    }

    /* creating slides */

    // slide 1
    createSlides('Single Item', 3);
    $('.section1 .slides-area').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // slide 2
    createSlides('Multiple Items', 9);
    $('.section2 .slides-area').slick({
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300
    });

    // slide 3
    createSlides('Responsive Display', 8);
    $('.section3 .slides-area').slick({
        infinite: false,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    infinite: false,
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // slide 4
    createSlides('Variable Width', 6);
    $('.section4 .slides-area .slide').eq(0).css('min-width', '300px');
    $('.section4 .slides-area .slide').eq(1).css('min-width', '175px');
    $('.section4 .slides-area .slide').eq(2).css('min-width', '225px');
    $('.section4 .slides-area .slide').eq(3).css('min-width', '125px');
    $('.section4 .slides-area .slide').eq(4).css('min-width', '100px');
    $('.section4 .slides-area .slide').eq(5).css('min-width', '150px');
    $('.section4 .slides-area').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });

    // slide 5
    createSlides('Center Mode', 6);
    $('.section5 .slides-area').slick({
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });

    // slide 6
    createSlides('Lazy Loading', 6);
    for(var i = 1; i <= 6; i++) {
        $('.section6 .slides-area .slide').eq(i-1).html('<img src="https://kenwheeler.github.io/slick/img/lazyfonz'+i+'.png" />')
    }
    $('.section6 .slides-area').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1
    });

    // slide 7
    createSlides('Autoplay #1', 7),
    $('.section7 .slides-area').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: true,
        arrows: true
    });

    // slide 8
    createSlides('Autoplay #2', 6);
    $('.section8 .slides-area').slick({
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2000
    });

    // slide 9
    createSlides('Fade', 6);
    $('.section9 .slides-area').slick({
        dots: true,
        arrows: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
    });

    // slide 10
    createSlides('Slider Syncing', 5);
    $('.section10 .slides-area').slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.section11 .slides-area'
    });

    createSlides('...', 5);
    $('.section11 .slides-area').slick({
        dots: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        focusOnSelect: true,
        asNavFor: '.section10 .slides-area'
    });

    /* remove text from arrows and dots */
    function arrowDotsText() {
        $('.slick-prev').html('<');
        $('.slick-next').html('>');
        $('.slick-dots li button').html('');
    }
    
    arrowDotsText();
    $(window).resize(function() { setTimeout(arrowDotsText, 100) });
})