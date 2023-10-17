$(function() {
    // adicionar html no final do elemento selecionado
    $('.box').eq(0).append('<h3>Meu elemento adicionado dinamicamente</h3>');
    $('.box').eq(2).append('<p style="color:red;">Meu segundo elemento adicionado dinamicamente</p>');

    // adicionar html no início do elemento selecionado
    $('.box').eq(1).prepend('<h3>Olá, Mundo!</h3>');

    // manipular css de um elemento adicionado
    var el = $('<h2>Meu novo conteúdo</h2>').appendTo($('.box'));
    el.css('color', 'blue');

    // manipular css de um elemento adicionado
    var el2 = $('<h2>Adeus, Mundo!</h2>').prependTo($('.box').eq(0));
    el2.css('color', 'orange');

    // adicionar html após o elemento selecionado
    var aft = '---Um texto após o h3---';
    $('.box h3').after(aft);
    
    // adicionar html antes do elemento selecionado
    var bef = '---Um texto antes do h3---';
    $('.box h3').before(bef);

    // manipular css de um elemento adicionado antes ou depois de outro elemento
    var str = '<p>texto teste</p>';
    var pAfter = $(str).insertAfter($('.box'));
    pAfter.css('background', '#ff0');
    var pBefore = $(str).insertBefore($('.box'));
    pBefore.css('background', '#000').css('color', '#fff');

    // remover elemento da página
    $('button').click(function() {
        $('.box').eq(0).remove();
    });
})