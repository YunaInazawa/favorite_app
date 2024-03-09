<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Youtube</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="index">
    <div class="main">
        <div class="header">
            <div class="header__title">
                <h1 class="header__title__main">
                    Youtube Title List;
                </h1>
                <p class="header__title__sub">
                    This is Youtube Title GET;
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content__body">
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <div class="content__body__videos">
                        <p>
                            {{ $i++ }}. {{ $item->snippet->title }}<br />
                            <img src="{{ $item->snippet->thumbnails->high->url }}">
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
