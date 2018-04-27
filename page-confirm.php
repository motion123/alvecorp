
<?php
session_start();
/* Template Name: Confirm */

if(isset($_POST['your_submit'])) {
    $_SESSION['your_name'] = $_POST['your_name'];
    $_SESSION['your_mail'] = $_POST['your_mail'];
    if($_POST['your_subject'] != ""){
        $_SESSION['your_subject'] = $_POST['your_subject'];
    }else{
        $_SESSION['your_subject'] = "件名なし";
    }
    $_SESSION['your_message'] = $_POST['your_message'];
    $_SESSION['your_submit'] = $_POST['your_submit'];
}
?>
<?php get_header();?>

<table rules="all" border="border">
    <tr>
        <th>お名前</th><td><p><?php echo htmlspecialchars($_SESSION['your_name']); ?></p></td>
    </tr>
    <tr>
        <th>メールアドレス</th><td><p><?php echo htmlspecialchars($_SESSION['your_mail']); ?></p></td>
    </tr>
    <tr>
        <th>件名</th><td><p><?php echo htmlspecialchars($_SESSION['your_subject']); ?></p></td>
    </tr>
    <tr>
        <th>お問い合わせ内容</th><td><p><?php
            $message = htmlspecialchars($_SESSION['your_message']);
            $message = str_replace(" ", "&ensp;", $message);
            $message = str_replace("　", "&emsp;", $message);
            echo nl2br($message);
        ?></p></td>
    </tr>
</table>
<center><span>
    <button class="submit" type="button" onclick="location.href='http://localhost:8888/wordpress/contact-us-2/'">修正</button>
    <button class="submit" type="button" onclick="location.href='http://localhost:8888/wordpress/complate/'">送信</button>
</span></center>
<?php get_footer(); ?>
