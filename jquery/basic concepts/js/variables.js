$(function() {
    var el = $('.box');

    $('body').css('margin', '100px');
    el.css('width', '300px');
    el.css('height', '300px');

    function setBackground(bg) {
        el.css('background-color', bg);
    }

    setBackground('yellow');
})