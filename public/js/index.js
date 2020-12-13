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
   $('a[href^="#"]').click(function() {
     	var headerHight = 100;
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-headerHight;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


//スムーススクロール（recruit）
$(function(){
  $('a[href^="."]').click(function(){
    var speed = 900;
    var href= $(this).attr("href");
    var target = $(href == "." || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});


//マウスポインターをかざすと画像のモザイクがとれる
// $(function(){
//     $('.service-img').hover(function(){
//         // console.log('マウスオーバー！');
//         $('.service-img').css('filter','blur(0px)');
//     }, function() {
//         // console.log('マウスリーブ！');
//         $('.service-img').css('filter','blur(50px)');
//     })
// });

//マウスポインターをかざすとヘッダーの文字が日本語になる
// $(function(){
//     $('.nav-item0').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item0').text('トップ');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item0').text('TOP');
//     })
// });
// $(function(){
//     $('.nav-item1').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item1').text('アバウト');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item1').text('ABOUT');
//     })
// });
// $(function(){
//     $('.nav-item2').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item2').text('サービス');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item2').text('SERVICE');
//     })
// });
// $(function(){
//     $('.nav-item3').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item3').text('リクルート');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item3').text('RECRUIT');
//     })
// });
// $(function(){
//     $('.nav-item4').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item4').text('カンパニー');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item4').text('COMPANY');
//     })
// });
// $(function(){
//     $('.nav-item5').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item5').text('アクセス');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item5').text('ACCESS');
//     })
// });
// $(function(){
//     $('.nav-item6').hover(function(){
//         console.log('マウスオーバー！');
//         $('.nav-item6').text('コンタクト');
//     }, function() {
//         console.log('マウスリーブ！');
//         $('.nav-item6').text('CONTACT');
//     })
// });

//左から右繰り返し
$(function(){
  $(".service-contents").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("fadeInRight");
    } else {
      $(this).stop().removeClass("fadeInRight");
    }
  });
});


//serviceフェードイン繰り返し
$(function(){
  $(".service-img").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show");
    } else {
      $(this).stop().removeClass("is-show");
    }
  });
});

//リクルートしたから上
$(function(){
  $(".recruit-img").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("recruit-show");
    } else {
      $(this).stop().removeClass("recruit-show");
    }
  });
});

//画面表示した際、'error-message'クラスの中に"ERROR"という文字列が含まれている場合、お問い合わせフォームまで画面スクロール
$(function() {
  var elements = document.getElementsByClassName('error-message');
  if($(elements).is(":contains('ERROR')")){
      var p = $("#wrapper7").offset().top;
      $('html,body').animate({ scrollTop: p }, 0);
      return false;
    }
  }
);
//画面表示した際、'result'クラスの中に"送信しました。お問い合わせありがとうございました。"という文字列が含まれている場合、お問い合わせフォームまで画面スクロール
$(function() {
  var elements = document.getElementsByClassName('result');
  if($(elements).is(":contains('送信しました。お問い合わせありがとうございました。')")){
      var p = $("#wrapper7").offset().top;
      $('html,body').animate({ scrollTop: p }, 0);
      return false;
    }
  }
);

