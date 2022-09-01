<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tonton-web-theme
 */

get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/news.css" media="screen" >
  <main id="primary" class="site-main">
    <div class="news-detail">
      <div class="title-area">
        <h2 class="title">
          <p>お知らせ</p>
          <span>information</span>
        </h2>
      </div>
      <div class="news-detail-wrapper wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/news/">お知らせ一覧</a></li>
          <li><?php the_title(); ?></li>
        </ul>

        <div class="news-detail-content">
          <div class="news-detail-tags news-tags-brown">ニュース</div>
          <div class="news-detail-title">
            <?php the_title(); ?>
          </div>
          <div class="news-detail-description">
            <?php the_content(); ?>
          </div>
          <div class="news-detail-button-wrapper">

            <div class="news-detail-button-prev">
              <a href="/news/">
                <div class="news-detail-button">
                  お知らせ一覧に戻る
                </div>
              </a>
            </div>
            <div class="news-detail-button-top">
              <div class="news-detail-icon">
                <img src="<?php echo get_template_directory_uri();?>/images/news/character-news-1.png" alt="">
              </div>
              <a href="/">
                <div class="news-button-top">
                  TOPへ戻る
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- #main -->

<?php
get_footer();
