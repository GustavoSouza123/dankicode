$(function() {
    $('.menu-toggle').click(function() {
        $(this).toggleClass('active');
        $('.mobile').slideToggle(200);
    })
})