$(function() {
    var menuMobile = $('header nav.mobile');
    var toggle = $('header .toggle');

    toggle.click(function() {
        menuMobile.slideToggle(150);
        toggle.toggleClass('active');
    })

    menuClick();

    function menuClick() {
        $('a').click(function() {
            var href = $(this).attr('href');
            menuMobile.slideUp(150);
            toggle.removeClass('active');
            $.ajax({
                'timeout': 10000,
                'url': href,
                'method': 'GET',
                'error': function(jqXHR, textStatus, errorThrown) {
                    if(jqXHR.status == 404) {
                        let err = jqXHR.status + ": " + jqXHR.statusText;
                        console.log(err);
                        $('.container').html(err);
                    }
                },
                'success': function(data) {
                    if($(window).width() <= 768) {
                        setTimeout(function() {
                            $('.container').html(data);
                            $('section').fadeIn(100);
                        }, 150);
                    } else {
                        $('.container').html(data);
                        $('section').fadeIn(100);
                    }
                }
            })

            return false;
        })
    }
})