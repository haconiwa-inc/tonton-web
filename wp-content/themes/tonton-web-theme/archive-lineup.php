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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/lineup.css" media="screen" >

<main id="primary" class="site-main">
  <?php
    // ページ数
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
      'post_type' => 'lineup',
      'posts_per_page' => 5,
      'paged' => $paged,
    ];
    $lineup_posts = get_posts($args);

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

  <div class="lineup-contents">
    <div class="title-area">
      <h2 class="title">
        <p>売買物件</p>
        <span>properties for sale</span>
      </h2>
    </div>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li><a href="/">TOP</a></li>
        <li>売買物件</li>
      </ul>
      <div class="lineup-block lineup-block--top">
        <ul class="lineup-tab">
          <li class="active" data-tab="all">すべて</li>
          <?php
          $args = array(
            'hide_empty' => false,
          );
          $this_terms = get_terms('genre',$args);
          foreach ($this_terms as $each_term){
            echo '<li data-tab="' . $each_term -> slug . '">' . $each_term -> name . '</li>';
          } ?>
        </ul>
        <div class="lineup-box">
          <ul class="lineup-list">
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
              $this_term = get_the_terms($post->ID,'genre');
            ?>
            <li class="lineup-item <?php foreach((array)$this_term as $term) :
              echo 'lineup-item--' . $term->slug;
              endforeach;?>">
              <div class="lineup-img">
                <?php
                  $image = $img_obj_field['value'][0]['estate-img-single'];
                  $size = 'full';
                  if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                  }
                ?>
                <?php
                  foreach((array)$this_term as $term) :
                    echo '<span class="lineup-label lineup-label--' . $term->slug . '">' . $term->name . '</span>';
                  endforeach;
                ?>
              </div>
              <div class="lineup-textArea">
                <div class="lineup-textBox">
                  <p class="lineup-access"><?php echo get_the_title(); ?></p>
                  <p class="lineup-price"><span><?php echo $price_field; ?></span></p>
                  <p class="lineup-accessDetail"><?php echo $address_field; ?></p>
                  <p class="lineup-minutes"><?php echo $traffic_field; ?></p>
                  <div class="lineup-detail">
                    <?php
                      echo $madori_field . '/' . $structure_field . '/' . $area_building_field . '/' . $area_ground_field . '/' . $age_field;
                    ?>
                  </div>
                </div>
                <ul class="lineup-buttonArea">
                  <li class="lineup-button lineup-button--white">
                    <div class="lineup-buttonInner">
                      <a href="<?php echo esc_url( get_permalink() ) ?>">
                        詳細をみる
                      </a>
                      <div class="lineup-buttonArrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                          <path d="M1089.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.205-.01L1082.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1089.751,843.521Z" transform="translate(-1074.028 -837.997)" fill="#009844"/>
                        </svg>
                      </div>
                    </div>
                  </li>
                  <li class="lineup-button lineup-button--green">
                    <div class="lineup-buttonInner">
                      <a href="/contact">
                        お問い合わせ
                      </a>
                      <div class="lineup-buttonArrow">
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
            <li class="lineup-item--nothing">
              <p>現在対象の物件はございません</p>
              <div class="lineup-item--nothingImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/tonton-boy2-oops.png" alt="">
              </div>
            </li>
          </ul>
        </div>

        <!-- ページネーション -->
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedの設定
          $args = array(
              'post_type' => 'lineup',
              'posts_per_page' => 2,
              'paged' => $paged
          );
          $my_query = new WP_Query($args);
          $max_num_pages = $my_query->max_num_pages;  //max_num_pagesの設定　my_queryを使う
        ?>
        <?php
          if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();   //my_queryを使う
        ?>
        <?php endwhile; endif;?>
        <div class="lineup-pagination">
          <nav class="pagination">
            <?php
            if ($my_query->max_num_pages > 1) {    //max_num_pagesの設定　my_queryを使う
              echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $my_query->max_num_pages,  //max_num_pagesの設定
                'prev_text' => '‹',
                'next_text' => '›'
              ));
            }
            ?>
          </nav>
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
  <script src="<?php echo get_template_directory_uri();?>/js/lineup.js"></script>
<?php
get_footer();
?>
