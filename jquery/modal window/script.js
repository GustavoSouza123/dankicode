/* JANELA MODAL COM JQUERY */

$(function() {
    /* funções para abrir e fechar janela do modal */

    // tempo da animação ao abrir e fechar modal
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
    
    abrirJanela();
    fechar();

    /* validações ao enviar o formulário */

    // evento submit do formulário
    $('form').submit(function() {
        var nome = $('input[name=nome]').val();
        var telefone = $('input[name=telefone]').val();
        var email = $('input[name=email]').val();

        if(validarNome(nome) == false) {
            campoInvalido($('input[name=nome]'));
            return false;
        } else if(validarTelefone(telefone) == false) {
            campoInvalido($('input[name=telefone]'));
            return false;
        } else if(validarEmail(email) == false) {
            campoInvalido($('input[name=email]'));
            return false;
        } else {
            alert('formulário enviado com sucesso');
        }
        
    });

    // validações para o nome completo
    function validarNome(nome) {
        if(nome == '') return false;

        var splitNome = nome.split(' ');
        var nomes = nome.split(' ').length;
        if(nomes >= 2) {
            campoValido($('input[name=nome]'));
            for(var i = 0; i < nomes; i++) {
                if(splitNome[i].match(/^[A-Z]{1}[a-z]{1,}$/) == null) {
                    return false;
                } else {
                    campoValido($('input[name=nome]'));
                }
            }
        } else {
            return false;
        }
    }

    // validações para o telefone
    function validarTelefone(telefone) {
        if(telefone == '') return false;

        if(telefone.match(/^\([0-9]{2}\) [0-9]{4}-[0-9]{4}$/) == null) {
            return false;
        } else {
            campoValido($('input[name=telefone]'));
        }
    }

    // validações para o e-mail
    function validarEmail(email) {
        if(email == '') return false;

        if(email.match(/^[a-z0-9-_.]{1,}@[a-z.]{1,}$/) == null) {
            return false;
        } else {
            campoValido($('input[name=email]'));
        }
    }

    /* funções para estilizar o campo do formulário */

    function campoInvalido(el) {
        el.addClass('error');
        el.data('invalido', 'true');
    }

    function campoValido(el) {
        el.removeClass('error');
        el.data('invalido', 'false');
    }
})