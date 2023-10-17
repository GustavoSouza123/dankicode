$(function() {
    var delay = 3000;
    var currentIndex = 0;
    var numSlides = $('.slide').length;

    function startSlide() {
        for(var i = 0; i < numSlides; i++) {
            $('.bullets').append('<span class="bullet"></span>');
        }
    }
    startSlide();

    function changeSlides() {
        setInterval(function() {
            currentIndex++;
            if(currentIndex == numSlides) currentIndex = 0;
            goToSlider(currentIndex);
        }, delay)
    }
    changeSlides();

    function goToSlider(index) {
        var slideOffset = $('.slide').eq(index).offset().left * index;
        $('.slides').animate({'scrollLeft':slideOffset});
        $('.bullet').css('background-color', '#eee');
        $('.bullet').eq(index).css('background-color', '#666');
    }
})