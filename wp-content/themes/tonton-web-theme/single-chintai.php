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
        <p>賃貸物件</p>
        <span>rental property</span>
      </h2>
    </div>
    <div class="wrapper-boxes">

      <!-- field情報 -->
      <?php $chiikimei_field = get_field('chintai-chiikimei'); ?>
      <?php $price_field = get_field('chintai-price'); ?>
      <?php $img_obj_field = get_field_object('chintai-img'); ?>
      <?php $address_field = get_field('chintai-address'); ?>
      <?php $genre_field = get_field('chintai-genre'); ?>
      <?php $traffic_field = get_field('chintai-traffic'); ?>
      <?php $madori_field = get_field('chintai-madori'); ?>
      <?php $area_building_field = get_field('chintai-area-building'); ?>
      <?php $age_field = get_field('chintai-age'); ?>
      <?php
        $point_obj_field = get_field_object('chintai-point');
      ?>
      <?php $structure_field = get_field('chintai-structure'); ?>
      <?php $floor_field = get_field('chintai-floor'); ?>
      <?php $parking_field = get_field('chintai-parking'); ?>
      <?php $facilities_field = get_field('chintai-facilities'); ?>
      <?php $term_field = get_field('chintai-term'); ?>
      <?php $conditions_field = get_field('chintai-conditions'); ?>
      <?php $others_field = get_field('chintai-others'); ?>
      <?php $school_field = get_field('chintai-school'); ?>
      <?php $state_field = get_field('chintai-state'); ?>
      <?php $transfer_field = get_field('chintai-transfer'); ?>
      <?php $day_field = get_field('chintai-day'); ?>
      <?php $deposit_field = get_field('chintai-deposit'); ?>
      <?php $reward_field = get_field('chintai-reward'); ?>


      <div class="wrapper-boxes-inner">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/chintai/">賃貸物件</a></li>
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
                    <a href="/contact/">
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
              <div class="chintaiDetail-images">
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

                <!-- swiper -->
                <div class="chintaiDetail-slider">
                  <div class="swiper swiper-fade">
                    <div class="swiper-wrapper">
                      <?php
                        foreach((array)$img_obj_field['value'] as $img_field) :
                          $image = $img_field['chintai-img-single'];
                          $size = 'full';
                          if( $image ) {
                            echo '<div class="swiper-slide"><figure class="slide"><div class="slide-media">' . wp_get_attachment_image( $image, $size ) . '</div></figure></div>';
                          }
                        endforeach;
                      ?>
                      <div class="search-icon">
                        <svg id="icon_mushimegane.svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                          <image id="レイヤー_9" data-name="レイヤー 9" width="20" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAB00lEQVQ4jZWUz4uNURjHP66rocaPwUix0MSQIiYrKz9KasqwGjsbZSlhJf+DJAsLlIUslL/AQiykaJIYNIqmMXc0hKzc+7G4zzv3dJzX5Func97n+32+7znP+7wHlcLYo15SJ9S22lGn1Cvq4ZocVPLAcvWGi+OhunsxwwH1dZJ0Tx1Xh9Ut6lH1uvo90RyqM+xT34bopTryj2OtUe8mpjtKhneCnFSbmcFt9ZG6Kovfipx3ueG25G1DhR1V2FXgPgU3XsUawEm6eABM8TfmYv5W4C7HfHohor6JtxyrqVkr+O0Frj85wcrqyBU2JzVrJaMd/Lw6q86pL9QVof8a/E6VZrL9dswjwGDheAPJej2wNNa/Y24ANIEWsAEYBmaAfcBWoBPCJ8BaYBR4DywDpoGfsV4Xupmqhtdiy1dravg5+NUF7khwE2nb7I/gD7VRSOoEX/rVngZ3NjVEfR7E/ULSK/WXujGLn4+cD2m8WgwlX/tmwbQve76Q6GdNbqBUdDARTapn7LUS6qB63O5NU8KJ3BB1r/osE87ba+4KH+31Z4rRuhvllN165kmP1YuhOVAw7CxRCz28gH5gUzTxl+jZFGN074Aeanb4P2NMnY7SnPsDQUFP2XMHtlwAAAAASUVORK5CYII="/>
                        </svg>
                      </div>
                    </div><!-- /swiper-wrapper -->
                  <!-- /swiper-main -->

                  <div class="thumb-wrapper">
                    <?php
                      foreach((array)$img_obj_field['value'] as $img_field) :
                        $image = $img_field['chintai-img-single'];
                        $size = 'full';
                        if( $image ) {
                          echo '<div class="thumb-media">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                        }
                      endforeach;
                    ?>
                  </div>
                </div>

                <!-- モーダルを開くボタン -->
                <div class="chintaiDetail-more">
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
                    <div class="chintaiDetail-modalContent">
                      <!-- swiper modal -->
                      <div class="chintaiDetail-sliderModal">

                        <div class="swiper-container slider">
                          <div class="swiper-wrapper">
                            <?php
                              foreach((array)$img_obj_field['value'] as $img_field) :
                                $image = $img_field['chintai-img-single'];
                                $size = 'full';
                                if( $image ) {
                                  echo '<div class="swiper-slide">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                                }
                              endforeach;
                              ?>
                          </div>
                        </div>

                        <!-- サムネイル -->
                        <div class="swiper-container slider-thumbnail">
                          <div class="swiper-wrapper">
                          <?php
                            foreach((array)$img_obj_field['value'] as $img_field) :
                              $image = $img_field['chintai-img-single'];
                              $size = 'full';
                              if( $image ) {
                                echo '<div class="swiper-slide">' .  wp_get_attachment_image( $image, $size ) . '</div>';
                              }
                            endforeach;
                            ?>
                          </div>
                        </div>
                        <div class="swiper-modal-next">
                          <img src="<?php echo get_template_directory_uri();?>/images/common/next_button.svg" alt="">
                        </div>
                        <div class="swiper-modal-prev">
                          <img src="<?php echo get_template_directory_uri();?>/images/common/prev_button.svg" alt="">
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div>
              <h3 class="chintaiDetail-subTitle">物件情報</h3>
              <div class="chintaiDetail-points">
                <span class="chintaiDetail-pointLabel">Point</span>
                <div class="chintaiDetail-pointArea">
                  <p>
                    <?php
                      foreach((array)$point_obj_field['value'] as $point_field) :
                        echo  '・' . $point_field['chintai-point-single'] . '<br>';
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
                    <dt>建物構造</dt>
                    <dd><?php echo $structure_field; ?></dd>
                    <?php if (!!$floor_field) : ?>
                      <dt>所在階</dt>
                      <dd><?php echo $floor_field; ?></dd>
                    <?php endif; ?>
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
                </div>
              </div>
              <div class="chintaiDetail-buttonArea">
                <div class="chintaiDetail-button chintaiDetail-button--white">
                  <div class="chintaiDetail-buttonInner chintaiDetail-buttonInner--back">
                    <a href="/business/chintai/">
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
              <a href="/contact/">
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
  </main><!-- #main -->
  <script src="<?php echo get_template_directory_uri();?>/js/business.js"></script>
<?php
get_footer();
?>
