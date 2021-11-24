<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/confirmation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
    <title>内容確認</title>
</head>
<body>
    <div class="container frame">
        <h1>内容確認</h1>
        <table>
        <tr>
            <th><h2 class="item-title">お名前</h2></th>
            <td>名字</td>
            <td>名前</td>
            {{-- <td>{{ $item->name_family }}</td> --}}
            {{-- <td>{{ $item->name_given }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">性別</h2></th>
            <td>男</td>
            {{-- <td>{{ $items->gender }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">メールアドレス</h2></th>
            <td>msgreentea8@gmail.com</td>
            {{-- <td>{{ $items->mail }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">郵便番号</h2></th>
            <td>111-1111</td>
            {{-- <td>{{ $items->zip_code }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">住所</h2></th>
            <td>大阪府大阪市</td>
            {{-- <td>{{ $items->address }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">建物名</h2></th>
            <td>ビル</td>
            {{-- <td>{{ $items->building }}</td> --}}
        </tr>
        <tr>
            <th><h2 class="item-title">ご意見</h2></th>
            <td>コメントコメントコメントコメントコメント</td>
            {{-- <td>{{ $items->textarea }}</td> --}}
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
    </div>
</body>
</html>
