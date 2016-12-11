$(function(){
    var wow = new WOW();
    wow.init();
    var click = 0;
    $('.navbar-toggle').on('click', function(){
        click++;
       if(click%2 !== 0) {$('.content_article').css('margin-top', '190px');}
       else {$('.content_article').css('margin-top', '10px');}
    });
});

