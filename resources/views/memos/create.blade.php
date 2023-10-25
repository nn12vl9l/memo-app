<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>memo</h1>
    <form action="/memos" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="body">内容</label>
            <input type="text" name="body">
        </p>
        <input type="submit" value="登録">
    </form>
</body>

</html>