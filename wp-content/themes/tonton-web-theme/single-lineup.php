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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/lineupDetail.css" media="screen" >

<main id="primary" class="site-main">
  <div class="lineupDetail-contents">
    <div class="title-area">
      <h2 class="title">
        <p>売買物件詳細</p>
        <span>properties for sale</span>
      </h2>
    </div>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li><a href="/">TOP</a></li>
        <li><a href="/business/buy/lineup">売買物件</a></li>
        <li><?php echo the_title(); ?></li>
      </ul>

      <!-- field情報 -->
      <?php $chiikimei_field = get_field('estate-chiikimei'); ?>
      <?php
        $stage_field = get_field_object('estate-stage');
        $stage_value_field = $stage_field['value'];
        $stage_label_field = $stage_field['choices'][ $stage_value_field ];
      ?>
      <?php $price_field = get_field('estate-price'); ?>
      <?php $img_obj_field = get_field_object('estate-img'); ?>
      <?php $address_field = get_field('estate-address'); ?>
      <?php $genre_field = get_field('estate-genre'); ?>
      <?php $traffic_field = get_field('estate-traffic'); ?>
      <?php $madori_field = get_field('estate-madori'); ?>
      <?php $area_building_field = get_field('estate-area-building'); ?>
      <?php $area_ground_field = get_field('estate-area-ground'); ?>
      <?php $age_field = get_field('estate-age'); ?>
      <?php
        $point_obj_field = get_field_object('estate-point');
      ?>
      <?php $structure_field = get_field('estate-structure'); ?>
      <?php $parking_field = get_field('estate-parking'); ?>
      <?php $facilities_field = get_field('estate-facilities'); ?>
      <?php $transfer_field = get_field('estate-transfer'); ?>
      <?php $school_field = get_field('estate-school'); ?>
      <?php $plan_field = get_field('estate-plan'); ?>
      <?php $region_field = get_field('estate-region'); ?>
      <?php $chimoku_field = get_field('estate-chimoku'); ?>
      <?php $right_field = get_field('estate-right'); ?>
      <?php $kenpei_field = get_field('estate-kenpei'); ?>
      <?php $capacity_field = get_field('estate-capacity'); ?>
      <?php $other_laws_field = get_field('estate-other-Laws'); ?>
      <?php $load_field = get_field('estate-load'); ?>
      <?php $capacity_field = get_field('estate-capacity'); ?>
      <?php
        $map_field = get_field('estate-map');
      ?>

      <?#php echo $chiikimei_field; ?>
      <div class="lineupDetail-block lineupDetail-block--top">
        <div class="lineupDetail-detail">
          <div class="lineupDetail-detailMain">
            <div class="lineupDetail-tableArea">
              <div class="dis-pc">
                <span class="lineupDetail-label"><?php echo $stage_label_field; ?></span>
                <p class="lineupDetail-area"><?php echo $address_field; ?></p>
                <p class="lineupDetail-price"><span><?php echo $price_field; ?></span></p>
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
                <dt>土地面積</dt>
                <dd><?php echo $area_ground_field; ?></dd>
                <dt>築年月</dt>
                <dd><?php echo $age_field; ?></dd>
              </dl>
              <div class="lineupDetail-button lineupDetail-button--green">
                <div class="lineupDetail-buttonInner lineupDetail-buttonInner--small">
                  <a href="/contact">
                    お問い合わせ
                  </a>
                  <div class="lineupDetail-buttonArrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                      <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="dis-sp">
                <span class="lineupDetail-label"><?php echo $stage_label_field; ?></span>
                <p class="lineupDetail-area"><?php echo $address_field; ?></p>
                <p class="lineupDetail-price"><span><?php echo $price_field; ?></span></p>
              </div>
              <div class="lineupDetail-images">
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
            <h3 class="lineupDetail-subTitle">物件情報</h3>
            <div class="lineupDetail-points">
              <span class="lineupDetail-pointLabel">Point</span>
              <div class="lineupDetail-pointArea">
                <!-- TODO: foreach ul liで書き直したい -->
                <p>
                  <?php
                    foreach((array)$point_obj_field['value'] as $point_field) :
                      echo  '・' . $point_field['estate-point-single'] . '<br>';
                    endforeach;
                  ?>
                </p>
                  </div>
              <div class="lineupDetail-pointIcon">
                <img src="<?php echo get_template_directory_uri();?>/images/common/tonton-girl.png" alt="">
              </div>
            </div>
            <div class="lineupDetail-detailAll">
              <div class="lineupDetail-tableArea">
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
                  <dt>土地面積</dt>
                  <dd><?php echo $area_ground_field; ?></dd>
                  <dt>築年月</dt>
                  <dd><?php echo $age_field; ?></dd>
                  <dt>価格</dt>
                  <dd><?php echo $price_field ?></dd>
                  <dt>物件種別</dt>
                  <dd><?php echo $structure_field; ?></dd>
                  <dt>駐車場</dt>
                  <dd><?php echo $parking_field; ?></dd>
                  <dt>設備・仕様</dt>
                  <dd><?php echo $facilities_field; ?></dd>
                  <dt>学校区</dt>
                  <dd><?php echo $school_field; ?></dd>
                  <dt>引渡し</dt>
                  <dd><?php echo $transfer_field; ?></dd>
                  <dt>都市計画</dt>
                  <dd><?php echo $plan_field; ?></dd>
                  <dt>用途地域</dt>
                  <dd><?php echo $region_field; ?></dd>
                  <dt>地目</dt>
                  <dd><?php echo $chimoku_field; ?></dd>
                  <dt>土地権利</dt>
                  <dd><?php echo $right_field; ?></dd>
                  <dt>建ぺい率</dt>
                  <dd><?php echo $kenpei_field; ?></dd>
                  <dt>容積率</dt>
                  <dd><?php echo $capacity_field; ?></dd>
                  <dt>その他の法令上の制限</dt>
                  <dd><?php echo $other_laws_field; ?></dd>
                  <dt>接道状況</dt>
                  <dd><?php echo $load_field; ?></dd>
                </dl>
                <div class="lineupDetail-map">
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
              <!-- TODO: 新規で作成？ -->
              <ul class="lineupDetail-plan">
                <li>
                  <h3 class="lineupDetail-planTitle">実施したリフォームプラン</h3>
                  <div class="lineupDetail-planBlock">
                    <div>
                      <img src="https://placehold.jp/492x276.png" alt="">
                    </div>
                    <div>
                      <h4 class="lineupDetail-planSubTitle">プラン名が入りますプラン名が入ります</h4>
                      <div>
                      プラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入ります
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <h3 class="lineupDetail-planTitle">実施したリノベーションプラン</h3>
                  <div class="lineupDetail-planBlock">
                    <div>
                      <img src="https://placehold.jp/492x276.png" alt="">
                    </div>
                    <div>
                      <h4 class="lineupDetail-planSubTitle">プラン名が入りますプラン名が入ります</h4>
                      <div>
                      プラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入ります
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <h3 class="lineupDetail-planTitle">おすすめのプラン</h3>
                  <div class="lineupDetail-planBlock">
                    <div>
                      <img src="https://placehold.jp/492x276.png" alt="">
                    </div>
                    <div>
                      <h4 class="lineupDetail-planSubTitle">プラン名が入りますプラン名が入ります</h4>
                      <div>
                      プラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入りますプラン詳細内容が入ります
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="lineupDetail-buttonArea">
              <div class="lineupDetail-button lineupDetail-button--white">
                <div class="lineupDetail-buttonInner lineupDetail-buttonInner--back">
                  <a href="/business/buy/lineup">
                    物件一覧に戻る
                  </a>
                  <div class="lineupDetail-buttonArrow lineupDetail-buttonArrow--back">
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
