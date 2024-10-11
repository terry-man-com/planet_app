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
    <div class="create-wrapper">
        <h1>惑星情報登録</h1>
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
        <form action="{{ route('planets.store') }}" method="post">
        @csrf
            <P>
                <label for="name">名前</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </P>
            <P>
                <label for="english_name">名前(英語)</label>
                <input type="text" name="english_name" id="english_name" value="{{ old('english_name') }}">
            </P>
            <P>
                <label for="radius">半径</label>
                <input type="number" name="radius" id="radius" value="{{ old('radius') }}">
            </P>
            <P>
                <label for="weight">重量</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight') }}">
            </P>
                <input type="submit" value="登録">
        </form>
        <a href="{{ route('planets.index') }}">戻る</a>
    </div>
</body>
</html>