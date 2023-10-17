// plugin to show the location of a link

(function($) {
    $.fn.showLinkLocation = function() {
        this.filter('a').append(function() {
            return ' (' + this.href + ')';
        });
        return this; // chaining
    }
})(jQuery);