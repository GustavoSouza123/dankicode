$(function() {
    var box = $('.box');

    box.css('width', '100%');
    box.css('height', '70px');
    box.css('background-color', '#ccc');
    box.css('display', 'flex').css('align-items', 'center').css('justify-content', 'space-between');
    box.css('padding', '0 20px');

    // adiciona um html no elemento
    box.html(box.html()+'<h1 class="logo">Logotipo</h1>');
    box.html(box.html()+'<div class="text1">Este é um texto simples</div>');

    $('.logo').css('font-size', '24px');
    $('.logo').css('color', '#555');
    $('.text1').css('color', 'red');

    // adiciona um texto no elemento (html será mostrado como texto)
    $('.box2').text('<div></div>');
    console.log(box.text());

    // adiciona um texto no input
    $('input[type=text').val('ola mundo');

    // adiciona um texto no textarea
    $('textarea').text('ola mundo');
})