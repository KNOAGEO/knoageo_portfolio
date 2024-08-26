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
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet" />
    <!-- slick(カルーセル) -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- リセットcss -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <?php wp_head(); ?>
  </head>
  <body>
<!--ヘッダーここから-->
  <header>
    <div class="navarea">
   <a href="top.php" id="logo"><div class="logoarea"><img src="image/KNOAGEOロゴ1.png" alt="トップページに戻る" /></div></a>

 <!-- スマホ用メニューボタン -->
<div class="hamburger-menu">
  <a href="#"><img src="image/白樺.png" alt="ナビゲーションメニューを開く" onclick="document.getElementById('nav-sp').style.display = 'block'" ></a>
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
  <img src="image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
  </div>
  <div class="search-box">
    <input type="text" id="search-query" placeholder="検索ワードを入力してください...">
    <div class="search-icon">
    <img src="image/検索アイコン.png" alt="検索" onclick="performSearch()">
      </div>
      <!-- 結果表示エリア -->
      <div class="results" id="search-results">
        <!-- 検索結果がここに表示されます -->
      </div>
    </div>
  <div class="category">カテゴリー</div>
    <a class="menu" href="picture.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真</a>
    <a class="menu" href="illust.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラスト</a>
    <a class="menu" href="weblog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト作例</a>
   <div class="category">その他関連</div>
   <a class="menu" href="blog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
   <a class="menu" href="originalsite.php" onclick="document.getElementById('nav-sp').style.display='none'">＊制作サイト</a>
   <div class="category">自己紹介</div>
   <a class="menu" href="profile.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊自己紹介をよりくわしく</a>
   <div class="category">扱うスキル一覧</div>
   <!-- プルボタン -->
   <i class="fas fa-sort-down"></i>
   <div>
     <!-- photoshop -->
    <!-- Illustrator -->
     <!-- ibispaint -->
      <img src="image/vscode.png">
      <img src="image/docker.png">
      <img src="image/github.png">
      <img src="image/Figma.png">
   </div>
   <div class="category">作例ライブラリ</div>
   <a class="menu" href="picturelib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真</a>
   <a class="menu" href="picturelib.php#teiten" onclick="document.getElementById('nav-sp').style.display = 'none'">∟TEITEN（定点観測）</a>
   <a class="menu" href="illustlib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラスト</a>
   <a class="menu" href="webloglib.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト</a>
   <a class="menu" href="blog.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
   <a class="menu" href="originalsite.php" onclick="document.getElementById('nav-sp').style.display = 'none'">＊制作サイト</a>
   <div class="category">お問い合わせ</div>
   <a class="menu" href="contact.php" onclick="document.getElementById('nav-sp').style.display = 'none'">∟お問い合わせフォームへ</a>
 </nav>
<hr class="light-topbar" />
</header>