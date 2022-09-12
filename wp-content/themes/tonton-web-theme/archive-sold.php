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
    <div class="sold">
      <div class="title-area">
        <h2 class="title">
          <p>過去の成約物件</p>
          <span>list of contracted properties</span>
        </h2>
      </div>
      <div class="sold-wrapper wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/">事業案内</a></li>
          <li><a href="/business/buy/">物件購入</a></li>
          <li>過去の成約物件</li>
        </ul>

        <!-- 1. 検索条件の取得と変数の設定 -->
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'paged' => $paged, // ページ番号を設定
            'post_type' => 'sold',
            'post_status' => 'publish',
            'posts_per_page' => 12, // 一つのページに表示する件数を設定
            'orderby' => 'date',
            'order' => 'DESC'
          );

          if(!empty($_GET['search_area'])) {
            foreach($_GET['search_area'] as $value) {
              $search_area[] = htmlspecialchars($value, ENT_QUOTES);
            }
            $tax_query_args[] = array(
              'taxonomy' => 'sold_area',
              'terms' => $search_area,
              'field' => 'slug',
              'operator' => 'IN'
            );
          }

          if(!empty($_GET['search_price'])) {
            foreach($_GET['search_price'] as $value) {
              $search_price[] = htmlspecialchars($value, ENT_QUOTES);
            }

            $tax_query_args[] = array(
              'taxonomy' => 'sold_area',
              'terms' => $search_price,
              'field' => 'slug',
              'operator' => 'IN'
            );
          }
          if(!empty($_GET['search_area']) || !empty($_GET['search_price'])) {
            $args += array('tax_query' => array($tax_query_args));
          }
        ?>

        <div class="sold-search">
          <!-- 2. 検索フォームの表示 -->
          <form method="get" action="/business/buy/sold/">
            <div class="sold-serch-box">
              <div class="sold-search-text">エリア</div>
              <div class="sold-search-list">
                <?php
                  $areas = get_terms('sold_area', Array('hide_empty' => false));
                  foreach($areas as $area):
                    $checked = "";
                    if(in_array($area->name, (array)$search_area)) $checked = " checked";
                ?>
                <input type="checkbox" name="search_area[]" value="<?php echo esc_attr($area->name); ?>"<?php echo $checked; ?>>
                <label><?php echo esc_html($area->name); ?></label>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="sold-button-wrapper">
            <div class="top-button top-button--green">
              <div class="top-buttonInner">
              <input type="submit" value="検索する" class="submit-button">
                <div class="top-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                    <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                  </svg>
                </div>
              </div>
            </div>
          </form>
        </div>

        <?php
          $the_query = new WP_Query($args);
          if($the_query->have_posts()) :
        ?>	
        <div class="sold-content">
          <?php
            $areas_search = $tax_query_args[0]["terms"];
            if($areas_search):
          ?>
          <div class="sold-info">
            <div class="sold-info-text">
              エリア：<span>
                <?php
                  $areas_search = $tax_query_args[0]["terms"];
                  foreach($areas_search as $area_search) :
                  echo esc_html($area_search);
                ?>
                <?php endforeach; ?>
              </span>
            </div>
          </div>
          <?php endif; ?>
          <ul>
            <?php
              while($the_query->have_posts()) :
                $the_query->the_post();
            ?>
              <li>
                <a href="<?php the_permalink() ?>">
                  <div class="sold-item">
                    <?php
                      $img_obj_field = get_field_object('estate-img');
                      $image = $img_obj_field['value'][0]['estate-img-single'];
                      $size = 'full';
                    ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <div class="sold-item-text">
                      <?php the_title(); ?>
                    </div>
                  </div>      
                </a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="sold-pagination">
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
              <?php else : ?>
              <p>該当する物件はありませんでした。</p>
              <?php endif; ?>
              </div>
            </div>
          </ul>
          <div class="sold-button-wrapper">
            <div class="sold-button-top">
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
      <div class="sold-block sold-block--wullGreen">
        <div class="sold-blockInner">
          <h3 class="sold-contactTitle">
            物件の売買・リフォームに<br class="dis-sp">ついては<br class="dis-pc">まずはお気軽に<br class="dis-sp">お問い合わせください。
          </h3>
          <div class="sold-button sold-button--green">
            <div class="sold-buttonInner">
              <a href="/business/reform/">
                お問い合わせ
              </a>
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
