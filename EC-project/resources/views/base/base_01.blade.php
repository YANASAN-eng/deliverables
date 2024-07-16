<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <!-- 独自のcss -->
         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         <!-- 独自のjs -->
          <script type="text/javascript" src ="{{ asset('js/main.js') }}"></script>
        <!-- boot strap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <nav>
                <!-- TO DO:logo画像が入る -->
                <a href="" id="logoBlock">
                    <img src="{{ asset('img/zunda_face.jpg') }}" alt="" id="headerLogo" width="125" height="52">
                </a>
                <ul>
                    <!-- お知らせ -->
                    <li>
                        <a href=""><span>お知らせ</span></a>
                    </li>
                    <!-- TO DO: 会社概要リンク -->
                    <li>
                        <div id="about" class="navWithIndent">
                            <span>バッカススタジオについて</span>
                            <div class="">
                                <a href=""><span>ストーリー</apan></a>
                                <a href=""><span>遊び方について</apan></a>
                                <a href=""><span>お客様の声</span></a>
                                <a href=""><span>シリーズ</span></a>
                            </div>
                        </div>
                    </li>
                    <!-- TO DO:　会社情報 -->
                    <li>
                        <div id="companyInfo" class="navWithIndent">
                            <span>会社情報</span>
                            <div class="navIndent">
                                <a href=""><span>会社概要</span></a>
                                <a href=""><span>目指す場所</span></a>
                            </div>
                        </div>
                    </li>
                    <li><a href=""><span></span></a></li>
                    <li><a href=""><span></span></a></li>
                    <li><a href=""><span></span></a></li>
                </ul>
                <a href=""></a>
                <!-- hambureger menu -->
                <div id="hamburgerBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>
    </body>
</html>