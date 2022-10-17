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
    <div class="archive">
      <div class="title-area">
        <h2 class="title">
          <p>過去のリフォーム施工例</p>
          <span>example of construction</span>
        </h2>
      </div>
      <div class="archive-wrapper wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li><a href="/business/">事業案内</a></li>
          <li><a href="/business/buy/">物件購入</a></li>
          <li><a href="/business/reform/">リフォーム/リノベーション</a></li>
          <li>過去のリフォーム施工例</li>
        </ul>

        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'paged' => $paged, // ページ番号を設定
            'post_type' => 'archive',
            'post_status' => 'publish',
            'posts_per_page' => 12, // 一つのページに表示する件数を設定
            'orderby' => 'date',
            'order' => 'DESC'
          );

          if(!empty($_GET['search_type'])) {
            foreach($_GET['search_type'] as $value) {
              $search_type[] = htmlspecialchars($value, ENT_QUOTES);
            }
            $tax_query_args[] = array(
              'taxonomy' => 'archive_type',
              'terms' => $search_type,
              'field' => 'slug',
              'operator' => 'IN'
            );
          }
          
          if(!empty($_GET['search_type'])) {
            $args += array('tax_query' => array($tax_query_args));
          }
        ?>
        
        <div class="archive-search">
          <!-- 2. 検索フォームの表示 -->
          <form method="get" action="/business/reform/results-archive/">
            <div class="archive-serch-box">
              <div class="archive-search-text">物件種別</div>
              <div class="archive-search-list">
                <?php
                  $types = get_terms('archive_type', Array('hide_empty' => false));
                  foreach($types as $type):
                    $checked = "";
                    if(in_array($type->name, (array)$search_type)) $checked = " checked";
                ?>
                <input type="checkbox" name="search_type[]" value="<?php echo esc_attr($type->name); ?>"<?php echo $checked; ?>>
                <label><?php echo esc_html($type->name); ?></label>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="archive-button-wrapper">
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
          $the_type = new WP_Query($args);
          if($the_type->have_posts()) :
        ?>
        <div class="archive-content">
          <?php
            $types_search = $tax_query_args[0]["terms"];
            if($types_search):
          ?>
            <div class="archive-info">
              <div class="archive-info-text">
                物件種別：<span>
                  <?php
                    foreach($types_search as $type_search) :
                    echo esc_html($type_search);
                  ?>
                  <?php endforeach; ?>
                </span>
              </div>
            </div>
          <?php endif; ?>
          <ul>
            <?php
              while($the_type->have_posts()) :
                $the_type->the_post();
            ?>
              <li>
                <a href="<?php the_permalink() ?>">
                  <div class="archive-item">
                    <?php
                      $img_obj_field = get_field_object('estate-img');
                      $image = $img_obj_field['value'][0]['estate-img-single'];
                      $size = 'full';
                    ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <div class="archive-item-text">
                      <?php the_title(); ?>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="archive-pagination">
              <div class="navigation pagination">
                <?php
                  // ページャーを設置
                  $big = 99999;
                  echo paginate_links(array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'total' => $the_type->max_num_pages,
                    'prev_text' => '&lsaquo;',
                    'next_text' => '&rsaquo;',
                    'current' => max( 1, get_query_var('paged') ),
                    'type' => 'list',
                  ));
                  wp_reset_postdata();
                ?>
              </div>
              <?php else : ?>
                <div class="archive-item-none">
                  <p>該当する物件はありませんでした。</p>
                </div>
              <?php endif; ?>
              </div>
            </div>
          </ul>

          <div class="archive-button-top-wrapper">
            <div class="archive-button-top">
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
      <div class="archive-block archive-block--wullGreen">
        <div class="archive-blockInner">
          <h3 class="archive-contactTitle">
            物件の売買・リフォームに<br class="dis-sp">ついては<br class="dis-pc">まずはお気軽に<br class="dis-sp">お問い合わせください。
          </h3>
          <div class="archive-button archive-button--green">
            <div class="archive-buttonInner">
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
