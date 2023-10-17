$(function() {
    $('body').on('click', 'a', function() {
        alert('ola mundo');
        return false;
    })

    setTimeout(function() {
        $('body').html('<a href="">Meu link</a>');
    }, 1000)
})