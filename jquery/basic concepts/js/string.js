$(function() {
    $('body').css('margin', '30px 10px');

    $('input[type=button]').click(function() {
        var str = $('input[type=text]').val();
        // var v = str.split(' '); // separa a string com base em um delimitador
        // var v = str.substr(0,4); // recorta a string

        var splitStr = str.split('@');
        if(splitStr[1] == 'gmail.com') {
            console.log('este email é gmail');
        } else {
            console.log('este email nao é gmail');
        }
    })
})