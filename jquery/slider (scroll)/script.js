$(function() {

    function startSlider() {
        var numSlides = $('.slide').length;
        var containerWidth = 100 * numSlides;
        var slideWidth = 100 / numSlides;
        $('.slides').css('width', containerWidth+'%');
        $('.slide').css('width', slideWidth+'%');
        console.log(numSlides + ', ' + containerWidth + ', ' + slideWidth);
    }

    startSlider();

})