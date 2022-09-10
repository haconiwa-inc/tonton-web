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
        <li><span class="contact-flow-num">02</span><span class="contact-flow-icon"></span><span class="contact-flow-text">確認</span></li>
        <li class="active"><span class="contact-flow-num">03</span><span class="contact-flow-icon"></span><span class="contact-flow-text">完了</span></li>
      </ul>
      <p class="contact-leadText">お問い合わせが完了しました。</p>
      <?php the_content(); ?>

       <div class="estate-buttonArea">
          <div class="estate-button estate-button--white">
            <div class="estate-buttonInner estate-buttonInner--back">
              <a href="/business/buy/lineup">
                物件一覧に戻る
              </a>
              <div class="estate-buttonArrow estate-buttonArrow--back">
              <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                <path d="M3077.281,5093.885l5.655,5.3c.775.727,1.934-.455,1.155-1.184l-4.225-3.958,12.349-.01a.839.839,0,0,0,0-1.675l-12.206.011,4.106-3.963a.827.827,0,0,0-1.154-1.184l-5.68,5.482A.856.856,0,0,0,3077.281,5093.885Z" transform="translate(-3077.043 -5086.985)" fill="#009844"/>
              </svg>
              </div>
            </div>
          </div>
          <div class="top-button top-button--green">
            <div class="top-buttonInner">
              <a href="/">
                TOPへ戻る
              </a>
              <div class="top-icon">
                <img src="<?php echo get_template_directory_uri();?>/images/common/tonton-boy.png" alt="">
              </div>
              <div class="top-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                  <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                </svg>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
  </main><!-- #main -->
  <script src="<?php echo get_template_directory_uri();?>/js/contact.js"></script>
<?php
get_footer();
