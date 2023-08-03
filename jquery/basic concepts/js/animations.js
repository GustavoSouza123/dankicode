$(function() {
    /*
    $('.box1').fadeOut(500, function() {
        $('.box2').fadeIn(1000, function() {
            console.log('a animação terminou');
        })
    });
    */

    $('.box1').click(function() {
        $('.box2').slideToggle(200, function() {
            location.href = 'https://www.google.com';
        });
    })
})