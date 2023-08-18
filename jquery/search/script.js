
$(function() {
    var range = $('.filter-area input[type="range"]');
    var maxValue = 70000;
    var isDragging = false;

    $(range).mousedown(function() {
        isDragging = true;
    });

    $(document).mouseup(function() {
        isDragging = false;
    })

    $('.filter-area .subtitle span').eq(0).html = 0;
    range.mousemove(function(e) {
        if(isDragging) {
            currentPrice = ($(range).val()/100) * maxValue;
            currentPrice = formatPrice(currentPrice);
            $('.filter-area .subtitle span').eq(0).html('R$'+currentPrice);
        }
    });

    function formatPrice(price) {
        price = price.toFixed(2);
        priceArr = price.split('.');

        if(priceArr[0] < 1000) {
            price = priceArr[0]+','+priceArr[1]
        } else if(priceArr[0] < 10000) {
            price = priceArr[0][0]+'.'+priceArr[0].substring(1, priceArr[0].length)+','+priceArr[1];
        } else {
            price = priceArr[0][0]+priceArr[0][1]+'.'+priceArr[0].substr(2, priceArr[0].length)+','+priceArr[1];
        }

        return price;
    }
})