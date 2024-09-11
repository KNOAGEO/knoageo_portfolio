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
    <span class="boldtitle">イラスト歴9年 （↑オリジナルキャラクター 10代）</span><br><br>
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
                Photoshopでのイラスト練習をしているところです<br><br>
                <br>
                ＊ibisPaintX<br>
                ＊Adobe Photoshop<br>
                ＊CLIP STUDIO PAINT
            </p>
        </div>
        <div class="descarea-2">
            <img src="アイコンたちを載せる" alt="アイコン">
        </div>
        </div>
        </section>
        <hr class="light-mainbar" />
        <section>
        <p class="title-3">イラスト作例</p>
        <div class="slide">
        <ul class="slider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img01"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img02"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img03"></li>
            </ul>
        </div>
        
        <div class="descarea">
            <span class="boldtitle">タイトル入力</span><br><br>
            <p>※カルーセルに沿ってタイトルと撮影情報（簡易に）＋説明文に切替え、カルーセルに載せるものは最新順
            </p>
            <a href="<?php echo home_url( '/' ); ?>/illustlib/"><button class="move">もっとみる➔</button></a>
        </div>
 </section>
</div>
</main>
<?php get_footer()?>