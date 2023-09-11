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
})