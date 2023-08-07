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
                'url': href,
                'method': 'GET',
                'error': function(jqXHR, textStatus, errorThrown) {
                    // console.log(jqXHR);
                    if(jqXHR.status == 404) {
                        let err = jqXHR.status+': página não encontrada';
                        console.log(err);
                        $('.container').html(err);
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