$(function() {
    var fadeTime = 200;

    abrirJanela();
    fechar();

    function abrirJanela() {
        $('.btn').click(function(e) {
            e.stopPropagation();
            $('.bg').fadeIn(fadeTime);
            // $('.bg').show(); // show element
            // $('.bg').hide() // hide element
        });
    }

    function fechar() {
        var el = $('body, .close');
        el.click(function() {
            $('.bg').fadeOut(fadeTime);
        });

        $('form').click(function(e) {
            e.stopPropagation();
        })
    }
})