$(function() {
    // jssocials plugin
    $('.share').jsSocials({
        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"],
    })

    // mask plugin
    $('input[name="telefone1"]').mask('(00) 00000-0000');
    $('input[name="telefone2"]').mask('+00 (00) 00000-0000');
    $('input[name="data"]').mask('00/00/0000');
    $('input[name="hora"]').mask('00:00:00');
    $('input[name="cpf"]').mask('000.000.000-00', {reverse: true});
    $('input[name="dinheiro"]').mask('#.##0,00', {reverse: true});
    $('input[name="endereçoip"]').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
})