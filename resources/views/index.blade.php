<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>株式会社 Presia|関わるすべての人を幸せに</title>
  　
  <meta name=”description” content=”飲食店経営から飲食店のコンサル、WEBの制作など、様々な事業であらゆる可能性を追求し続ける”>
  <!-- header nav -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/header-nav.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Page Specific CSS -->
  <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
  <link rel="stylesheet" href="{{ asset('css/access.css') }}">
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/history.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainvisual.css') }}">
  <link rel="stylesheet" href="{{ asset('css/privacy.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link rel="stylesheet" href="{{ asset('css/recruit.css') }}">
  <link rel="stylesheet" href="{{ asset('css/service.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css/index.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> -->


</head>

<body>

  <!--
        8888888bo.
        888'  '88P
        888    888
        888.  .888                                            o888
        8888888Pd'    oooo d8b     .od88bo.      .d8888b.
        888           "888""8P    8'      '8     88'          oooo     .od88bo.d8b
        888            888        P'88888P'       Y'888b.     "888     8'     '88
        888            888        bY.                  88      888     8       88
        888            888         Y888888P'     .d88888P      888     Y'88888P"Y8b.


        私たちと一緒に、事業やサービスを作りませんか？　  https://www.presia.co.jp/recruit/
    -->
  <div class="presia-top">

    <div class="back-button">
      <p class="pagetop"><a href="#wrap">▲</a></p>
    </div>
    <div class="res-logo">
      <a href="/"><img id="logo" alt="presia-rogo" src="{{ asset('images/presia.png') }}"></a>
    </div>
    <div id="res-nav">
      <!-- <div class="logo">
      <a href="/"><img id="logo" alt="presiarogo" src="{{ asset('images/presia.png') }}"></a>
    </div> -->
      <div class="navigation">
        <ul>
          <li><a href='#header'>TOP</a></li>
          <li><a href='.vision'>ABOUT</a></li>
          <li><a href='.service'>SERVICE</a></li>
          <li><a href='.recruit'>RECRUIT</a></li>
          <li><a href='.campany'>PROFILE</a></li>
          <li><a href=".access">ACCESS</a></li>
          <li><a href='.contact'>CONTACT</a></li>
        </ul>
      </div>
      <div class="res-sns">
        <a href='https://ja-jp.facebook.com/presia.co.jp'><img src="images/fb.png"><a>
      </div>
    </div>

    <div id="header">
      <div class="logo">
        <a href="/"><img id="logo" alt="presia-rogo" src="{{ asset('images/presia.png') }}"></a>
      </div>
      <div class="nav">
        <ul>
          <li><a href='#header'>TOP</a></li>
          <li><a href='.vision'>ABOUT</a></li>
          <li><a href='.service'>SERVICE</a></li>
          <li><a href='.recruit'>RECRUIT</a></li>
          <li><a href='.campany'>PROFILE</a></li>
          <li><a href=".access">ACCESS</a></li>
          <li><a href='.contact'>CONTACT</a></li>
        </ul>
      </div>
      <div class="sns">
        <a href='https://ja-jp.facebook.com/presia.co.jp'><img src="images/fb.png"><a>
      </div>
    </div>
    <img id="open-button" src="images/menu-open.png">
    　<img id="close-button" src="images/menu-close.png">

    <div class="mainvisual">
      <!-- <video autoplay loop>
        <source src="{{ asset('movie/iStock.mp4') }}" type="video/" width="100%" height="700px">
      </video> -->

      <video src="{{ asset('/movie/mainvisual.mp4') }}" muted autoplay playline loop width="100%"
        heigth="300px"></video>

      <!-- <img src="{{ asset('/images/mainvisual.jpg') }}" alt="mainvisual"> -->
      <div class="mainvisual-text">
        <h2>Make All People Happy</h2>
        <p>関わるすべての人を幸せに</p>
      </div>
    </div>

    <div class="vision">
      <div class="v-text">
        <h2>ABOUT US</h2>
        <p class="about">私たち株式会社プレジアは創業当初より、事業を通じて<br>
          『関わる全ての人を幸せにすること』＝「世の中をより良くすること」を目指しています。<br>
          クライアント、社員、その家族、全ての人の「幸せ」を実現するために、<br>
          既存の形に捉われない、過去の成功に満足しない、<br>
          この精神で常に現状に疑問を持ち、日々挑戦していきます。</p>
        <p class="res-about">私たちプレジアは、事業を通じて<br>
          『関わる全ての人を幸せにすること』<br>
          「世の中をより良くすること」<br>
          を目指し、日々挑戦し続けます</p>
      </div>
    </div>

    <div class="service">
      <h2>SERVICE</h2>
      <div class="service-1">
        <div class="service-contents order2">
          <h3>飲食店経営</h3>
          <p>
            都心の港区を中心に飲食店経営を行っております。
            日本中の強豪がひしめき合う街、六本木。新規参入の難易度は非常に高く、
            また、参入しても１年と持たないお店が大半を占める中で、
            私たちプレジアは、１０年間直営店を運営してきております。
            世の中に必要とされる飲食事業を創造し続けております。
          </p>
        </div>
        <div class="service-img order1">
          <img src="{{ asset('/images/restaurant.jpg') }}" alt="restaurant-management">
        </div>
      </div>
      <div class="service-2">
        <div class="service-img order1">
          <img src="{{ asset('/images/consul.jpg') }}" alt="consultant">
        </div>
        <div class="service-contents order2">
          <h3>飲食コンサル</h3>
          <p>
            夢を追い求める飲食店経営者を支援したい、という想いから
            長年の飲食店経営や事業経営によって蓄積させたノウハウを元に、
            店舗管理の仕組み作りからお客様サポート、人材の採用や仕入れに至るまでを一貫して提供しています。
          </p>
        </div>
      </div>
      <div class="service-3">
        <div class="service-contents order2">
          <h3>Web制作</h3>
          <p>
            『ITを通して、関わる全ての人を幸せにする』
            をテーマに、高品質なホームページ制作と丁寧なアフターサポートによって
            お客様のWEB戦略の一員として共にお仕事させていただいております。
            はじめてホームページを制作する方も、ホームページを作り変えたい方も、
            是非ご要望をお聞かせください。
          <p>
        </div>
        <div class="service-img order1">
          <img src="{{ asset('/images/web.jpg') }}" alt="WebProduction">
        </div>
      </div>
    </div>


    <div class="recruit">
      <h2>RECRUIT</h2>
      <div class="recruit-img">
        <img src="{{ asset('/images/recruit.jpg') }}" alt="recruit_2">
      </div>
      <div class="content">
        <p class="cont">私たちプレジアは、時間の制約や場所の制約等、様々な制約を超えて、今まで合わさることのなかった「個性」の組み合わせによる未来の創出を描いています。
          今まで培ってきた「個性」は、必ず活かせます。
          あなたの「個性」を使って、たくさんの幸せの創出を一緒にしませんか？
          プレジアでは経験者から未経験者、業務委託と、幅広く採用を行っています。
          小さい会社ならではの幅広い権限を生かして、思い描く理想の働き方を実現しましょう。
          弊社のメンバーと楽しく会社を作っていけるメンバーを募集します。</p>
        <p class="res-cont">プレジアでは経験者から未経験者、業務委託と、幅広く採用を行っています。
          小さい会社ならではの幅広い権限を生かして、思い描く理想の働き方を実現しましょう。</p>
      </div>
    </div>
    <div class="campany-body">
      <div class="campany">
        <div class="cam">
          <h2>PROFILE</h2>
        </div>
        <table class="campany-box">　
          <tr>
            <th>会社名</th>
            <td>株式会社プレジア</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>関澤光太</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>￥2,000,000</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>〒154-0001 東京都世田谷区池尻2-33-14 クレストビル５階</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>１０名（パート・アルバイト含む）</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>03-6413-8117</td>
          </tr>
          <tr>
            <th>受付時間</th>
            <td>平日10:00-18:00 （土日は休業）</td>
          </tr>
        </table>
      </div>
      <div class="history">
        <div class="his">
          <h2>HISTORY</h2>
        </div>
        <table class="history-box">
          <tr>
            <th>2013年10月</th>
            <td>Roppongi BAR DEN オープン</td>
          </tr>
          <tr>
            <th>2013年10月</th>
            <td>BAR　GLOSSオープン</td>
          </tr>
          <tr>
            <th>2013年10月</th>
            <td>BAR HEVENオープン</td>
          </tr>
          <tr>
            <th>2014年03月</th>
            <td>株式会社プレジア設立</td>
          </tr>
          <tr>
            <th>2015年10月</th>
            <td>東京都港区に本社移転</td>
          </tr>
          <tr>
            <th>2018年10月</th>
            <td>事業拡大に伴い、本店を東京都目黒区に移転</td>
          </tr>
          <tr>
            <th>2020年10月</th>
            <td>事業拡大に伴い、東京都世田谷区に本社移転</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="wrapper6">
      <div class="access">
        <h2>ACCESS</h2>
        <table class="access-box">
          <tr class="">
            <th class="">所在地</th>
            <td class="">〒154-0001<br> 東京都世田谷区池尻2-33-14 クレストビル５階</td>
          </tr>
          <tr class="">
            <th class="">最寄駅</th>
            <td class="">田園都市線 池尻大橋駅　徒歩３分</td>
          </tr>
        </table>
        <!-- <p>所在地：154-0001 東京都世田谷区池尻2-33-14 クレストビル５階</p>
        <p>最寄駅：田園都市線 池尻大橋駅　徒歩３分</p> -->

        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1338338467995!2d139.67986371519984!3d35.64907413934231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f4a8947ef97b%3A0xa4b90507c017fd52!2z44CSMTU0LTAwMDEg5p2x5Lqs6YO95LiW55Sw6LC35Yy65rGg5bC777yS5LiB55uu77yT77yT4oiS77yR77yU!5e0!3m2!1sja!2sjp!4v1604329490150!5m2!1sja!2sjp"
            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
          </iframe><br>
          <a
            href="https://www.google.com/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%83%97%E3%83%AC%E3%82%B8%E3%82%A2/@35.6490831,139.6798687,17z/data=!3m1!4b1!4m5!3m4!1s0x60188c7f31915555:0x225fea8d935519a6!8m2!3d35.6490831!4d139.6820574">
            詳しい地図をgooglemapで見る
          </a>
        </div>
      </div>
    </div>
    <div id="wrapper7">
      <div class="contact">
        <h2>CONTACT</h2>
        <form class="form" action="/" method="POST">
          @csrf
          <div class="form-group">
            @error('name')
            <div class="error-message">
              <p>ERROR {{$message}}</p>
            </div>
            @enderror
            <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
          </div>
          <div class="form-group">
            @error('mail')
            <div class="error-message">
              <p>ERROR {{$message}}</p>
            </div>
            @enderror
            <input type="text" name="mail" value="{{old('mail')}}" placeholder="E-mail">
          </div>
          <div class="form-group">
            @error('tel')
            <div class="error-message">
              <p>ERROR {{$message}}</p>
            </div>
            @enderror
            <input type="text" name="tel" value="{{old('tel')}}" placeholder="Tel">
          </div>
          <div class="form-group">
            @error('contents')
            <div class="error-message">
              <p>ERROR {{$message}}</p>
            </div>
            @enderror
            <textarea name="contents" value="{{old('contents')}}" placeholder="Message"></textarea>
          </div>
          <div class="checkbox">
            @error('checkbox')
            <div class="error-message">
              <p>ERROR {{$message}}</p>
            </div>
            @enderror
            <input type="checkbox" name="checkbox">
            <label class="">確認画面は表示されません。よろしければチェックを入れてください。</label>
          </div>
          <div id="send">
            <input type="submit" class="btn shadow sendbtn" value="Send">
          </div>
          @if(isset($contact['name']))
          <div class="result">
            <p>☑送信しました。お問い合わせありがとうございました。</p>
          </div>
          @endif
        </form>
      </div>
    </div>


    <div class="footer">
      <div class="footer-text">
        <a href="/privacy/">プライバシーポリシー</a><br>
        <small>©︎ 2020 PRESIA Co.,Ltd.</small>
      </div>
      <!-- </div> -->
    </div>
    <!-- wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>

    <!-- Bootstrap javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Page Specific javascript -->
    <!-- jqueryのリンクを読み込んだ後にこっちを読み込まないと動作しなくなる -->
    <script src="{{ asset('js/index.js') }}"></script>
    <!-- 動画を再生 -->
    <script src="{{ asset('js/covervid.min.js') }}"></script>
  </div>

</body>

</html>