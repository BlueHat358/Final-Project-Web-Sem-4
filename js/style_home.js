$(window).on('load', function(){
    cauroselAnimate(true);
    // console.log($('.about-us').offset().top);
});

$(window).on('scroll', function(){
    var wscroll = $(this).scrollTop();
    
    if(wscroll > 530){
        $('.image-list-wrapper').each(function(i){
            setTimeout(function(){
                $('.image-list-wrapper').eq(i).addClass('show');
            }, 350*(i+1));
        });
    }

    var contentHeight = $('.about-us').offset().top;

    var x = window.matchMedia("(min-width: 768px)");
    // console.log("now: " + wscroll);
    console.log(x.matches);
    if(x.matches){
        if(wscroll > contentHeight-800){
            console.log("ok");
            $('.tentang-kami-content').each(function(i){
                var pos = $('.tentang-kami-content').eq(i).offset().top;
                var speed = $('.tentang-kami-content').eq(i).attr('data-speed');
                var opac = $('.tentang-kami-content').eq(i).attr('data-opacity');
                // console.log(-((wscroll - contentHeight)*scrolled)/speed);
                // console.log("data-opacity: "+ opac +" | "+ (1-(pos-wscroll-200)/((Math.abs(speed)-opac)*100)));
                // console.log(0+wscroll/6400 * speed);
                // console.log((wscroll/3000)+speed);
                
                $('.tentang-kami-content').eq(i).css({
                    'transform': 'translateY('+ -(((wscroll - contentHeight+500))/speed) +'px)',
                    'opacity': 1-(pos-wscroll-200)/((Math.abs(speed)-opac)*100)
                });
            });
        }
    }

    var contactHeight = $('.contact-area').offset().top;
    if(wscroll > contactHeight - 400){
        // console.log("hidden");
        $('.content-title-fixed').css({
            'visibility': 'hidden'
        });
    }else{
        // console.log("show");
        $('.content-title-fixed').css({
            'visibility': 'visible'
        });
    }
});

function cauroselAnimate(isFirst){

    var len = $('.caurosel-content').length;
    var index = 0;

    // console.log("Length: " + len);

    $('.caurosel-content').each(function(i){
        setTimeout(function(){
            var x = $('.caurosel-content').eq(i).attr('data');
            var x1 = $('.caurosel-content').eq(i-1).attr('data');
            index++;
            // console.log("index: " + index);
            // console.log(x);
            // console.log(x1);

            $('.caurosel-content').eq(x).addClass('show');
            $('.caurosel-content').eq(x1).removeClass('show');
            
            if(index == len){
                // console.log("isRepeated");
                cauroselAnimate(true);
            }

            setTimeout(function(){
                $('.caurosel-content 22').eq(x).addClass('show');
                $('.caurosel-content h2').eq(x1).removeClass('show');
            });
        }, 6000*i);
    });
}