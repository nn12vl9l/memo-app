<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo index</title>
</head>
<body>
    <h1>MEMO</h1>
    <ul>
        @foreach ($memos as $memo)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="{{ route('memos.show', $memo) }}">{{ $memo->title }}</a></li>
        @endforeach
    </ul>

    <button onclick="location.href='/memos/create'">投稿する</button>
    {{-- <a href="/memos/create">投稿する</a> --}}
</body>
</html>
