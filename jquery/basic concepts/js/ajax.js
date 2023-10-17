$(function() {
    $.ajax({
        'url':'ajax.html',
        // 'method':'post',
        // 'data':{'nome':'gustavo', 'idade':'16'},
    }).done(function(data) {
        $('.container').append(data);
    });
})