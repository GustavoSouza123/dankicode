// plugin to change some styles of an element

(function($) {
    $.fn.changeStyles = function(options) {
        var settings = $.extend({
            color: '#00f',
            backgroundColor: 'white'
        }, options);

        this.css({
            color: settings.color,
            backgroundColor: settings.backgroundColor
        });

        return this.each(function() {
            if($(this).html() == 'Goodbye World') {
                $(this)
                    .html('Adeus Mundo')
                    .css('color', 'red');
            }
        });
    }
})(jQuery);