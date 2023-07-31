$(function() {
    var el = $('.box1');
    el.css('background-color', 'green');
    el.css('color', 'white');
    el.css('padding', '20px');
    el.css('display', 'inline-block');

    // $('.box2').css('width', '700px');
    $('.box2').width('700'); // define a largura do elemento
    $('.box2').height('100'); // define a altura do elemento
    $('.box2').css('background-color', 'red');
    $('.box2').css('padding', '30px 50px');
    $('.box2').css('margin', '30px');

    /*
    width(): retorna a largura do elemento
    innerWidth(): retorna a largura do elemento incluindo padding
    outerWidth(true): retorna a largura do elemento incluindo padding, margin e border

    height(): retorna a altura do elemento
    innerHeight(): retorna a altura do elemento incluindo padding
    outerHeight(true): retorna a altura do elemento incluindo padding, margin e border
    */

    console.log('box1 width: ' + el.width());
    console.log('box1 inner width: ' + el.innerWidth());
    console.log('box1 outer width: ' + el.outerWidth(true));
    console.log('box1 height: ' + el.height());
    console.log('box1 inner height: ' + el.innerHeight());
    console.log('box1 outer height: ' + el.outerHeight(true));

    console.log('box2 width: ' + $('.box2').width());
    console.log('box2 inner width: ' + $('.box2').innerWidth());
    console.log('box2 outer width: ' + $('.box2').outerWidth(true));
    console.log('box2 height: ' + $('.box2').height());
    console.log('box2 inner height: ' + $('.box2').innerHeight());
    console.log('box2 outer height: ' + $('.box2').outerHeight(true));
})