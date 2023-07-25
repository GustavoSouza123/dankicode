$(function() {
    $(window).scroll(function() {
        $('.box').css('background-color', '#222');
        $('a').css('color', '#eee');
    })

    // atualizando a página ao redimensionar a tela
    var timer;
    $(window).resize(function() {
        clearTimeout(timer);
        timer = setTimeout(function() {
            location.href = 'http://localhost/dankicode/jquery/';
        }, 1000);
    })

    $('a').click(function(e) {
        e.preventDefault();
        // return false;
    })


    // desaparecer modal ao clicar fora dele
    $('.modal').click(function(e) {
        e.stopPropagation();
    })

    // fechar modal
    $('body').click(function() {
        $('.modal').css('display', 'none');
    })
    $('.close').click(function() {
        $('.modal').css('display', 'none');
    })

    // abrir modal
    $('.open').click(function(e) {
        e.stopPropagation();
        $('.modal').css('display', 'block');
    })
})