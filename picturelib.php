/*
Template Name: Picturelibページ
*/
<?php get_header()?>
<main>
<section>
<h1 class="title">作例ライブラリ</h1>
    <h2 class="subtitle">Library</h2>
    <h1 class="title-blue">写真</h1>
    <h2 class="subtitle">photograph</h2>
    <div class="descarea">
        <h1 class="title">写真作例</h1>
        <!-- さらに表示のプル -->
        <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    </div>
    <div class="descarea">
        <h1 class="title">TEITEN作例</h1>
        <!-- さらに表示のプル -->
        <hr style="border: 1px solid white;" />
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/image/picture1.jpg">
    </div>  
</section>

</main>
<?php get_footer("custom1")?>