<?php
/*
Template Name: Pictureページ
*/
?>

<?php get_header()?>
<main>
    <div class="sec-1">
<section>
    <div class="title-wrapper">
<p class="title">写真</p>
    <h2 class="subtitle">Picture</h2>
</div>
 <div class="cover">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
 </div>
    <div class="descarea-1">
    <span class="boldtitle">写真歴12年 （↑ 沖縄県南城市 ニライカナイ橋）</span><br><br>
    <p>中学の修学旅行で沖縄の美しい景色を残したかったがカメラを持っていなかった心残りで翌年デジカメを買ったのが始めたきっかけです。<br>
        朝焼け夕焼けの写真が得意です。<br>
        風景の中でも特に原生林や大自然が好きで全国の国立公園や景勝地を周っています
    </p>
    </div>
    <div class="setsec">
    <div class="descarea-1">
        <span class="boldtitle">機体とレンズ</span><br><hr><br>
        <p>NikonD850<br>
           NikonD7000<br><br>

            Nikkor24-70mm<br>
            Nikkor105mm （Micro）<br>
            SIGMA 18-300mm<br>
            TOKINA 11-16mm
        </p>
    </div>
    <div class="descarea-2">
     <img src="<?php echo get_template_directory_uri(); ?>/image/picture2.jpeg" alt="一眼レフで太陽を撮る">
    </div>
</div>
    </section>
    <hr class="light-mainbar" />
    <section>
    <p class="title-3">写真作例</p>
    <div class="slide">
    <ul class="slider">
    <figure>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/黒部湖.jpg" alt="黒部湖"></li>
        <figcaption class="desc-slide"><span class="boldtitle">黒部湖</span><br><br>
        <p>中部山岳国立公園-立山黒部-<br>（富山県立山町）<br>NikonD850/2023.10.29<!--※カルーセルに沿ってタイトルと撮影情報（簡易に）＋説明文に切替え、カルーセルに載せるものは最新順--></figcaption>
      </figure>
      <figure>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/美瑛.jpg" alt="美瑛"></li>
        <figcaption class="desc-slide"><span class="boldtitle">美瑛の丘の夕景</span><br><br>
        <p>北海道美瑛市<br>NikonD7000/2019.9.15<!--※カルーセルに沿ってタイトルと撮影情報（簡易に）＋説明文に切替え、カルーセルに載せるものは最新順--></figcaption>
      </figure>
        <figure>  
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/チングルマ.jpg" alt="チングルマ"></li>
        <figcaption class="desc-slide"><span class="boldtitle">駒ヶ岳のチングルマ</span><br><br>
        <p>中央アルプス国定公園<br>（長野県駒ケ根市）<br>NikonD850/2023.9.30 <!--※カルーセルに沿ってタイトルと撮影情報（簡易に）＋説明文に切替え、カルーセルに載せるものは最新順--></figcaption>
        </figure>
        <figure>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture4.jpg" alt="奥入瀬"></li>
        <figcaption class="desc-slide"><span class="boldtitle">奥入瀬渓流「躍動」</span><br><br>
        <p>十和田八幡平国立公園<br>（青森県十和田市）<br>NikonD7000/2022.6.19 <!--※カルーセルに沿ってタイトルと撮影情報（簡易に）＋説明文に切替え、カルーセルに載せるものは最新順--></figcaption>
       </figure>
      </ul>
    </div>
    <!--TEITEN写真が30日分たまったら公開
        <a href="picturelib.html"><button class="move">もっとみる➔</button></a>-->
    </div>
    </section>
    <hr class="light-mainbar" />
    <section>
        <p class="title-3">TEITEN</p>
            <img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="未実装です">
            <div class="descarea">
            <span class="boldtitle">2024/11 OPEN</span><br><br>
            <p>本日の定点写真をお届けします</p>
<!--TEITEN写真が30日分たまったら公開
            <a href="<?php echo home_url( '/' ); ?>picturelib/TEITEN"><button class="move">過去の定点写真はこちら➔</button></a>
        --></div>
    </section>
</div>
</main>
<?php get_footer()?>