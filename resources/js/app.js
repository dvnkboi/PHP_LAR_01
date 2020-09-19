require('./bootstrap');


$('.carousel-control-prev').on('click', () => $('#carousel-1').carousel('prev'));

$('.carousel-control-next').on('click', () => $('#carousel-1').carousel('next'));



$('.logoCont').on('click', () => {
    window.location.href = '/';
});

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

$('.addToCartTxt , .buyNow, .checkoutCart').on('click',function(evt){
    $('.modal').css({
        'opacity':1,
        'pointer-events':'auto'
    });
    $('.modal').addClass('show');
});


$('.closeBtn , .close').on('click',function(evt){
    $('.modal').css({
        'opacity':0,
        'pointer-events':'none'
    });
    $('.modal').removeClass('show');
    return;
});


$(".middleProp").hover(function() {
    $(".signupText").css("opacity","0");
}, function() {
    $(".signupText").css("opacity","1");
});


$(".signupCont").on('click',() => {
    
    $(".signupFormCont").css({
        'opacity':1,
        'transform':'translateY(0)',
        'pointer-events':'auto'
    });

});


$(".signupBackBtn").on('click',() => {
    
    $(".signupFormCont").css({
        'opacity':0,
        'transform':'translateY(40px)',
        'pointer-events':'none'
    });

});


$('.addCart').on('click',function(event){
    event.stopPropagation();
    if(!$('#cartBtn').attr('data').includes($(this).attr('data'))){
        $('#cartBtn').attr('data',$('#cartBtn').attr('data') + '_' + $(this).attr('data'));
        $(this).addClass('active');
    }
    else{
        $('#cartBtn').attr('data',$('#cartBtn').attr('data').replace('_' + $(this).attr('data'),''));
        $(this).removeClass('active');
    }
});

$('#cartBtn').on('click', () => {
    if($('#cartBtn').attr('data')){
        var data;
        data = 'cart/' + $('#cartBtn').attr('data');
        window.location.href = data;
    }
    else{
        window.location.href = 'cart';
    }
});

$(document).ready(function(){
    setTimeout(() => {
        if( parseFloat($('.checkoutCart').attr('data')) > 1 ){
            $('.checkoutCart').css({
                'pointer-events':'auto',
                'transform':'translateY(0px)'
            });
            // setTimeout(() => {
            //     $('.body').css('overflow','auto');
            // },300);
        }
    },500);
});




$('#logOut').on('click', () => {
    window.location.href = 'out';
});

$('.removeCart').on('click', function(event){
    $(this).parent().css({
        'opacity':0,
        'transform':'translateY(-7px)'
    });
    //$('.body').css('overflow','hidden');
    $('.checkoutCart').css('transform','translateY(64px)');
});

