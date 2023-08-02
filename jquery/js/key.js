$(function() {
    var func = function() {
        // $(this).css('background', 'red');
        $('input[type=text]').eq($(this).index()).css('background', 'red');  
        console.log($(this).index());
    }

    // $('input[type=text]').keyup(func); // key up event
    $('input[type=text]').keydown(func); // key down event
})