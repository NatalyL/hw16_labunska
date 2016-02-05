$(function () {
    $('.menu a[href^="#"]').click(function(e){
        e.preventDefault();
        var destination = $($(this).attr('href')).offset().top;
        $('html, body').animate({scrollTop: destination}, 'slow');
    });
});