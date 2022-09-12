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
        <p>売買物件</p>
        <span>properties for sale</span>
      </h2>
    </div>
    <div class="wrapper-boxes">

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
      <?php $map_field = get_field('estate-map'); ?>
      <?php $reform_plan_obj_field = get_field_object('estate-reform-plan'); ?>
      <?php $renovation_plan_obj_field = get_field_object('estate-renovation-plan'); ?>
      <?php $recommend_plan_obj_field = get_field_object('estate-recommend-plan'); ?>

      <div class="wrapper-boxes-inner">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/buy/lineup/">売買物件</a></li>
          <li><?php echo the_title(); ?></li>
        </ul>
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
                    <a href="/contact/">
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
              <div class="lineupDetail-images">
                <div class="dis-sp">
                  <span class="lineupDetail-label"><?php echo $stage_label_field; ?></span>
                  <p class="lineupDetail-area"><?php echo $address_field; ?></p>
                  <p class="lineupDetail-price"><span><?php echo $price_field; ?></span></p>
                </div>

                <!-- swiper -->
                <div class="lineupDetail-slider">
                  <div class="swiper swiper-fade">
                    <div class="swiper-wrapper">
                      <?php
                        foreach((array)$img_obj_field['value'] as $img_field) :
                          $image = $img_field['estate-img-single'];
                          $size = 'full';
                          if( $image ) {
                            echo '<div class="swiper-slide"><figure class="slide"><div class="slide-media">' . wp_get_attachment_image( $image, $size ) . '</div></figure></div>';
                          }
                        endforeach;
                      ?>
                    </div><!-- /swiper-wrapper -->
                  <!-- /swiper-main -->

                  <div class="thumb-wrapper">
                    <?php
                      foreach((array)$img_obj_field['value'] as $img_field) :
                        $image = $img_field['estate-img-single'];
                        $size = 'full';
                        if( $image ) {
                          echo '<div class="thumb-media">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                        }
                      endforeach;
                    ?>
                  </div>
                </div>

                <!-- モーダルを開くボタン -->
                <div class="lineupDetail-more">
                  <div class="more-button">
                    <span>すべての画像をみる</span>
                  </div>
                </div>

                <!-- モーダル本体 -->
                <div class="modal-container">
                  <div class="modal-body">
                    <div class="modal-close">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29.699" height="29.698" viewBox="0 0 29.699 29.698">
                        <g transform="translate(-6200.151 -247.151)">
                          <g fill="#f6f4f4">
                            <path d="M 6228.43505859375 275.4351501464844 L 6224.89990234375 271.8996887207031 L 6228.43505859375 275.4351501464844 L 6228.43505859375 275.4351501464844 Z" stroke="none"/>
                            <path d="M 6201.56494140625 247.1508483886719 L 6229.849609375 275.435302734375 L 6228.43505859375 276.8492126464844 L 6200.15087890625 248.5650024414062 L 6201.56494140625 247.1508483886719 Z" stroke="none" fill="#080103"/>
                          </g>
                          <g fill="#f6f4f4">
                            <path d="M 6217.17578125 259.8243408203125 L 6228.43505859375 248.5649261474609 L 6228.435546875 248.5650787353516 L 6217.17578125 259.8243408203125 Z" stroke="none"/>
                            <path d="M 6228.43505859375 247.1508483886719 L 6229.849609375 248.5650024414062 L 6201.56494140625 276.8492126464844 L 6200.15087890625 275.435302734375 L 6228.43505859375 247.1508483886719 Z" stroke="none" fill="#080103"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <!-- モーダル内のコンテンツ -->
                    <div class="lineupDetail-modalContent">
                      <!-- swiper modal -->
                      <div class="lineupDetail-sliderModal">

                        <div class="swiper-container slider">
                          <div class="swiper-wrapper">
                            <?php
                              foreach((array)$img_obj_field['value'] as $img_field) :
                                $image = $img_field['estate-img-single'];
                                $size = 'full';
                                if( $image ) {
                                  echo '<div class="swiper-slide">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                                }
                              endforeach;
                              ?>
                          </div>
                          <div class="swiper-modal-next">
                            <img src="<?php echo get_template_directory_uri();?>/images/common/next_button.svg" alt="">
                          </div>
                          <div class="swiper-modal-prev">
                            <img src="<?php echo get_template_directory_uri();?>/images/common/prev_button.svg" alt="">
                          </div>
                        </div>

                        <!-- サムネイル -->
                        <div class="swiper-container slider-thumbnail">
                          <div class="swiper-wrapper">
                          <?php
                            foreach((array)$img_obj_field['value'] as $img_field) :
                              $image = $img_field['estate-img-single'];
                              $size = 'full';
                              if( $image ) {
                                echo '<div class="swiper-slide">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                              }
                            endforeach;
                            ?>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
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
                    <?php if (!!$parking_field) : ?>
                      <dt>駐車場</dt>
                      <dd><?php echo $parking_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$facilities_field) : ?>
                      <dt>設備・仕様</dt>
                      <dd><?php echo $facilities_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$school_field) : ?>
                      <dt>学校区</dt>
                      <dd><?php echo $school_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$transfer_field) : ?>
                      <dt>引渡し</dt>
                      <dd><?php echo $transfer_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$plan_field) : ?>
                      <dt>都市計画</dt>
                      <dd><?php echo $plan_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$region_field) : ?>
                      <dt>用途地域</dt>
                      <dd><?php echo $region_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$chimoku_field) : ?>
                      <dt>地目</dt>
                      <dd><?php echo $chimoku_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$right_field) : ?>
                      <dt>土地権利</dt>
                      <dd><?php echo $right_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$kenpei_field) : ?>
                      <dt>建ぺい率</dt>
                      <dd><?php echo $kenpei_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$capacity_field) : ?>
                      <dt>容積率</dt>
                      <dd><?php echo $capacity_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$other_laws_field) : ?>
                      <dt>その他の法令上の制限</dt>
                      <dd><?php echo $other_laws_field; ?></dd>
                    <?php endif; ?>
                    <?php if (!!$load_field) : ?>
                      <dt>接道状況</dt>
                      <dd><?php echo $load_field; ?></dd>
                    <?php endif; ?>
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
                <ul class="lineupDetail-plan">
                  <?php if ( (!!(array)$reform_plan_obj_field['value']) ) : ?>
                    <li>
                      <h3 class="lineupDetail-planTitle">実施したリフォームプラン</h3>
                      <?php foreach((array)$reform_plan_obj_field['value'] as $reform_plan_field) : ?>
                        <div class="lineupDetail-planBlock">
                          <div>
                            <?php
                              $reform_image = $reform_plan_field['estate-reform-plan-img'];

                              $size = 'full';
                              if( $reform_image ) {
                                echo wp_get_attachment_image( $reform_image, $size );
                              }
                            ?>
                          </div>
                          <div>
                            <h4 class="lineupDetail-planSubTitle"><?php echo $reform_plan_field['estate-reform-plan-title'] ?></h4>
                            <div>
                              <?php echo $reform_plan_field['estate-reform-plan-detail'] ?>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>
                    </li>
                  <?php endif; ?>
                  <?php if ( (!!(array)$renovation_plan_obj_field['value']) ) : ?>
                    <li>
                      <h3 class="lineupDetail-planTitle">実施したリノベーションプラン</h3>
                      <?php foreach((array)$renovation_plan_obj_field['value'] as $renovation_plan_field) : ?>
                        <div class="lineupDetail-planBlock">
                          <div>
                            <?php
                              $renovation_image = $renovation_plan_field['estate-renovation-plan-img'];

                              $size = 'full';
                              if( $renovation_image ) {
                                echo wp_get_attachment_image( $renovation_image, $size );
                              }
                            ?>
                          </div>
                          <div>
                            <h4 class="lineupDetail-planSubTitle"><?php echo $renovation_plan_field['estate-renovation-plan-title'] ?></h4>
                            <div>
                              <?php echo $renovation_plan_field['estate-renovation-plan-detail'] ?>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>
                    </li>
                  <?php endif; ?>
                  <?php if ( (!!(array)$recommend_plan_obj_field['value']) ) : ?>
                    <li>
                      <h3 class="lineupDetail-planTitle">おすすめのプラン</h3>
                      <?php foreach((array)$recommend_plan_obj_field['value'] as $recommend_plan_field) : ?>
                        <div class="lineupDetail-planBlock">
                          <div>
                            <?php
                              $recommend_image = $recommend_plan_field['estate-recommend-plan-img'];

                              $size = 'full';
                              if( $recommend_image ) {
                                echo wp_get_attachment_image( $recommend_image, $size );
                              }
                            ?>
                          </div>
                          <div>
                            <h4 class="lineupDetail-planSubTitle"><?php echo $recommend_plan_field['estate-recommend-plan-title'] ?></h4>
                            <div>
                              <?php echo $recommend_plan_field['estate-recommend-plan-detail'] ?>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="lineupDetail-buttonArea">
                <div class="lineupDetail-button lineupDetail-button--white">
                  <div class="lineupDetail-buttonInner lineupDetail-buttonInner--back">
                    <a href="/business/buy/lineup/">
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
        <div class="lineupDetail-block lineupDetail-block--wullGreen">
          <div class="lineupDetail-blockInner">
            <h3 class="lineupDetail-contactTitle">まずはお気軽に<br class="dis-sp" />お問い合わせください。</h3>
            <div class="lineupDetail-button lineupDetail-button--green">
              <div class="lineupDetail-buttonInner lineupDetail-buttonInner--small">
                <a href="/contact/">
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
        </div>

      </div>
    </div>
  </main><!-- #main -->
  <script src="<?php echo get_template_directory_uri();?>/js/business.js"></script>
<?php
get_footer();
?>
