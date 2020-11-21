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

//マウスポインターをかざすと画像のモザイクがとれる
$(function(){
    $('.service-img').hover(function(){
        // console.log('マウスオーバー！');
        $('.service-img').css('filter','blur(0px)');
    }, function() {
        // console.log('マウスリーブ！');
        $('.service-img').css('filter','blur(50px)');
    })
});

//マウスポインターをかざすとヘッダーの文字が日本語になる
$(function(){
    $('.nav-item0').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item0').text('トップ');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item0').text('TOP');
    })
});
$(function(){
    $('.nav-item1').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item1').text('アバウト');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item1').text('ABOUT');
    })
});
$(function(){
    $('.nav-item2').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item2').text('サービス');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item2').text('SERVICE');
    })
});
$(function(){
    $('.nav-item3').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item3').text('リクルート');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item3').text('RECRUIT');
    })
});
$(function(){
    $('.nav-item4').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item4').text('カンパニー');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item4').text('COMPANY');
    })
});
$(function(){
    $('.nav-item5').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item5').text('アクセス');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item5').text('ACCESS');
    })
});
$(function(){
    $('.nav-item6').hover(function(){
        console.log('マウスオーバー！');
        $('.nav-item6').text('コンタクト');
    }, function() {
        console.log('マウスリーブ！');
        $('.nav-item6').text('CONTACT');
    })
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

