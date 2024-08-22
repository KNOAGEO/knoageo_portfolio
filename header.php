<!DOCTYPE html>
<html lang="ja">
<head>
    <title>KNOAGEO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="knoageo portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/themestyle-sp.css" />
    <!--font awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/all.min.css">
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.gstatic.com" crossorigin />
    <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet" />
    <link rel="<?php echo get_template_directory_uri(); ?>/preconnect" href="https://fonts.googleapis.com">
    <link rel="<?php echo get_template_directory_uri(); ?>/preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>
 <div class="super_container">
<!--ヘッダーここから-->
  <header class="header">
   <div class="logoarea">
    <a href="/">
     <img src="<?php echo get_template_directory_uri(); ?>/image/KNOAGEOロゴ1.png" alt="トップページに戻る" />
 <!-- スマホ用メニューボタン -->
<div class="hamburger-menu">
  <a href="#"><img src="image/白樺.png" alt="ナビゲーションメニューを開く" onclick="document.getElementById('nav-sp').style.display = 'block'" ></a>
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
  <img class="close" src="image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
  <div class="search-box">
    <img src="image/検索アイコン.png">
    <input type="text" id="search-query" placeholder="検索ワードを入力してください...">
      <button onclick="performSearch()">検索</button>
      </div>
      <!-- 結果表示エリア -->
      <div class="results" id="search-results">
        <!-- 検索結果がここに表示されます -->
      </div>
  <span>カテゴリー</span>
   <a class="menu" href="picture.php" onclick="document.getElementById('nav-sp').style.display = 'none'">写真</a>
   <a href="illust.php" onclick="document.getElementById('nav-sp').style.display = 'none'">イラスト</a>
   <a href="weblog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">Webサイト作例</a>
   <span>その他関連</span>
   <a href="blog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">ブログ</a>
   <a href="originalsite.php" onclick="document.getElementById('nav-sp').style.display = 'none'">制作サイト</a>
   <span>自己紹介</span>
   <a href="profile.php" onclick="document.getElementById('nav-sp').style.display = 'none'">自己紹介をよりくわしく</a>
   <span>扱うスキル一覧</span>
   <span>作例ライブラリ</span>
   <a href="picturelib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">写真</a>
   <a href="picturelib.php#teiten" onclick="document.getElementById('nav-sp').style.display = 'none'">TEITEN（定点観測）</a>
   <a href="illustlib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">イラスト</a>
   <a href="webloglib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">Webサイト</a>
   <a href="blog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">ブログ</a>
   <a href="originalsite.php" onclick="document.getElementById('nav-sp').style.display = 'none'">制作サイト</a>
   <span>お問い合わせ</span>
   <a href="contact.php" onclick="document.getElementById('nav-sp').style.display = 'none'">お問い合わせフォームへ</a>
 </nav>
</div>
<hr class="light-topbar" />
</header>
<!--ヘッダー終わり-->