$(function() {
    $(window).scroll(function() {
        var windowOffY = $(window).scrollTop();
        var windowHeight = $(window).height();
        $('section').each(function() {
            var elOffY = $(this).offset().top;
            if(elOffY + $(this).height()/2 < (windowOffY + windowHeight)) {
                var id = $(this).attr('id');
                $('a').css('border-bottom', '0');
                $('.'+id).css('border-bottom', '1px solid #fff');
                return;
            }
        })
    })

    $('a').click(function() {
        var link = $(this).attr('class');
        $('html, body').animate({
            'scrollTop': $('section#'+link).offset().top-50,
        }, 500);

        return false;
    })
})