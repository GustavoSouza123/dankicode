$(function() {
    let menuAnimDelay = 300;
    let screenWidth = $('body').width()+17;

    verifyWindowWidth();

    var timeout;
    $(window).resize(function() {
        screenWidth = $('body').width()+17;
        $('.loading')
            .css('display', 'flex')
            .hide()
            .fadeIn();
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            $('.loading').fadeOut();
            verifyWindowWidth();
        }, 1000);
    })

    function verifyWindowWidth() {
        if(screenWidth <= 700) {
            $('.menu-toggle').click(openCloseMenu);
            $('body').click(bodyClick);
            $('aside').click(asideStopPropagation);
            $('.menu-toggle').removeClass('active');
            $('aside').animate({left: '-250px'}, 0);
            $('main .opacity').fadeOut(0);
        } else {
            $('.menu-toggle').off('click');
            $('body').off('click');
            $('aside').off('click');
            $('.menu-toggle').removeClass('active');
            $('aside').css('left', '0px');
            $('main .opacity').fadeOut(0);
        }
    }

    function openCloseMenu(e) {
        if($('aside').css('left') == '-250px') {
            openMenu();
        } else {
            closeMenu();
        }
        e.stopPropagation();
    }

    function bodyClick() {
        if($('aside').css('left') == '0px') {
            closeMenu();
        }
    }

    function asideStopPropagation(e) {
        e.stopPropagation();
    }

    function openMenu() {
        $('.menu-toggle').toggleClass('active');
        $('aside').animate({left: '0px'}, menuAnimDelay);
        $('main .opacity').fadeIn(menuAnimDelay);
    }
    
    function closeMenu() {
        $('.menu-toggle').toggleClass('active');
        $('aside').animate({left: '-250px'}, menuAnimDelay);
        $('main .opacity').fadeOut(menuAnimDelay);
    }
})