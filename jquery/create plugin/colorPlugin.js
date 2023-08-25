// plugin para modificar a cor de um elemento

$.fn.aplicarCor = function(options) {
    var settings = $.extend({
        color: '#00f',
        backgroundColor: 'white'
    }, options);

    return this.css({
        color: settings.color,
        backgroundColor: settings.backgroundColor
    });
}