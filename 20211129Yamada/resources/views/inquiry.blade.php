<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <title>お問い合わせ</title>
</head>

<body>
  <h1>お問い合わせ</h1>
  <!-- @if (count($errors)>0)
        <ul></ul>
    @endif -->
  <form action="/confirmation" method="POST">
    @csrf
    <div class="name">
      <h2 class="item-title">お名前<span>※</span></h2>
      <input type="text" name="name_family" action="/confirmation" method="POST">
      <input type="text" name="name_given" action="/confirmation" method="POST">
    </div>
    <div class="gender">
      <h2 class="item-title">性別<span>※</span></h2>
      <input type="radio" name="gender" value="male">男性
      <input type="radio" name="gender" value="female">女性
    </div>
    <div class="mail">
      <h2 class="item-title">メールアドレス<span>※</span></h2>
      <input type="text" name="mail">
    </div>
    <div class="address">
      <h2 class="item-title">住所<span>※</span></h2>
      <input type="text" name="address">
    </div>
    <div class="building">
      <h2 class="item-title">建物名</h2>
      <input type="text" name="building">
    </div>
    <div class="comment">
      <h2 class="item-title">ご意見<span>※</span></h2>
      <textarea name="textarea" id="" cols="30" rows="10"></textarea>
    </div>
    <button>確認</button>
  </form>
</body>

</html>
