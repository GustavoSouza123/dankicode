$(function() {
    var el = $('.source .text').clone();
    $('.container').html(el.html()); // clona o texto de um elemento em outra div
    el.appendTo($('.container')); // clona o elemento em outra div

    $('.source .text').appendTo('.container'); // move um elemento para outra div
})