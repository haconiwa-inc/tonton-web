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
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'post_type' => 'lineup',
      'post_status' => 'publish',
      'posts_per_page' => 2,
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $lineup_posts = get_posts($args);

    if(!empty($_GET['search_genre'])) {
      foreach($_GET['search_genre'] as $value) {
        if ($value === 'all') {
          $terms = get_terms('genre', Array('hide_empty' => false));
          foreach($terms as $term):
            $search_genre[] = htmlspecialchars($term->slug, ENT_QUOTES);
          endforeach;
        } else {
          $search_genre[] = htmlspecialchars($value, ENT_QUOTES);
        }
      }
      $tax_query_args[] = array(
        'taxonomy' => 'genre',
        'terms' => $search_genre,
        'field' => 'slug',
        'operator' => 'IN'
      );
    }
    if(!empty($_GET['search_genre'])) {
      $args += array('tax_query' => array($tax_query_args));
    }

    if (have_posts()) :while (have_posts()) :
      the_post();
    ?>
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
          <form method="get" id="lineupGenre" action="/business/buy/lineup">
            <div class="lineup-tab">
              <input type="radio" id="all" name="search_genre[]" value="all" onclick="submit();" checked />
              <label for="all">すべて</label>
              <?php
                $genres = get_terms('genre', Array('hide_empty' => false));
                foreach($genres as $genre):
                  $checked = "";
                  if ($_GET['search_genre'][0] === 'all') {
                    $checked = "";
                  } else {
                    if(in_array($genre->slug, $search_genre)) $checked = " checked";
                  }
                ?>
                <input type="radio" name="search_genre[]" id="<?php echo esc_attr($genre->slug); ?>" value="<?php echo esc_attr($genre->slug); ?>"<?php echo $checked; ?> onclick="submit();" />
                <label for="<?php echo esc_attr($genre->slug); ?>"><?php echo esc_html($genre->name); ?></label>
              <?php endforeach; ?>
            </div>
          </form>
          <div class="lineup-box">
            <ul class="lineup-list">
              <?php
                $the_query = new WP_Query($args);
                if($the_query->have_posts()) :
              ?>
              <?php
                while($the_query->have_posts()) :
                $the_query->the_post();
              ?>
              <?php
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
                <li class="lineup-item">
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
                          <a href="<?php the_permalink() ?>">
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
              <?php endwhile; wp_reset_postdata(); ?>
              <div class="lineup-pagination">
                <div class="navigation pagination">
                  <?php
                    // ページャーを設置
                    $big = 99999;
                    echo paginate_links(array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'total' => $the_query->max_num_pages,
                      'prev_text' => '&lsaquo;',
                      'next_text' => '&rsaquo;',
                      'current' => max( 1, get_query_var('paged') ),
                      'type' => 'list',
                    ));
                    wp_reset_postdata();
                  ?>
                </div>
              </div>
              <?php else : ?>
                <li class="lineup-item--nothing">
                  <p>現在対象の物件はございません</p>
                  <div class="lineup-item--nothingImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/tonton-boy2-oops.png" alt="">
                  </div>
                </li>
              <?php endif; ?>
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
