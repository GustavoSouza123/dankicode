$(function() {
    $('.p1').click(function() {
        $('.p2').css('color', '#00f');
    })

    $('.p1').hover(
        function() {
            $('.p1').css('color', '#aaa')
        },
        function() {
            $('.p1').css('color', '#000');
        }
    )

    $('textarea').focus(function() {
        console.log('dentro da textarea');
    })

    $('textarea').blur(function() {
        console.log('fora da textarea');
    })

    $('select').change(function() {
        console.log('meu select foi alterado');
    })    
})