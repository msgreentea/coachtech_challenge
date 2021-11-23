<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('share.css') }}">
  <title>内容確認</title>
</head>
<body>
  <h1>内容確認</h1>
  <table>
    <tr>
      <th><h2 class="item-title">お名前</h2></th>
      <td>{{ $->name_family }}</td>
      <td>{{ $->name_given }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">性別</h2></th>
      <td>{{ $->gender }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">メールアドレス</h2></th>
      <td>{{ $->address }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">郵便番号</h2></th>
      <td>{{ $->address }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">住所</h2></th>
      <td>{{ $->address }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">建物名</h2></th>
      <td>{{ $->building }}</td>
    </tr>
    <tr>
      <th><h2 class="item-title">ご意見</h2></th>
      <td>{{ ->textarea }}</td>
    </tr>
  </table>
  <form action="/confirmation" method="POST">
    @csrf
    <button>送信</button>
  </form>
  <form action="/" method="POST">
    @csrf
    <a href="">修正する</a>
  </form>
</body>
</html>
