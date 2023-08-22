$(function() {
    var path = '/dankicode/jquery/menu url/';

    $('header nav ul li a').click(function() {
        location.href = path;
        location.href = path + 'index.html?' + $(this).attr('goto');
    })

    function checkUrl() {
        let url = location.href.split('/');
        let currentPage = url[url.length-1].split('?');
        let currentSection = currentPage[1];
        $('header nav ul li a').css('color', '#fff');
        $('[goto='+currentSection+']').css('color', 'red');
        $('html, body').animate({
            'scrollTop': $('section#'+currentSection).offset().top-70
        });
    }

    checkUrl();
})