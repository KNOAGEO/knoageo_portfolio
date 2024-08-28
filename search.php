<div class="searcharea">
<h1><?php the_search_query(); ?> の検索結果</h1>
    <div class="close-1">
    <img src="<?php echo get_template_directory_uri(); ?>/image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
    </div>
        <?php
        if (have_posts() && get_search_query()) : 
            while (have_posts()) :
            the_post();
            get_template_part( 'template-parts/post/content', 'excerpt' );
        endwhile;
        ?>

        <?php else : ?>
            <div class="col-full">
                <div class="wrap-col">
                    <p>検索キーワードに該当する記事がありませんでした。</p>
                </div>
            </div>
        <?php endif; ?>
</div>