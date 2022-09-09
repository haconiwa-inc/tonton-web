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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/archive.css" media="screen" >
  <main id="primary" class="site-main">
    <div class="archive-detail">
      <div class="title-area">
        <h2 class="title">
          <p>過去のリフォーム施工例</p>
          <span>example of construction</span>
        </h2>
      </div>
      <div class="archive-detail-wrapper wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/">事業案内</a></li>
          <li><a href="/business/buy/">物件購入</a></li>
          <li><a href="business/reform/">リフォーム/リノベーション</a></li>
          <li><a href="/business/reform/results-archive/">過去のリフォーム施工例</a></li>
          <li><?php the_title(); ?></li>
        </ul>

        <div class="archive-detail-content">
          <div class="archive-detail-content-title">
            <?php the_title(); ?>
          </div>
          <div class="archive-detail-main-image">
            <div class="swiper archive-mySwiper2">
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
            <div class="archive-swiper-second">
              <div thumbsSlider="" class="swiper archive-mySwiper">
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
          <div class="archive-detail-box">
            <div class="archive-detail-item-title">
              実施したリフォームプラン
            </div>
            <div class="archive-detail-item-box">
              <div class="archive-detail-item">
                <div class="archive-detail-item-image">
                  <img src="https://placehold.jp/500x300.png" alt="">
                </div>
              </div>
              <div class="archive-detail-item">
                <div class="archive-detail-item-text">
                  プラン名が入りますプラン名が入ります
                </div>
                <div class="archive-detail-item-description">
                  プラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入ります
                </div>
              </div>
            </div>
          </div>
          <div class="archive-detail-box">
            <div class="archive-detail-item-title">
              実施したリフォームプラン
            </div>
            <div class="archive-detail-item-box">
              <div class="archive-detail-item">
                <div class="archive-detail-item-image">
                  <img src="https://placehold.jp/500x300.png" alt="">
                </div>
              </div>
              <div class="archive-detail-item">
                <div class="archive-detail-item-text">
                  プラン名が入りますプラン名が入ります
                </div>
                <div class="archive-detail-item-description">
                  プラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入ります
                </div>
              </div>
            </div>
          </div>
          <div class="archive-detail-button-wrapper">
            <div class="archive-detail-button-prev">
              <a href="/archive/">
                <div class="archive-detail-button">
                  物件一覧に戻る
                </div>
              </a>
            </div>
            <div class="archive-detail-button-top">
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
    <script src="<?php echo get_template_directory_uri();?>/js/archive.js"></script>
  </main><!-- #main -->

<?php
get_footer();
