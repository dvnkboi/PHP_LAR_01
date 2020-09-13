require('./bootstrap');


$('.carousel-control-prev').on('click', () => $('#carousel-1').carousel('prev'));

$('.carousel-control-next').on('click', () => $('#carousel-1').carousel('next'));


$('.shopCard').on('click', function (evt) {
    if($(this).hasClass('active')){
        $(this).removeClass('active');
        $(this).css('height','340px');
        var extras = $(this).find('.extraInfo');
        extras.css({
            'opacity':0,
            'height':'0px'
        });
        return;
    }
    $(this).addClass('active');
    $(this).css('height','390px');
    var extras = $(this).find('.extraInfo');
    extras.css({
        'opacity':1,
        'height':'50px'
    });
});

$('.addToCartTxt , .buyNow').on('click',function(evt){
    $('.modal').css('display','block');
    $('.modal').addClass('show');
});


$('.closeBtn , .close').on('click',function(evt){
    $('.modal').css('display','none');
    $('.modal').removeClass('show');
    return;
});