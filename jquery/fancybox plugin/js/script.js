$(function() {
    Fancybox.bind('[data-fancybox="gallery1"]', {});

    let image = ``;
    for(var i = 1; i < 20; i++) {
        image = `<a data-fancybox="gallery2" data-src="https://lipsum.app/id/${i}/1024x768" data-caption="Image caption"><img src="https://lipsum.app/id/${i}/200x150" /></a>`;
        $('.gallery2 .gallery-content').append(image);
    }

    Fancybox.bind('[data-fancybox="gallery2"]', {});
})