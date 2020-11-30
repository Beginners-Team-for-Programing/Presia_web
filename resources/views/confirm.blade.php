<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
        <title>入力内容の確認</title>
    </head>
    <body>
        <div class="confirm">
            <h2 class="">入力内容の確認</h2>
            <form method="POST" action=/result>
                <input type="hidden" name="name" value={{$inputs['name']}}>
                <input type="hidden" name="mail" value=<?php echo $inputs['mail'];?> >
                <input type="hidden" name="tel" value={{$inputs['tel']}}>
                <input type="hidden" name="contents" value={{$inputs['contents']}}>
            @csrf
                <p class="title">お名前</p>
                <p class="inputText">{{ $inputs['name'] }}</p>
                <p class="title">メールアドレス</p>
                <p class="inputText">{{ $inputs['mail'] }}</p>
                <p class="title">電話番号</p>
                <p class="inputText">{{ $inputs['tel'] }}</p>
                <p class="title">お問い合わせ内容</p>
                <p class="inputText">{{ $inputs['contents'] }}</p>
                <button type="submit" value="send">送信する</button>
            </form>
            <button id="square_btn" onClick="history.back()">入力内容修正</button>
        </div>
    </body>
</html>
