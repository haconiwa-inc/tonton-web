<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonton-web-theme
 */

get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/chintai.css" media="screen" >

<main id="primary" class="site-main">
<?php
    // ページ数
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
      'post_type' => 'chintai',
      'posts_per_page' => 5,
      'paged' => $paged,
    ];
    $chintai_posts = get_posts($args);

    if (have_posts()) :while (have_posts()) :
      the_post();
    ?>
      <header class="entry-header">
        <?php
        if ( 'post' === get_post_type() ) :
          ?>
          <div class="entry-meta">
            <?php
            tonton_web_theme_posted_on();
            tonton_web_theme_posted_by();
            ?>
          </div><!-- .entry-meta -->
        <?php endif; ?>
      </header><!-- .entry-header -->

      <?php tonton_web_theme_post_thumbnail(); ?>

    <?php endwhile; endif; ?>
    <?php wp_reset_query();?>

  <div class="chintai-contents">
    <div class="title-area">
      <h2 class="title">
        <p>賃貸物件</p>
        <span>rental property</span>
      </h2>
    </div>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li><a href="/">TOP</a></li>
        <li>賃貸物件</li>
      </ul>
      <div class="chintai-block chintai-block--top">
        <div class="chintai-box chintai-box1">
          <ul class="chintai-list">

          <?php if ( have_posts() ) : ?>
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              $stage_field = get_field_object('estate-stage');
              $stage_value_field = $stage_field['value'];
              $stage_label_field = $stage_field['choices'][ $stage_value_field ];
              $img_obj_field = get_field_object('estate-img');

              $price_field = get_field('estate-price');
              $address_field = get_field('estate-address');
              $traffic_field = get_field('estate-traffic');

              // その他まとめる
              $madori_field = get_field('estate-madori');
              $structure_field = get_field('estate-structure');
              $area_building_field = get_field('estate-area-building');
              $area_ground_field = get_field('estate-area-ground');
              $age_field = get_field('estate-age');
              $deposit_field = get_field('estate-deposit');
              $reward_field = get_field('estate-reward');
            ?>

              <li class="chintai-item">
                <div class="chintai-img">
                  <?php
                    $image = $img_obj_field['value'][0]['estate-img-single'];
                    $size = 'full';
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                  ?>
                </div>
                <div class="chintai-textArea">
                  <div class="chintai-textBox">
                    <p class="chintai-access"><?php echo get_the_title(); ?></p>
                    <p class="chintai-price"><span><?php echo $price_field; ?></span></p>
                    <ul class="chintai-labelList">
                      <li>
                        <span>敷</span>
                        <?php echo $deposit_field; ?>
                      </li>
                      <li>
                        <span>礼</span>
                        <?php echo $reward_field; ?>
                      </li>
                    </ul>
                    <p class="chintai-accessDetail"><?php echo $address_field; ?></p>
                    <p class="chintai-minutes"><?php echo $traffic_field; ?></p>
                    <div class="chintai-detail">
                      <?php
                        echo $madori_field . '/' . $structure_field . '/' . $area_building_field . '/' . $area_ground_field . '/' . $age_field;
                      ?>
                    </div>
                  </div>
                  <ul class="chintai-buttonArea">
                    <li class="chintai-button chintai-button--white">
                      <div class="chintai-buttonInner">
                        <a href="<?php echo esc_url( get_permalink() ) ?>">
                          詳細をみる
                        </a>
                        <div class="chintai-buttonArrow">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                            <path d="M1089.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.205-.01L1082.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1089.751,843.521Z" transform="translate(-1074.028 -837.997)" fill="#009844"/>
                          </svg>
                        </div>
                      </div>
                    </li>
                    <li class="chintai-button chintai-button--green">
                      <div class="chintai-buttonInner">
                        <a href="#">
                          お問い合わせ
                        </a>
                        <div class="chintai-buttonArrow">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                            <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                          </svg>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_query();?>
          </ul>
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
  </main><!-- #main -->

<?php
get_footer();
?>
