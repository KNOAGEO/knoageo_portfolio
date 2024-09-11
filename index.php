<?php get_header()?>
<!--メイン-->
<main>
  <!--カバー-->
  <div class="cover">
    <img src="<?php echo get_template_directory_uri(); ?>/./image/D70_4509.jpg" />
  </div>
  <div class="sec">
  <div class="main-wrapper"> <!--スマホはメイン記事・PCは左の本記事-->
  <section>
    <div class="category-wrapper">
    <div class="title-wrapper-news">
      <div class="title-2">お知らせ</div>
      </div>
      <div class="descarea-3">
      <div class="description">
        <p>現在メンテナンス中です<br>(リサーチ機能・ブログ＆Webサイトページ実装中)</p>
      </div>
      <div class="date">2024.5.5</div>
    </div>
    </div>
  </section>
  <!-- カテゴリ枠 -->
  <!--写真-->
  <section class="picture-cor">
    <hr class="light-mainbar" />
    <div class="title-wrapper">
    <p class="title">写真</p>
    <p class="subtitle">Picture</p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/image/top-picture1.jpg">
    <div class="category-mainwrapper">
     <div class="flex-box">
      <div class="img-name">
        <p>春日山の朝景色</p>
      </div>
      <div class="commentarea">
        <div class="subcomment">NikonD850 Nikkor24-70mm f2.8</div>
          <div class="date">2024.5.5</div>
        </div>
      </div>
        <div class="descarea">
          <p>自然・伝統的な景色を主に撮っています<br>目覚め・静かな情熱を<br>感じさせる一瞬が好きです</p><br>
          <p>使用機種<br>＊Nikon D850<br>＊Nikon D7000</p>
        <a href="<?php echo home_url( '/' ); ?>picture/">
        <button class="move">もっとみる➔</button></a>
        </div>
    </div>
  </section>

   <!--イラスト-->
   <section class="illust-cor">
    <hr class="light-mainbar" />
    <div class="title-wrapper">
    <p class="title">イラスト</p>
      <p class="subtitle">Illustration</p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png">
    <div class="category-mainwrapper">
    <div class="flex-box">
      <div class="img-name">
        <p>にほんかもしか</p>
      </div>
      <div class="commentarea">
        <div class="subcomment">にほんかもしか</div>
        <div class="date">2024.5.5</div>
        </div>
        </div>
          <div class="descarea">
            <p>動物・キャラクター・想像画<br>デジタルイラスト中心で描いています</p><br>
            <p>使用ソフト<br>＊ibisPaintX<br>＊Photoshop/Illustrator<br>＊CLIP STUDIO PAINT</p>
          <a href="<?php echo home_url( '/' ); ?>illustration/">
          <button class="move">もっとみる➔</button></a>
          </div>
      </div>
  </section>
  <!--Webサイト作例-->
  <section class="web-cor">
    <hr class="light-mainbar" />
    <div class="title-wrapper">
    <p class="title">Webサイト</p>
      <p class="subtitle">Website log</p>
      </div>
      <div class="slide">
      <ul class="slider">
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img01"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img02"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/comming soonイラスト.png" alt="img03"></li>
      </ul>
    </div>
    <div class="category-mainwrapper">
    <div class="pc-p-desc">
      <p>【得意なコンセプト】<br>ナチュラル・シンプル・モダン</p><br>
      <!-- 制作物が出来てから
      <p>ご依頼をもとに制作した作品です</p>
      <span style="color: rgba(255, 168, 109, 0.829);">※掲載に関しては依頼元の許可をいただいております</span><br>
      <p>Webサイト制作は随時受け付けていますので<br>ご相談・ご依頼はお問い合わせフォームまでお願いいたします</p>
      </div>
      <div class="descarea">
        <h2>使用用語・環境</h2>
        <h3>OS:</h3>
        <p>Windows/Mac(iOS)</p><br><h3>Server:</h3><p>Lunix</p><br>
        <h3>言語:</h3>
        <p>HTML・CSS・JavaScript・php・jQuery</p><br>
        <h3>その他環境:</h3>
        <p>GitHub・VScode・WordPress・Local flywheel・Docker・Figma・MySQL・Adobe Photoshop・Illustrator</p>
        <a href="<?php echo home_url( '/' ); ?>weblog/">-->
        <button class="move">もっとみる➔</button></a>
      </div>
    </div>
  </section>
  </div>     <!-- main-wrapper close -->

  <!--その他関連--※中身がまだないため実装はあと。カルーセルに沿って説明切替を実装
  <section class="other-cor">
    <hr class="light-mainbar" />
    <div class="title-wrapper">
    <p class="title">その他関連</p>
      <p class="subtitle">Other</p>
    </div>
    <div class="slide">
      <ul class="slider">
        <li><img src="image/comming soonイラスト.png" alt="img01"></li>
        <li><img src="image/comming soonイラスト.png" alt="img02"></li>
        <li><img src="image/comming soonイラスト.png" alt="img03"></li>
      </ul>
    </div>
    <div class="category-wrapper">
      <div class="descarea">
        <p>カルーセルに沿って説明</p>
        <a href="library.php#blog">
        <button class="move">もっとみる➔</button></a>
      </div>
    </div>
  </section>-->
  
  <!-- サイドバー　※PC版のみ※ -->
   <aside>
 <div class="sidebar">
  <!--自己紹介-->
  <section class="profile-cor">
    <div class="title-wrapper-profile">
    <p class="title-3">自己紹介</p>
    <p class="subtitle-pc-profile">Profile</p>
   </div>
    <img src="<?php echo get_template_directory_uri(); ?>/image/myprofile3.jpg">
    <div class="category-wrapper">
      <div class="descarea-3">
        <div class="title-wrapper-profilename">
          <p class="title-4">森 真由美</p>
          <p class="subtitle-pc-profile2">Mayumi Mori</p>
          </div>
        <hr><br>
        <div class="desclist-left">
        <p>＊出身：佐賀県出身/愛知県在住</p>
        <p>＊趣味：写真撮影・絵描き・旅行・スノーボード・国立公園/道の駅/温泉巡り</p>
        <p>＊職業: soon</p>
        <p>＊特記: 聴覚に障がいがあります</p>
      </div>
        <hr>
        <!-- SNSアイコン -->
         <div class="linkarea">
        <div class="sns-area">
       <div class="sns-icon-insta">
      <a href="https://www.instagram.com/mayu_knoageo7?igsh=MTllM2FiZ2J6dHM4ag%3D%3D&utm_source=qr"><img src="<?php echo get_template_directory_uri(); ?>/image/Instagram.png" alt="instagramのリンク"></a>
      </div>
      <div class="sns-icon-threads">
      <a href="https://www.threads.net/@mayu_knoageo7"><img src="<?php echo get_template_directory_uri(); ?>/image/threads.png" alt="Threadsのリンク"></a>
      </div>
    </div>
    <div>
      <a href="<?php echo home_url( '/' ); ?>profile/">
      <button class="move">詳細はこちら➔</button></a>
    </div>
      </div> 
    </div>
  </div>
  </section>
 </div>
 </aside> <!-- サイドバー欄 close -->
</div><!-- sec　close -->
<div class="empty"></div>
</main>
<?php get_footer()?>