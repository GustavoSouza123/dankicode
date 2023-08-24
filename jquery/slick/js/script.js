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
        dots: true
    });

    // slide2
    createSlides('Multiple Items', 9);
    $('.section2 .slides-area').slick({
        dots: true,
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


    /* remove text from arrows and dots */
    function arrowDotsText() {
        $('.slick-prev').html('<');
        $('.slick-next').html('>');
        $('.slick-dots li button').html('');
    }
    
    arrowDotsText();
    $(window).resize(function() { setTimeout(arrowDotsText, 100) });
})