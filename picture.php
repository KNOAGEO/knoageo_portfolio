/*
Template Name: Pictureページ
*/

<?php get_header()?>
<main>
    <div class="sec">
<section>
    <div class="title-wrapper">
<p class="title">写真</p>
    <h2 class="subtitle">Picture</h2>
</div>
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <div class="descarea-1">
    <span class="boldtitle">写真歴12年 （↑ 沖縄県南城市 ニライカナイ橋）</span><br><br>
    <p>中学の修学旅行で沖縄の美しい景色を残したかったがカメラを持っていなかった心残りで翌年デジカメを買ったのが始めたきっかけです。<br>
        朝焼け夕焼けの写真が得意です。<br>
        風景の中でも特に原生林や大自然が好きで全国の国立公園や景勝地を周っています
    </p>
    </div>
    <div class="setsec">
    <div class="descarea">
        <span class="boldtitle">機体とレンズ</span><br><hr><br>
        <p>NikonD850<br>
           NikonD7000<br><br>

            Nikkor24-70mm<br>
            Nikkor105mm （Micro）<br>
            SIGMA 18-300mm<br>
            TOKINA 11-16mm
        </p>
    </div>
    <div class="descarea">
     <img src="<?php echo get_template_directory_uri(); ?>/image/picture2.jpeg" alt="一眼レフで太陽を撮る">
    </div>
</div>
    </section>
    <hr class="light-mainbar" />
    <section>
    <p class="title-3">写真作例</p>
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
        <a href="picturelib.html"><button class="move">もっとみる➔</button></a>
    </div>
    </section>
    <hr class="light-mainbar" />
    <section>
        <p class="title-3">TEITEN</p>
            <img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="未実装です">
            <div class="descarea">
            <span class="boldtitle">タイトル入力</span><br><br>
            <p>写真は固定、定点写真が撮れたら更新</p>
            <a href="<?php echo home_url( '/' ); ?>picturelib/TEITEN"><button class="move">過去の定点写真はこちら➔</button></a>
        </div>
    </section>
</div>
</main>
<?php get_footer()?>