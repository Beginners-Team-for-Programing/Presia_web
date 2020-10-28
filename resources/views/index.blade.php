<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOP</title>
  <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
<div class="main">
<div class="section">
       <div class="txtBox inview fadeIn_up">
           <p>関わるすべての人を幸せに</p>
           <h2>Make Everyone Happy</h2>
       </div>
       <div class="imgBox inview fadeIn_up">
           <img alt="presiarogo" src="{{ asset('asset/images/presia.png') }}">
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
  <div class="vision">
             <h2>VISION</h2>
             <p>私たち株式会社プレジアは創業当初より、事業を通じて
             『関わる全ての人を幸せにすること』＝「世の中を、より良くすること」
             を目指しています。
             クライアント、社員、その家族、全ての人の「幸せ」を実現するために
             既存の形に捉われない、過去の成功に満足しない、
             この精神で常に現状に疑問を持ち、日々挑戦していきます。
             </p>
         </div>
  <div class="container" width="900%">
    <!-- 列を垂直方向中央揃え、align-items-centerクラスを指定した例 -->
    <div class="row align-items-center">
      <!-- 3つの列の1列目 -->
      <div class="col-md" width="30%">
        <div class="">
          <div style="text-align:center;">
            <h3>飲食店経営</h3>
            <a href=""><img alt="glasses" src="{{ asset('/images/glasses.png') }}"></a>
            <p class="text-center">都心の港区を中心に飲食店経営を行っております。
                     日本中の強豪がひしめき合う街、六本木。 新規参入の難易度は非常に高く、また、参入しても１年と持たないお店が大半を占める中で、
                     私たちプレジアは、１０年間直営店を運営してきております。
                     世の中に必要とされる飲食事業を創造し続けております。</p>
            <p class="text-center">Times are changing for hamburgers.</p>
          </div>
        </div>
      </div>
      <!-- 3つの列の2列目 -->
      <div class="col-md" width="30%">
        <div class="">
          <div style="text-align:center;">
            <h3>飲食コンサル</h3>
            <a href=""><img alt="glasses" src="{{ asset('/images/glasses.png') }}"></a>
            <p class="text-center">夢を追い求める飲食店経営者を支援したい、という想いから
                      長年の飲食店経営や事業経営によって蓄積させたノウハウを元に、店舗管理の仕組み作りからお客様サポート、人材の採用や仕入れに至るまでを一貫して提供しています。</p>
            <p class="text-center">Transform the restaurant industry with IT!</P>
          </div>
        </div>
      </div>
      <!-- 3つの列の3列目 -->
      <div class="col-md" width="30%">
        <div class="">
          <h3>Web制作</h3>
          <div style="text-align:center;">
            <a href=""><img alt="glasses" src="{{ asset('/images/glasses.png') }}"></a>
          </div>
          <p class="text-center">ITを通して、関わる全ての人を幸せにする』
                     をテーマに、高品質なホームページ制作と丁寧なアフターサポートによって
                     お客様のWEB戦略の一員として共にお仕事させていただいております。
                     はじめてホームページを制作する方も、ホームページを作り変えたい方も、
                     是非ご要望をお聞かせください。
          <p>
          <p class="text-center">A website is only valuable if you create it yourself.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="campany">
    <h2>CMPANY PROFILE</h2>
    <h4>会社概要</h4>

    <table borrder="0" align="center">
      <tr>
        <td>会社名</td>
        <td>株式会社プレジア</td>
      </tr>
      <tr>
        <td>代表取締役</td>
        <td>関澤光太</td>
      </tr>
      <tr>
        <td>資本金</td>
        <td>￥2,000,000</td>
      </tr>
      <tr>
        <td>所在地</td>
        <td>〒154-0001 東京都世田谷区池尻2-33-14 クレストビル５階</td>
      </tr>
      <tr>
        <td>従業員数</td>
        <td>１０名（パート・アルバイト含む）</td>
      </tr>
      <tr>
        <td>電話番号</td>
        <td>03-0000-0000</td>
      </tr>
      <tr>
        <td>受付時間</td>
        <td>平日10:00-18:00 （土日は休業）</td>
      </tr>
    </table>
  </div>

  <div class="history">
    <h2>HISTORY</h2>
    <h4>沿革</h4>
    <table borrder="0" align="center">
      <tr>
        <td>2013年10月</td>
        <td>Roppongi BAR DEN オープン</td>
      </tr>
      <tr>
        <td>2013年10月</td>
        <td>BAR　GLOSSオープン</td>
      </tr>
      <tr>
        <td>2013年10月</td>
        <td>BAR HEVENオープン</td>
      </tr>
      <tr>
        <td>2014年03月</td>
        <td>株式会社プレジア設立</td>
      </tr>
      <tr>
        <td>2015年10月</td>
        <td>東京都港区に本社移転</td>
      </tr>
      <tr>
        <td>2018年10月</td>
        <td>事業拡大に伴い、本店を東京都目黒区に移転</td>
      </tr>
      <tr>
        <td>2020年10月</td>
        <td>事業拡大に伴い、東京都渋谷区に本社移転</td>
      </tr>
    </table>
  </div>


  <h2>Project</h2>







  <ul>
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


  <!-- Bootstrap javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

</div>

</body>

</html>
