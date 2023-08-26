$(function() {
    // changing styles of all the 'p' elements
    $('p').changeStyles({
        color: 'yellow',
        backgroundColor: 'black'
    }).css({
        'height': '50px',
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'center'
    });

    // adding link location to all the 'a' elements
    $('a').showLinkLocation()
        .css({
            'display': 'inline-block',
            'text-decoration': 'none',
            'color': '#000',
            'margin': '5px 0'
        })
        .attr('target', '_blank');
})