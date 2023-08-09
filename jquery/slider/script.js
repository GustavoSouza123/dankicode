$(function() {
    var currentId = 0;
    var maxId = $('.slider img').length;
    var delay = 5000;
    var animation;

    function startSlide() {
        for(var i = 0; i < maxId; i++) {
            $('.bullets-nav').append('<span></span>');
        }
        $('.slider img').eq(0).fadeIn();
        animation = setInterval(function() { changeSlide() }, delay);
    }
    startSlide();

    function changeSlide() {
        $('.slider img').eq(currentId).fadeOut();
        currentId += 1;
        if(currentId == maxId) currentId = 0;
        $('.slider img').eq(currentId).fadeIn();
        $('.bullets-nav span').css('background-color', '#fff');
        $('.bullets-nav span').eq(currentId).css('background-color', '#000');
    }

    function clickBullet() {
        $('.bullets-nav span').click(function() {
            $('.slider img').eq(currentId).fadeOut();
            currentId = $(this).index();
            $('.slider img').eq(currentId).fadeIn();
            $('.bullets-nav span').css('background-color', '#fff');
            $(this).css('background-color', '#000');
            clearInterval(animation);
            animation = setInterval(function() { changeSlide() }, delay);
        })
    }
    clickBullet();

    function previousSlide() {
        $('.previous').click(function() {
            $('.slider img').eq(currentId).fadeOut();
            currentId -= 1;
            if(currentId < 0) currentId = maxId-1;
            $('.slider img').eq(currentId).fadeIn();
            $('.bullets-nav span').css('background-color', '#fff');
            $('.bullets-nav span').eq(currentId).css('background-color', '#000');
            clearInterval(animation);
            animation = setInterval(function() { changeSlide() }, delay);
        })
    }
    previousSlide();

    function nextSlide() {
        $('.next').click(function() {
            $('.slider img').eq(currentId).fadeOut();
            currentId += 1;
            if(currentId == maxId) currentId = 0;
            $('.slider img').eq(currentId).fadeIn();
            $('.bullets-nav span').css('background-color', '#fff');
            $('.bullets-nav span').eq(currentId).css('background-color', '#000');
            clearInterval(animation);
            animation = setInterval(function() { changeSlide() }, delay);
        })
    }
    nextSlide();
})