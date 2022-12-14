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
          <div class="news-detail-tags news-tags-<?php foreach((get_the_category()) as $category) { echo $category->slug . ' ';} ?>">
          <?php 
            foreach((get_the_category()) as $category) {
              echo $category->name . ' ';
            } 
          ?>
          </div>
          <div class="news-detail-title">
            <?php the_title(); ?>
          </div>
          <div class="news-detail-date">
            <?php the_time("Y.n.j"); ?>
          </div>
          <div class="news-detail-description">
            <?php the_content(); ?>
          </div>
          <div class="news-detail-button-wrapper">

            <div class="news-detail-button-prev">
              <a href="/news/">
                <div class="news-detail-button">
                  お知らせ一覧に戻る
                  <div class="news-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                      <path d="M3077.281,5093.885l5.655,5.3c.775.727,1.934-.455,1.155-1.184l-4.225-3.958,12.349-.01a.839.839,0,0,0,0-1.675l-12.206.011,4.106-3.963a.827.827,0,0,0-1.154-1.184l-5.68,5.482A.856.856,0,0,0,3077.281,5093.885Z" transform="translate(-3077.043 -5086.985)" fill="#009844"/>
                    </svg>
                  </div>
                </div>
              </a>
            </div>
            <div class="news-detail-button-top">
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
      </div>
    </div>
  </main><!-- #main -->

<?php
get_footer();
