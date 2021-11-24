<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/inquiry.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
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
            <table>
                <tr class="item">
                    <th><h2 class="item-title">お名前<span>※</span></h2></th>
                    <td>
                        <div class="family with_example">
                            <input class="textbox-name" type="text" name="name_family" action="/confirmation" method="POST">
                            <p class="example">例）山田</p>
                        </div>
                        <div class="given with_example">
                            <input class="textbox-name" type="text" name="name_given" action="/confirmation" method="POST">
                            <p class="example">例）太郎</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">性別<span>※</span></h2></th>
                    <td>
                        <input class="radio" type="radio" name="gender" value="male" checked="checked">男性
                        <input class="radio" type="radio" name="gender" value="female">女性
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">メールアドレス<span>※</span></h2></th>
                    <td>
                        <div class="right with_example">
                            <input type="text" name="mail">
                            <p class="example">例）test@example.com</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">郵便番号<span>※</span></h2></th>
                    <td>
                        &#12306;
                        <div class="with_example">
                            <input type="text" name="zip_code">
                            <p class="example">例）123-4567</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">住所<span>※</span></h2></th>
                    <td>
                         <div class="right with_example">
                            <input type="text" name="address">
                            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">建物名</h2></th>
                    <td>
                        <div class="right with_example">
                            <input type="text" name="building">
                            <p class="example">例）千駄ヶ谷マンション101</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2 class="item-title">ご意見<span>※</span></h2></th>
                    <td>
                        <div class="right">
                            <textarea name="textarea" id="" cols="30" rows="10"></textarea>
                        </div>
                    </td>
                </tr>
            </table>
            <button>確認</button>
        </form>
    </div>
</body>

</html>
