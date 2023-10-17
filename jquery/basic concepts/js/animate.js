$(function() {
    /*
    var timer;
    var timeout = function() {
        $('.box2').animate({
            'width':'40%',
            'height':'500px'
        }, 2000);
    }

    $('.box1').animate({
        'width':'40%',
        'height':'500px'
    }, 2000, function() {
        timer = setTimeout(timeout, 3000);
    });

    $('body').click(function() {
        alert('a animação com timeout foi cancelada');
        clearTimeout(timer);
    });
    */

    var timer = setInterval(function() {
        alert('ola mundo');
    }, 1000);

    $('body').click(function() {
        console.log('intervalo cancelado');
        clearInterval(timer);
    })
})