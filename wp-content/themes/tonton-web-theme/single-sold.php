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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/sold.css" media="screen" >

  <main id="primary" class="site-main">
    <div class="sold-detail">
      <div class="title-area">
        <h2 class="title">
          <p>過去の成約物件</p>
          <span>list of contracted properties</span>
        </h2>
      </div>
      <div class="sold-detail-wrapper wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/">事業案内</a></li>
          <li><a href="/business/buy/">物件購入</a></li>
          <li><a href="/business/buy/sold/">過去の成約物件</a></li>
          <li><?php the_title(); ?></li>
        </ul>

        <div class="sold-detail-content">
          <div class="sold-detail-content-title">
            <?php the_title(); ?>
          </div>
          <div class="sold-detail-main-image">
            <div class="swiper mySwiper2">
              <div class="swiper-wrapper">
                <?php $img_obj_field = get_field_object('estate-img'); ?>
                <?php
                  foreach((array)$img_obj_field['value'] as $img_field):
                  $size = 'full';
                  $image = $img_field['estate-img-single'];
                ?>
                  <div class="swiper-slide">
                    <?php echo wp_get_attachment_image($image, $size); ?>
                  </div>
                <?php
                  endforeach;
                  wp_reset_postdata();
                ?>
              </div>
            </div>
            <div class="news-swiper-second">
              <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <?php $img_obj_field = get_field_object('estate-img'); ?>
                  <?php
                    foreach((array)$img_obj_field['value'] as $img_field):
                    $size = 'full';
                    $image = $img_field['estate-img-single'];
                  ?>
                    <div class="swiper-slide">
                      <?php echo wp_get_attachment_image($image, $size); ?>
                    </div>
                  <?php
                    endforeach;
                    wp_reset_postdata();
                  ?>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class="sold-detail-button-wrapper">
            <div class="sold-detail-button-prev">
              <a href="/sold/">
                <div class="sold-detail-button">
                  物件一覧に戻る
                </div>
              </a>
            </div>
            <div class="sold-detail-button-top">
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
