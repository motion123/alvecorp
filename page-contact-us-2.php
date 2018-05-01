<?php
session_start();
/* Template Name: Contact */
?>
<?php get_header();?>

<section>
  <div class="contact-container">
    <form class="contact-form" action="<?php echo home_url('/confirm'); ?>" method="post">
      <div class="contact-content">
        <h4 class="contact-header">お名前</h4>
        <div class="contact-input-box">
          <input type="text" name="your_name" required class="contact-input"/>
        </div>
      </div>
      <div class="contact-content">
        <h4 class="contact-header">会社名</h4>
        <div class="contact-input-box">
          <input type="text" name="your_company_name" class="contact-input"/>
        </div>
      </div>
      <div class="contact-content">
        <h4 class="contact-header">メールアドレス</h4>
        <div class="contact-input-box">
          <input type="email" name="your_mail" class="contact-input"/>
        </div>
      </div>
      <div class="contact-content">
        <h4 class="contact-header">電話番号</h4>
        <div class="contact-input-box">
          <input type="tel" name="your_phone" class="contact-input"/>
        </div>
      </div>
      <div class="contact-content">
        <h4 class="contact-header">お問い合わせ件名</h4>
        <div class="contact-input-box">
          <input type="tel" name="your_subject" class="contact-input"/>
        </div>
      </div>
      <div class="contact-content">
        <h4 class="contact-header">お問い合わせ内容</h4>
        <div class="contact-input-box">
          <textarea type="text" cols="20" name="your_message" class="contact-textarea"></textarea>
        </div>
      </div>
      <div class="contact-submit contact-content">
        <input type="submit" name="your_submit" value="確認画面へ">
      </div>
    </form>
  </div>
</section>

<?php get_footer(); ?>
