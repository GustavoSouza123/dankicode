$(function() {
    // expressões regulares
    var frase = 'gustavoelia7@gmail.com';

    // var verificacao = frase.match(/olá/);
    // var verificacao = frase.match(/[A-Za-z0-9]/);
    // var verificacao = frase.match(/[a-z]{2,5}/);
    // var verificacao = frase.match(/^(.*?)@(.*?)$/);
    // console.log(verificacao);

    // modal
    var fadeTime = 200;

    // abrir janela ao clicar no botão principal
    function abrirJanela() {
        $('.btn').click(function(e) {
            e.stopPropagation();
            $('.bg').fadeIn(fadeTime);
            // $('.bg').show(); // show element
            // $('.bg').hide() // hide element
        });
    }

    abrirJanela();

    // fechar janela ao clicar no body e no botão de fechar
    function fechar() {
        var el = $('body, .close');
        el.click(function() {
            $('.bg').fadeOut(fadeTime);
        });

        $('form').click(function(e) {
            e.stopPropagation();
        })
    }

    fechar();

    // verificações ao enviar o formulário
    $('form').submit(function() {
        var nome = $('input[name=nome]').val();
        var telefone = $('input[name=telefone]').val();
        var email = $('input[name=email]').val();

        // verificações para o nome completo
        var splitNome = nome.split(' ');
        var nomes = nome.split(' ').length;
        if(nomes >= 2) {
            campoValido($('input[name=nome]'));
            for(var i = 0; i < nomes; i++) {
                if(splitNome[i].match(/^[A-Z]{1}[a-z]{1,}$/)) {
                    campoValido($('input[name=nome]'))
                } else {
                    campoInvalido($('input[name=nome]'));
                    return false;
                }
            }
        } else {
            campoInvalido($('input[name=nome]'));
            return false;
        }

        return false;
    });

    // aplicar estilos quando o campo for inválido
    function campoInvalido(el) {
        el.addClass('error');
        el.data('invalido', 'true');
    }

    // retirar estilos quando o campo for válido
    function campoValido(el) {
        el.removeClass('error');
        el.data('invalido', 'false');
    }
})