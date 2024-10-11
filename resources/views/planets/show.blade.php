<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="show-wrapper">
        <h1>惑星情報詳細</h1>
        <div class="planet-contents">
            <h4>名前：{{ $planet->name }}</h4>
            <h4>名前(英語)：{{ $planet->english_name }}</h4>
            <h4>半径：{{ $planet->radius }}</h4>
            <h4>重量：{{ $planet->weight }}</h4>
        </div>
    </div>
</body>
</html>