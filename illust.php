<?php
/*
Template Name: Illustrationページ
*/
?>

<?php get_header()?>
<main>
    <div class="sec-1">
 <section>
    <div class="title-wrapper">
    <p class="title">イラスト</p>
        <p class="subtitle">Illustration</p>
    </div>
    <div class="cover-illust">
    <img src="<?php echo get_template_directory_uri(); ?>/image/illust1.jpg">
    </div>
    <div class="descarea-1">
    <span class="boldtitle">↑オリジナルキャラクター 10代</span><br><br>
    <p>人物や動物を中心に描きます<br>
    水彩や油絵のようなカラータッチが得意です<br>
    オリジナルキャラクターは設定を作って仕上げることが多いです
    </p>
    </div>
    <div class="setsec">    
<div class="descarea">
<span class="boldtitle">描く環境</span><br><hr><br>
    <p>下書きは紙、仕上げはデジタルイラストです<br>
                ipad&ペンシル、PCはWacomのペンタブ<br>
                複数端末でも描けるibisPaintXをメインとして使っています<br>
                現在Photoshopでイラスト勉強中です<br><br>
                <br>
                ＊ibisPaintX<br>
                ＊Adobe Photoshop<br>
                ＊CLIP STUDIO PAINT
            </p>
        </div>
        <div class="descarea-2">
            <ul class="sns-area">
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/アイビスロゴ.png" alt="ibispaintx"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/クリップスタジオ.png" alt="clipstudio"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/フォトショップ.png" alt="clipstudio"></li>
            </ul>
        </div>
        </div>
        </section>
        <hr class="light-mainbar" />
        <section>
        <p class="title-3">イラスト作例</p>
        <div class="slide">
        <ul class="slider">
        <figure>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/にほんかもしか.png" alt="にほんかもしか"></li>
        <figcaption class="desc-slide"><span class="boldtitle">にほんかもしか</span><br><br>
            <p>Web素材用、ibispaintX 厚塗り
            </p></figcaption>
      </figure>
      <figure>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/illust3.png" alt="ハイエナ"></li>
        <figcaption class="desc-slide"><span class="boldtitle">ハイエナ</span><br><br>
            <p>Web素材用、ibispaintX 厚塗り
            </p></figcaption>
      </figure>
        <figure>  
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img03"></li>
        <figcaption class="desc-slide"><span class="boldtitle">comming soon</span><br><br>
            <p>10月に追加予定:Photoshopで描く夕暮れ月の丘風景
            </p></figcaption>
        </figure>
            </ul>
        </div>
<!--作品が増え次第公開
            <a href="<?php echo home_url( '/' ); ?>/illustlib/"><button class="move">もっとみる➔</button></a>
       --> </div>
 </section>
</div>
</main>
<?php get_footer()?>