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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/chintaiDetail.css" media="screen" >

<main id="primary" class="site-main">
  <div class="chintaiDetail-contents">
    <div class="title-area">
      <h2 class="title">
        <p>売買物件詳細</p>
        <span>properties for sale</span>
      </h2>
    </div>
    <div class="wrapper-boxes">

      <!-- field情報 -->
      <?php $chiikimei_field = get_field('estate-chiikimei'); ?>
      <?php $price_field = get_field('estate-price'); ?>
      <?php $img_obj_field = get_field_object('estate-img'); ?>
      <?php $address_field = get_field('estate-address'); ?>
      <?php $genre_field = get_field('estate-genre'); ?>
      <?php $traffic_field = get_field('estate-traffic'); ?>
      <?php $madori_field = get_field('estate-madori'); ?>
      <?php $area_building_field = get_field('estate-area-building'); ?>
      <?php $age_field = get_field('estate-age'); ?>
      <?php
        $point_obj_field = get_field_object('estate-point');
      ?>
      <?php $structure_field = get_field('estate-structure'); ?>
      <?php $floor_field = get_field('estate-floor'); ?>
      <?php $parking_field = get_field('estate-parking'); ?>
      <?php $facilities_field = get_field('estate-facilities'); ?>
      <?php $term_field = get_field('estate-term'); ?>
      <?php $conditions_field = get_field('estate-conditions'); ?>
      <?php $others_field = get_field('estate-others'); ?>
      <?php $school_field = get_field('estate-school'); ?>
      <?php $state_field = get_field('estate-state'); ?>
      <?php $transfer_field = get_field('estate-transfer'); ?>
      <?php $day_field = get_field('estate-day'); ?>
      <?php
        $map_field = get_field('estate-map');
      ?>
      <?php $deposit_field = get_field('estate-deposit'); ?>
      <?php $reward_field = get_field('estate-reward'); ?>


      <div class="wrapper-boxes-inner">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/buy/lineup">売買物件</a></li>
          <li><?php echo the_title(); ?></li>
        </ul>
        <div class="chintaiDetail-block chintaiDetail-block--top">
          <div class="chintaiDetail-detail">
            <div class="chintaiDetail-detailMain">
              <div class="chintaiDetail-tableArea">
                <div class="dis-pc">
                  <p class="chintaiDetail-area"><?php echo $address_field; ?></p>
                  <p class="chintaiDetail-price"><span><?php echo $price_field; ?></span></p>
                  <ul class="chintaiDetail-labelList">
                    <li>
                      <span>敷</span>
                      <?php echo $deposit_field; ?>
                    </li>
                    <li>
                      <span>礼</span>
                      <?php echo $reward_field; ?>
                    </li>
                  </ul>
                </div>
                <dl>
                  <dt>物件種別</dt>
                  <dd><?php echo $genre_field; ?></dd>
                  <dt>所在地</dt>
                  <dd><?php echo $address_field; ?></dd>
                  <dt>最寄り駅</dt>
                  <dd><?php echo $traffic_field; ?></dd>
                  <dt>間取り</dt>
                  <dd><?php echo $madori_field; ?></dd>
                  <dt>建物面積</dt>
                  <dd><?php echo $area_building_field; ?></dd>
                  <dt>築年月</dt>
                  <dd><?php echo $age_field; ?></dd>
                </dl>
                <div class="chintaiDetail-button chintaiDetail-button--green">
                  <div class="chintaiDetail-buttonInner chintaiDetail-buttonInner--left">
                    <a href="/contact">
                      お問い合わせ
                    </a>
                    <div class="chintaiDetail-buttonArrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="dis-sp">
                  <p class="chintaiDetail-area"><?php echo $address_field; ?></p>
                  <p class="chintaiDetail-price"><span><?php echo $price_field; ?></span></p>
                  <ul class="chintaiDetail-labelList">
                    <li>
                      <span>敷</span>
                      <?php echo $deposit_field; ?>
                    </li>
                    <li>
                      <span>礼</span>
                      <?php echo $reward_field; ?>
                    </li>
                  </ul>
                </div>
                <div class="chintaiDetail-images">
                <?php
                  foreach((array)$img_obj_field['value'] as $img_field) :
                    $image = $img_field['estate-img-single'];
                    $size = 'full';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                  endforeach;
                ?>
                </div>
              </div>
            </div>
            <div>
              <h3 class="chintaiDetail-subTitle">物件情報</h3>
              <div class="chintaiDetail-points">
                <span class="chintaiDetail-pointLabel">Point</span>
                <div class="chintaiDetail-pointArea">
                  <!-- TODO: foreach ul liで書き直したい -->
                  <p>
                    <?php
                      foreach((array)$point_obj_field['value'] as $point_field) :
                        echo  '・' . $point_field['estate-point-single'] . '<br>';
                      endforeach;
                    ?>
                  </p>
                    </div>
                <div class="chintaiDetail-pointIcon">
                  <img src="<?php echo get_template_directory_uri();?>/images/common/tonton-boy2.png" alt="">
                </div>
              </div>
              <div class="chintaiDetail-detailAll">
                <div class="chintaiDetail-tableArea">
                  <dl>
                    <dt>物件種別</dt>
                    <dd><?php echo $genre_field; ?></dd>
                    <dt>所在地</dt>
                    <dd><?php echo $address_field; ?></dd>
                    <dt>最寄り駅</dt>
                    <dd><?php echo $traffic_field; ?></dd>
                    <dt>間取り</dt>
                    <dd><?php echo $madori_field; ?></dd>
                    <dt>建物面積</dt>
                    <dd><?php echo $area_building_field; ?></dd>
                    <dt>築年月</dt>
                    <dd><?php echo $age_field; ?></dd>
                    <dt>価格</dt>
                    <dd><?php echo $price_field ?></dd>
                    <dt>物件種別</dt>
                    <dd><?php echo $structure_field; ?></dd>
                    <dt>所在階	</dt>
                    <dd><?php echo $floor_field; ?></dd>
                    <dt>駐車場</dt>
                    <dd><?php echo $parking_field; ?></dd>
                    <dt>設備・仕様</dt>
                    <dd><?php echo $facilities_field; ?></dd>
                    <dt>契約期間</dt>
                    <dd><?php echo $term_field; ?></dd>
                    <dt>入居条件</dt>
                    <dd><?php echo $conditions_field; ?></dd>
                    <dt>その他</dt>
                    <dd><?php echo $others_field; ?></dd>
                    <dt>学校区</dt>
                    <dd><?php echo $school_field; ?></dd>
                    <dt>現況</dt>
                    <dd><?php echo $state_field; ?></dd>
                    <dt>引渡し</dt>
                    <dd><?php echo $transfer_field; ?></dd>
                    <dt>情報登録日</dt>
                    <dd><?php echo $day_field; ?></dd>
                  </dl>
                  <div class="chintaiDetail-map">
                  <!-- TODO: jsいれないと表示されなさそう -->
                    <?php
                      if($map_field){
                        $lat = $map_field['lat'];
                        $lng = $map_field['lng'];
                        echo '<div class="sale-map">';
                        echo (do_shortcode('[map lat="'.$lat.'" lng="'.$lng.'" height="400px"][/map]'));
                        echo '</div>';
                      };
                    ?>
                    <img src="<?php echo get_template_directory_uri();?>/images/business/map.png" alt="">
                  </div>
                </div>
              </div>
              <div class="chintaiDetail-buttonArea">
                <div class="chintaiDetail-button chintaiDetail-button--white">
                  <div class="chintaiDetail-buttonInner chintaiDetail-buttonInner--back">
                    <a href="/business/buy/lineup">
                      物件一覧に戻る
                    </a>
                    <div class="chintaiDetail-buttonArrow chintaiDetail-buttonArrow--back">
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
        </div>
      </div>
      <div class="chintaiDetail-block chintaiDetail-block--wullGreen">
        <div class="chintaiDetail-blockInner">
          <h3 class="chintaiDetail-contactTitle">まずはお気軽に<br class="dis-sp" />お問い合わせください。</h3>
          <div class="chintaiDetail-button chintaiDetail-button--green">
            <div class="chintaiDetail-buttonInner chintaiDetail-buttonInner--small">
              <a href="/business/reform">
                お問い合わせ
              </a>
              <div class="chintaiDetail-buttonArrow">
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

   <?php
  //  while ( have_posts() ) :
  //    the_post();

  //    get_template_part( 'template-parts/content', get_post_type() );

  //    the_post_navigation(
  //      array(
  //        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'tonton-web-theme' ) . '</span> <span class="nav-title">%title</span>',
  //        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'tonton-web-theme' ) . '</span> <span class="nav-title">%title</span>',
  //      )
  //    );

  //    // If comments are open or we have at least one comment, load up the comment template.
  //    if ( comments_open() || get_comments_number() ) :
  //      comments_template();
  //    endif;

  //  endwhile; // End of the loop.
    ?>
  </main><!-- #main -->

<?php
get_footer();
?>
