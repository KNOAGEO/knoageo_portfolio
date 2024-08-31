<!DOCTYPE html>
<html lang="ja">
<head>
    <title>KNOAGEO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="knoageo portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットcss -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <!--font awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/all.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet" />
    <!-- slick(カルーセル) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/themestyle-sp.css" />
    <?php wp_head(); ?>
  </head>
  <body>
<!--ヘッダーここから-->
  <header>
    <div class="navarea">
   <a href="/" id="logo">
  <div class="logoarea"><img src="<?php echo get_template_directory_uri(); ?>/image/KNOAGEOロゴ1.png" alt="トップページに戻る" /></div></a>

 <!-- スマホ用メニューボタン -->
<div class="hamburger-menu">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/白樺.png" alt="ナビゲーションメニューを開く" onclick="document.getElementById('nav-sp').style.display = 'block'" ></a>
</div>
    </div>
<!-- PC用ナビ--><!--
<nav id="nav-pc">
 <div class="search-box">
  <i class="fa-solid fa-magnifying-glass"></i>
  <input type="text" id="search-query" placeholder="検索ワードを入力してください...">
    <button onclick="performSearch()">検索</button>
    </div>-->
    <!-- 結果表示エリア --><!--
    <div class="results" id="search-results">-->
      <!-- 検索結果がここに表示されます -->
       <!--
    </div>
 <span>メニュー</span>
</nav>-->

<!--スマホ用ナビ -->
<nav id="nav-sp">
  <h1 class="title">メニュー</h1>
  <hr class="light-mainbar" />
  <div class="close">
  <img src="<?php echo get_template_directory_uri(); ?>/image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
  </div>
      <form id="form" action="http://knoageo.local/" method="get">
        <div class="searcharea">
        <input id="search-query" name="s" type="text" placeholder="キーワードを入力"/>
        <button type="submit" class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/image/検索アイコン.png" alt="検索" onclick="performSearch()"></button>
      </div>
      </form>

  <div class="category">カテゴリー</div>
    <a class="menu" href="<?php echo home_url(); ?>/picture" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真</a>
    <a class="menu" href="<?php echo home_url(); ?>/illustration" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラスト</a>
    <a class="menu" href="<?php echo home_url(); ?>/weblog" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト作例</a>

  <div class="category">その他関連</div>
    <a class="menu" href="<?php echo home_url(); ?>/library/#other" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
    <a class="menu" href="<?php echo home_url(); ?>/library/#other" onclick="document.getElementById('nav-sp').style.display='none'">＊制作サイト</a>

  <div class="category">自己紹介</div>
    <a class="menu" href="<?php echo home_url(); ?>/profile" onclick="document.getElementById('nav-sp').style.display = 'none'">＊自己紹介をよりくわしく</a>
    <a href="<?php echo home_url(); ?>/library" onclick="document.getElementById('nav-sp').style.display = 'none'"><div class="category">作例ライブラリ</div></a>
    <a class="menu" href="<?php echo home_url(); ?>/library/picturelib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真</a>
    <a class="menu" href="<?php echo home_url(); ?>/library/picturelib#teiten" onclick="document.getElementById('nav-sp').style.display = 'none'">∟TEITEN（定点観測）</a>
    <a class="menu" href="<?php echo home_url(); ?>/illustlib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラスト</a>
    <a class="menu" href="<?php echo home_url(); ?>/webloglib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト</a>
    <a class="menu" href="<?php echo home_url(); ?>/blog" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
    <a class="menu" href="<?php echo home_url(); ?>/originalsite" onclick="document.getElementById('nav-sp').style.display = 'none'">＊制作サイト</a>

  <div class="category">お問い合わせ</div>
    <a class="menu" href="<?php echo home_url(); ?>/contact" onclick="document.getElementById('nav-sp').style.display = 'none'">∟お問い合わせフォームへ</a>
 </nav>
 <hr class="light-topbar" />
</header>