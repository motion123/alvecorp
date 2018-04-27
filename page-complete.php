<?php get_header();?>
<!-- main -->
<div id="main">
<?php if (have_posts()) : // WordPress ループ
while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
<?php the_content(); ?>
</div>
<?php endwhile; // 繰り返し処理終了
else : // ここから記事が見つからなかった場合の処理 ?>
<div class="post">
<h2>記事はありません</h2>
<p>お探しの記事は見つかりませんでした。</p>
</div>
<?php endif; ?>
<?php
session_start();
/* Template Name: Complete */

if(isset($_SESSION['your_submit'])) {
    $to = ''; //【メールアドレス】

    //ここでは 名前, 件名
    $subject = $_SESSION['your_name'].', '.$_SESSION['your_subject']; //【タイトル】
    $message = $_SESSION['your_message']; //【本文】

    wp_mail($to, $subject, $message);
    session_destroy();
?>

<?php get_footer(); ?>
