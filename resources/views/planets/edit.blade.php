<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="edit-wrapper">
        <h1>惑星情報編集</h1>
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
        <form action="{{ route('planets.update', $planet) }}" method="post">
            @csrf
            @method('PATCH')
            <P>
                <label for="name">名前</label>
                <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}">
            </P>
            <P>
                <label for="english_name">名前(英語)</label>
                <input type="text" name="english_name" id="english_name" value="{{ old('english_name', $planet->english_name) }}">
            </P>
            <P>
                <label for="radius">半径</label>
                <input type="number" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}">
            </P>
            <P>
                <label for="weight">重量</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight', $planet->weight) }}">
            </P>
                <input type="submit" value="更新">
        </form>
        <a href="{{ route('planets.index') }}">戻る</a>
    </div>
</body>
</html>