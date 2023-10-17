$(function() {
    function checkUrl() {
        var url = location.href.split('/');
        var currentUrl = url[url.length-1];
        if(currentUrl != undefined) {
            $('a[href="'+currentUrl+'"]').css('color', 'cornflowerblue');
        }
    }

    checkUrl();
})