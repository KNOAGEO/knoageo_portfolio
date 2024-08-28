/*
Template Name: Libraryページ
*/
<?php get_header()?>
<main>
<section>
<h1 class="title">作例ライブラリ</h1>
    <h2 class="subtitle">Library</h2>
    <div class="descarea">
        <h1 class="title">写真作例</h1>
        <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <a href="<?php echo home_url( '/' ); ?>/picturelib">
    <button class="move">もっとみる➔</button></a>
    <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <h1 id="teiten" class="title-blue">TEITEN作例</h1>
    <a href="<?php echo home_url( '/' ); ?>/picturelib/teiten">
    <button class="move">もっとみる➔</button></a>
    </div>
    <hr class="light-mainbar" />
    <div class="descarea">
        <h1 class="title">イラスト作例</h1>
        <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <a href="<?php echo home_url( '/' ); ?>/illustrib">
    <button class="move">もっとみる➔</button></a>
    <hr style="border: 1px solid white;" />
    </div>
    <hr class="light-mainbar" />
    <div class="descarea">
        <h1 class="title">Webサイト作例</h1>
        <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <a href="<?php echo home_url( '/' ); ?>/webloglib">
    <button class="move">もっとみる➔</button></a>
    </div>
    <hr class="light-mainbar" />
    <div class="descarea">
        <h1 id="other" class="title">その他関連</h1>
        <hr style="border: 1px solid white;" />
        <h1 class="title-blue">ブログ一覧</h1>
        <a href="<?php echo home_url( '/' ); ?>/blog">
    <button class="move">もっとみる➔</button></a>
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <p>北海道の5つの国立公園を周りました
    </p>
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <p>利尻礼文サロベツ国立公園は50周年を迎えました
    </p>
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <p>令和6年6月25日、国立公園35か所目となる「日高山脈襟裳十勝国立公園」が誕生！
    </p>
    <hr style="border: 1px solid white;" />
    <h1 class="title-blue">制作サイト一覧</h1>
    <ul class="slider">
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img01"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img02"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img03"></li>
      </ul>
      <div class="descarea">
        <p>カルーセルに沿って説明</p>
      </div>
      <a href="<?php echo home_url( '/' ); ?>/originalsite">
      <button class="move">もっとみる➔</button></a>
    </div>
    </section>
</main>
<?php get_footer("custom2")?>