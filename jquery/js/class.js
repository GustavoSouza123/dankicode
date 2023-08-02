$(function() {
    $('.box1').addClass('teste'); // adiciona uma classe

    setTimeout(function() {
        $('.box1').removeClass('teste'); // remove uma classe
    }, 1000);

    $('teste').attr('atributo', 'false')
    console.log($('teste').attr('atributo'));
})