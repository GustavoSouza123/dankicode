$(function() {
    $('form').submit(function(e) {
        var container = $('.container');
        var content = 'Nome: ' + $('input[name=nome]').val() +
        '<hr>E-mail: ' + $('input[name=email]').val() +
        '<hr>Telefone: ' + $('input[name=telefone]').val();

        container.html(content);

        e.preventDefault();
        // return false;
    })
})