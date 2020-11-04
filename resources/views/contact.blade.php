<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>presia/recruit</title>
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    @if(isset($contact['name']))
        <p>お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。</p>

    @else
        <div id="wrapper">
            <h2>お問い合わせフォーム</h2>
            <p>サービスや採用に関するお問い合わせは、こちらからお願いいたします。</p>
            <p>弊社とビジネスをご一緒頂けるパートナー企業様を募集しております。</p>
            <p>下記のフォームを入力してください。</p>
            @if(count($errors) > 0)
                <p>入力に問題があります。再度入力してください。</p>
            @endif
            <div id="main">
                <form action="/confirm" method="POST">
                        @csrf
                    <div class="form-group">
                        @error('name')
                            <tr><th>ERROR</th>
                            <td>{{$message}}</td></tr>
                        @enderror
                        <tr><td><input type="text" name="name" value="{{old('name')}}" placeholder="Name"></td></tr>
                        <!-- <tr><th>お名前: </th><td><input type="text" name="name" value="{{old('name')}}"placeholder="吉谷瞳"></td></tr> -->
                    </div>
                    <div class="form-group">
                        @error('mail')
                            <tr><th>ERROR</th>
                            <td>{{$message}}</td></tr>
                        @enderror
                        <tr><td><input type="text" name="mail" value="{{old('mail')}}" placeholder="E-mail"></td></tr>
                        <!-- <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{old('mail')}}"placeholder="〇〇〇〇@presia.co.jp"></td></tr> -->
                    </div>
                    <div class="form-group">
                        @error('tel')
                            <tr><th>ERROR</th>
                            <td>{{$message}}</td></tr>
                        @enderror
                        <tr><td><input type="text" name="tel" value="{{old('tel')}}" placeholder="Tel"></td></tr>
                        <!-- <tr><th>電話番号: </th><td><input type="text" name="tel" value="{{old('tel')}}"placeholder="09012345678"></td></tr> -->
                    </div>
                    <div class="form-group">
                        @error('contents')
                            <tr><th>ERROR</th>
                            <td>{{$message}}</td></tr>
                        @enderror
                        <tr><td><textarea name="contents" value="Message"> {{old('contents')}}</textarea></td></tr>
                        <!-- <tr><th>お問い合わせ内容: </th><td><textarea name="contents"　cols="50" rows="5"> {{old('contents')}}</textarea></td></tr> -->
                    </div>
                    <div id="send">
                        <tr><td><input type="submit" value="Send"></td></tr>
                    </div>
                </form>
            </div>
        </div>
    @endif
    
        <!-- Bootstrap javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        
    </body>
</html>
