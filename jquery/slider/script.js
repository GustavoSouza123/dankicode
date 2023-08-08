$(function() {
    var currentId = 0;
    var maxId = $('.slider img').length;
    var delay = 3000;

    startSlider();
    function startSlider() {
        $('.slider img').eq(0).fadeIn();
        setInterval(function() { changeSlide() }, delay);
    }

    function changeSlide() {
        $('.slider img').eq(currentId).fadeOut();
        currentId += 1;
        if(currentId == maxId) currentId = 0;
        $('.slider img').eq(currentId).fadeIn();
    }
})