<?php get_header();?>

<?php
session_start();
/* Template Name: Complete */

if(isset($_SESSION['your_submit'])) {
    $to = 'lolvgmxd@gmail.com'; //【メールアドレス】

    //ここでは 名前, 件名
    $subject = $_SESSION['your_name'] . ', ' . $_SESSION['your_subject']; //【タイトル】
    $message = $_SESSION['your_message']; //【本文】

    wp_mail($to, $subject, $message);
    session_destroy();
}
?>

<div class="complete-container">
    <div class="complete-content">
        <a href="<?php echo home_url('/'); ?>"><span>ホームへ戻る</span></a>
    </div>
</div>

<?php get_footer(); ?>




