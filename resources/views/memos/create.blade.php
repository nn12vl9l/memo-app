<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>memo create</title>
</head>
<body>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>新規登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('memos.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            {{-- <input type="text" name="title" id="title"> --}}
            {{-- oldは登録を押してエラーが出た際に入力した内容が消えないようにするためのコード --}}
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            {{-- <textarea name="body" class="body" id="body"></textarea> --}}
            <textarea name="body" class="body" id="body">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="登録">
    </form>
</body>
</html>
