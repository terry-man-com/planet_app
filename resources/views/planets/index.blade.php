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
    <div class="index-wrapper">
        <h1>惑星一覧</h1>
        <table>
            <tr>
                <th>名前</th>
                <th>名前(英語)</th>
                <th>半径</th>
                <th>重量</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->english_name }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td><a href="{{ route('planets.show', $planet) }}">詳細</a></td>
                <td><a href="{{ route('planets.edit', $planet) }}">編集</a></td>
                <td>
                    <div class="button-group"></div>
                    <form action="{{ route('planets.destroy', $planet) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false}"></input>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('planets.create') }}">新規投稿</a>
    </div>
</body>
</html>