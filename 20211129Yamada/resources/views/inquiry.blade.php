<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/inquiry.css') }}">
    <title>お問い合わせ</title>
</head>

<body>
    <div class="container">
    <h1>お問い合わせ</h1>
    <!-- @if (count($errors)>0)
        <ul></ul>
        @endif -->
        <form class="frame" action="/confirmation" method="POST">
            @csrf
            <div class="item">
                <div class="left">
                    <h2 class="item-title">お名前<span>※</span></h2>
                </div>
                <div class="right">
                    <input class="textbox-name" type="text" name="name_family" action="/confirmation" method="POST">
                    <input class="textbox-name" type="text" name="name_given" action="/confirmation" method="POST">
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <h2 class="item-title">性別<span>※</span></h2>
                </div>
                <div class="gender-item right">
                    <input class="radio" type="radio" name="gender" value="male" checked="checked">男性
                    <input class="radio" type="radio" name="gender" value="female">女性
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <h2 class="item-title">メールアドレス<span>※</span></h2>
                </div>
                <div class="right">
                    <input type="text" name="mail">
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <h2 class="item-title">住所<span>※</span></h2>
                </div>
                <div class="right">
                    <input type="text" name="address">
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <h2 class="item-title">建物名</h2>
                </div>
                <div class="right">
                    <input type="text" name="building">
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <h2 class="item-title">ご意見<span>※</span></h2>
                </div>
                <div class="right">
                    <textarea name="textarea" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button>確認</button>
        </form>
    </div>
</body>

</html>
