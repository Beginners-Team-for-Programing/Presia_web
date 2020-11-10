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