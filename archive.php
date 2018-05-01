<?php
/**
 * Created by IntelliJ IDEA.
 * User: tomino
 * Date: 18/04/30
 * Time: 13:36
 */
?>
<?php get_header(); ?>
<!-- main -->
<div id="main">
    <?php if (have_posts()) : // WordPress ループ
        while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                <div class="post-meta">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                </div>
                <?php the_content(); ?>
            </div>
        <?php endwhile; // 繰り返し処理終了
    else : // ここから記事が見つからなかった場合の処理 ?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; // WordPress ループ終了 ?>

    <!-- pager -->
    <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('« PREV'); ?></div>
            <div class="alignright"><?php previous_posts_link('NEXT »'); ?></div>
        </div>
    <?php endif; ?>
    <!-- /pager -->

    <?php get_footer(); ?>

