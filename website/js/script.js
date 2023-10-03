$(function() {
    // include path
    const include_path = $('input[name="include_path"]').val();

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
        var content = "";
        for(var i = 0; i <= maxSlide; i++) {
            content += '<div class="bullet"></div>';
        }
        $('.bullets').html(content);
        $('.bullets .bullet').eq(0).addClass('active');
    }

    var slideInterval;
    function changeSlider() {
        slideInterval = setInterval(function() {
            $('.banner-img').eq(currentSlide).stop().fadeOut(1000);
            currentSlide++;
            if(currentSlide > maxSlide) {
                currentSlide = 0;
            }
            $('.banner-img').eq(currentSlide).stop().fadeIn(1000);
            $('.bullets .bullet').removeClass('active');
            $('.bullets .bullet').eq(currentSlide).addClass('active');
        }, delay);
    }

    $('body').on('click', '.bullets .bullet', function() {
        var currentBullet = $(this);
        $('.banner-img').eq(currentSlide).stop().fadeOut(1000);
        currentSlide = currentBullet.index();
        $('.banner-img').eq(currentSlide).stop().fadeIn(1000);
        $('.bullets .bullet').removeClass('active');
        currentBullet.addClass('active');
        clearInterval(slideInterval);
        changeSlider();
    })

    initSlider()
    changeSlider();

    // expertise boxes loading
    var currentBoxIndex = -1;
    var maxBoxIndex = $('section.expertise .box').length -1;
    boxDelay = 500;

    var boxesInterval;
    function boxesLoading() {
        $('section.expertise .box').css('opacity', '0');
        boxesInterval = setInterval(animation, boxDelay);

        function animation() {
            currentBoxIndex++;
            if(currentBoxIndex > maxBoxIndex) {
                clearInterval(boxesInterval);
                return false;
            }

            $('section.expertise .box').eq(currentBoxIndex).animate({'opacity': '1'}, boxDelay);
        }
    }

    boxesLoading();

    // expertise boxes logo opacity animation
    var currentLogo;
    function boxesLogoAnimation() {
        currentLogo = -1;
        setInterval(function() {
            currentLogo++
            if(currentLogo > maxBoxIndex) {
                currentLogo = 0;
            }
            $('section.expertise img.logo').eq(currentLogo).css('opacity', '1');
            setTimeout(function() {
                $('section.expertise img.logo').eq(currentLogo).css('opacity', '.5');
            }, 500)
        }, 1000)
    }

    // setTimeout(boxesLogoAnimation, boxDelay * (maxBoxIndex+1));

    // ajax forms
    $('body').on('submit', 'form', function() {
        let form = $(this);
        $.ajax({
            beforeSend: function() {
                $('.loading')
                    .css('display', 'flex')
                    .hide()
                    .fadeIn();
            },
            url: include_path+'ajax/forms.php',
            method: 'post',
            dataType: 'json',
            data: form.serialize(),
        }).done(function(data) {
            $('.loading').fadeOut();
            if(data.success) {
                $('.form-message.success').fadeIn();
                setTimeout(function() {
                    $('.form-message.success').fadeOut();
                }, 3000);
            } else {
                $('.form-message.error').fadeIn();
                setTimeout(function() {
                    $('.form-message.error').fadeOut();
                }, 3000);
            }
        });
        return false;
    })
})