<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonton-web-theme
 */
get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/contact.css" media="screen" >
  <main id="primary" class="site-main">
  <div class="contact-contents">
    <div class="title-area">
      <h2 class="title">
        <p>お問い合わせ</p>
        <span>contact</span>
      </h2>
    </div>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li><a href="/">TOP</a></li>
        <li>お問い合わせ</li>
      </ul>
      <ul class="contact-flow">
        <li><span class="contact-flow-num">01</span><span class="contact-flow-icon"></span><span class="contact-flow-text">入力</span></li>
        <li class="active"><span class="contact-flow-num">02</span><span class="contact-flow-icon"></span><span class="contact-flow-text">確認</span></li>
        <li><span class="contact-flow-num">03</span><span class="contact-flow-icon"></span><span class="contact-flow-text">完了</span></li>
      </ul>
      <p class="contact-leadText">入力内容をご確認の上、「送信する」ボタンを押してください。</p>
      <?php the_content(); ?>
    </div>
  </div>
  </main><!-- #main -->
  <script src="<?php echo get_template_directory_uri();?>/js/contact.js"></script>
<?php
get_footer();
