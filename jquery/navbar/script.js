$(function() {
    verificarCliqueMenu();

    function verificarCliqueMenu() {
        $('a').click(function() {
            var href = $(this).attr('href');
            $.ajax({
                'beforeSend': function() {
                    console.log('chamando o before send');
                },
                'timeout': 10000,
                'method':'GET',
                'url':href,
                'error': function(jqXHR, textStatus, errorThrown) {
                    // console.log(jqXHR);
                    if(jqXHR.status == 404) {
                        console.log(jqXHR.status+': página não encontrada');
                    }
                },
                'success': function(data) {
                    $('.container').html(data);
                    $('section').fadeIn();
                }
            })
            
            return false;
        })
    }
})