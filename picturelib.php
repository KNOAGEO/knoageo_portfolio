<?php
/*
Template Name: Picturelibページ
*/
?>
<?php get_header()?>
<main>
<section>
<div class="title-wrapper">
<h1 class="title">作例ライブラリ</h1>
    <h2 class="subtitle">Library</h2>
</div>
<div class="title-bluearea">
    <h1 class="title-small">写真</h1>
    <h2 class="subtitle">photograph</h2>
    <hr class="light-shortbar" />
    </div>
    <div class="empty"></div>
        <h1 class="title">写真作例</h1>
        <!-- さらに表示のプル -->
        <hr style="border: 1px solid white;" />
    <ul><div class="flex-box">
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    </div></ul>
    <div class="empty"></div>
    <hr class="light-mainbar" />
        <h1 class="title">TEITEN作例</h1>
        <!-- さらに表示のプル -->
        <hr style="border: 1px solid white;" />
     <ul><div class="flex-box">
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg"></li>
    </div></ul>
    <div class="empty"></div>
</section>

</main>
<?php get_footer("custom1")?>