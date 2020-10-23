<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOP</title>
  <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js">
  </script>
</head>

<body>
  <div class="back-button">
    <p class="pagetop"><a href="#wrap">▲</a></p>
  </div>
  <script>
  $(document).ready(function() {
    var pagetop = $('.pagetop');
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function() {
      $('body, html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });
  </script>
  <div class="nav">
    <ul>
      <li><a href='index'>Top</a></li>
      <li><a href='company'>About</a></li>
      <li><a href='pro'>Service</a></li>
      <li><a href='recruit'>Recruit</a></li>
      <li><a href='access'>Access</a></li>
      <li><a href="tel:000-1234-5678">TEL:00000000</a></li>
      <li><a href='contact'>Contact</a></li>
    </ul>
  </div>
  <div class="section">
    <div class="imgBox inview fadeIn_up">
      <img alt="presiarogo" src="{{ asset('asset/images/presia.png') }}">
    </div>
    <div class="txtBox inview fadeIn_up">
      <p>関わるすべての人を幸せに</p>
    </div>
  </div>
  <script>
  $(function() {
    $(".inview").on("inview", function(event, isInView) {
      if (isInView) {
        $(this).stop().addClass("is-show");
      }
    });
  });
  </script>



  <h2>Company</h2>
  <ul>
    <li>会社</li>
    <li>所在地</li>
    <li>役員</li>
    <li>TEL</li>
    <li>FAX</li>
    <li>設立</li>
    <li>従業員数</li>
  </ul>
  <h3>沿革</h3>
  <p>２０１９年６月</p>
  <p>２０１９年８月</p>

  <h2>Project</h2>
  <ul>
    <li>飲食店経営</li>
    <li>飲食コンサル</li>
    <li>Web制作</li>

    <h3>ACCESS</h3>
    <p>所在地：154-0001 東京都世田谷区池尻2-33-14 クレストビル５階</p>
    <p>田園都市線 池尻大橋駅　徒歩３分</p>

    <p><iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.134010762009!2d139.67986371525794!3d35.64906978020179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f4a8947ef97b%3A0xa4b90507c017fd52!2z44CSMTU0LTAwMDEg5p2x5Lqs6YO95LiW55Sw6LC35Yy65rGg5bC777yS5LiB55uu77yT77yT4oiS77yR77yU!5e0!3m2!1sja!2sjp!4v1600649480011!5m2!1sja!2sjp"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe></p>

    <a
      href="https://www.google.com/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%97%E3%83%AC%E3%82%B8%E3%82%A2/@35.6490831,139.6798687,17z/data=!3m1!4b1!4m5!3m4!1s0x60188c7f31915555:0x225fea8d935519a6!8m2!3d35.6490831!4d139.6820574">詳しい地図をgoogle
      mapで見る</a>

  </ul>

  <a href="http://127.0.0.1:8000/contact">
    <h1>お問い合わせ</h1>
  </a>


</body>

</html>