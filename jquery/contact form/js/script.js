$(function() {
    $('form').submit(function() {
        if(completedForm()) {
            $('form').ajaxSubmit({
                beforeSubmit: function() {
                    $('form input[type="submit"]').attr('disabled', 'true');
                    $('form input[type="submit"]').attr('value', 'Loading');
                    $('form input[type="submit"]').animate({'opacity': '0.5'});
                },
                success: function() {
                    $('.success').animate({'bottom': '50px', 'opacity': '1'});
                    setTimeout(function() { $('.success').animate({'bottom': '-50px', 'opacity': '0'}); }, 3000);
                    $('form')[0].reset();
                    $('form input[type="submit"]').removeAttr('disabled');
                    $('form input[type="submit"]').attr('value', 'Submit');
                    $('form input[type="submit"]').animate({'opacity': '1'});
                }
            });
        } else {
            $('.error').animate({'bottom': '50px', 'opacity': '1'});
            setTimeout(function() { $('.error').animate({'bottom': '-50px', 'opacity': '0'}); }, 3000);
        }
    
        return false;
    })

    function completedForm() {
        if($('[name=name]').val() == '' || $('[name=email]').val() == '' || $('[name=phone]').val() == '' || $('[name=message]').val() == '') {
            return false;
        } else {
            return true;
        }
    }    
})