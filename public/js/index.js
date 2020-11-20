// 何者？
$(document).ready
(
    function()
    {
        var pagetop = $('.pagetop');
        $(window).scroll
        (
            function()
            {
                if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
                } else {
                pagetop.fadeOut();
                }
            }
        );
        pagetop.click
        (
            function()
            {
                $('body, html').animate({ scrollTop: 0 }, 500);
                return false;
            }
        );
    }
);

// 何者？
$(
    function()
    {
        $(".inview").on
            ("inview", function(event, isInView)
                {
                    if (isInView)
                    {
                        $(this).stop().addClass("is-show");
                    }
                }
            );
    }
);


//スムーススクロール 
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 900;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});



//フェードイン
$(function(){
	$(window).scroll(function (){
		$('.service-img').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight + 100){
				$(this).addClass('scrollin');
			}
		});
	});
});


$(function(){
    $('.service-img').hover(function(){
        console.log('マウスオーバー！');
        const Src = $(this).children('img').attr('src');
        console.log(Src);
        $(this).children('img').attr('src', "/images/web製作.png");
    }, function() {
        console.log('マウスリーブ！');
        $(this).children('img').attr('src', this.Src);
    }
    )
});

//左から右
$(function(){
    $(window).scroll(function (){
        $('.service-contents').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
                $(this).addClass('scrollin');
            }
        });
    });
});

//リクルートしたから上
$(function(){
    $(window).scroll(function (){
        $('.content').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
                $(this).addClass('scrollin');
            }
        });
    });
});

