<!DOCTYPE html>
<html>
    <head>
        <!--head-->
        <meta charset="utf-8">
        <title>ソースコードのコミニュケーション|CodeCatchBall</title>

        <!--ファビコン-->
        <?php
        //echo html_tag('link', array(
        //    'rel' => 'icon',
        //    'href' => Asset::get_file('favicon.ico', 'img'),
        //));
        //?>

        <!--CSS読み込み-->
        <?//= Asset::css('style.css') ?>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">

        <!--fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!--日本語フォント-->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC:400,700&amp;subset=japanese" rel="stylesheet">

    </head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url("/")}}">Code <i class="fas fa-baseball-ball"></i> Catch Ball</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- メニューを右寄せ -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{url("/home")}}">Login</a>
                </li>
            </ul>
            <!-- フォームを削除 -->
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <p class="text-muted text-center">CodeCatchBall LittleTuber 2019 .All Rights Reserved.</p>
    </div>
</footer>

{{--script--}}
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=default&skin=sons-of-obsidian"></script>
</body>
</html>