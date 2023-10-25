<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo edit</title>
</head>

<body>
    <h1>memo</h1>
    <form action="/memos/{{ $memo->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ $memo->title }}">
        </p>
        <p>
            <label for="body">内容</label>
            <input type="text" name="body" value="{{ $memo->body }}">
        </p>
        <input type="submit" value="更新">
    </form>
</body>

</html>
