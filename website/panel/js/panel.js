$(function() {
    let menuAnimDelay = 300;

    $('.menu-toggle').click(function(e) {
        $(this).toggleClass('active');
        if($('aside').css('left') == '-250px') {
            $('aside').animate({left: '0'}, menuAnimDelay);
            $('main .opacity').fadeIn(menuAnimDelay);
        } else {
            $('aside').animate({left: '-250px'}, menuAnimDelay);
            $('main .opacity').fadeOut(menuAnimDelay);
        }
        e.stopPropagation();
    })

    $('body').click(function() {
        $('aside').animate({left: '-250px'}, menuAnimDelay);
        $('main .opacity').fadeOut(menuAnimDelay);
    })

    $('aside').click(function(e) {
        e.stopPropagation();
    })
})