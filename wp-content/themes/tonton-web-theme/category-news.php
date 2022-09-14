<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonton-web-theme
 */

get_header();
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/news.css" media="all">
</head>
  <main id="primary" class="site-main">
  <section>
    <div class="news">
      <div class="title-area">
        <h2 class="title">
          <p>お知らせ</p>
          <span>information</span>
        </h2>
      </div>
      <div class="news-content wrapper">
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <li>お知らせ一覧</li>
        </ul>

        <div class="news-wrapper">
          <!-- 1. 検索条件の取得と変数の設定 -->
          <?php
            // ページ番号を取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'paged' => $paged, // ページ番号を設定
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 5, // 一つのページに表示する件数を設定
              'orderby' => 'date',
              'order' => 'DESC'
            );

            // POSTをGETに変更
            if(!empty($_GET['search_category'])) {
              foreach($_GET['search_category'] as $value) {
                if ($value === 'all') {
                  $posts = get_categories('post', Array('hide_empty' => false));
                  foreach($posts as $post):
                    $search_category[] = htmlspecialchars($post->term_id, ENT_QUOTES);
                  endforeach;
                } else {
                  $search_category[] = htmlspecialchars($value, ENT_QUOTES);
                }
              }
              $args += array('category__in' => $search_category);
            }

            if(!empty($_GET['search_tag'])) {
              foreach($_GET['search_tag'] as $value) {
                if ($value === 'tag-all') {
                  $tags_posts = get_tags('post', Array('hide_empty' => false));
                  foreach($tags_posts as $tags_post):
                    $search_tag[] = htmlspecialchars($tags_post->term_id, ENT_QUOTES);
                  endforeach;
                } else {
                  $search_tag[] = htmlspecialchars($value, ENT_QUOTES);
                } 
              }
              $args += array('tag__in' => $search_tag);
            }
          ?>

          <!-- 2. 検索フォームの表示 -->
          <form method="get" action="/news/">
            <div class="news-tab-top">
              <ul>
                <li>
                  <label for="all">
                    <input type="radio" id="all" name="search_category[]" value="all" onclick="submit();" checked />
                    <span>すべて</span>
                  </label>
                </li>
                <?php
                  $categories = get_categories(Array('hide_empty' => false));
                  foreach($categories as $category):
                    $checked = "";
                    if ($_GET['search_category'][0] === 'all') {
                      $checked = "";
                    } else {
                      if(in_array($category->term_id, (array)$search_category)) $checked = " checked";
                    }
                ?>
                  <li>
                    <label>
                      <input type="radio" name="search_category[]" value="<?php echo esc_attr($category->term_id); ?>"<?php echo $checked; ?> onclick="submit();">
                      <span><?php echo esc_html($category->name); ?></span>
                    </label>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
                
            <div class="news-tab-bottom">
              <ul>
                <li>
                  <label for="tag-all">
                    <input type="radio" id="tag-all" name="search_tag[]" value="tag-all" onclick="submit();" checked />
                    <span>すべて</span>
                  </label>
                </li>
                <?php
                  $tags = get_tags(Array('hide_empty' => false));
                  foreach($tags as $tag):
                    $checked = "";
                    if ($_GET['search_tag'][0] === 'tag-all') {
                      $checked = "";
                    } else {
                      if(in_array($tag->term_id, (array)$search_tag)) $checked = " checked";
                    }
                ?>
                  <li>
                    <label>
                      <input type="radio" name="search_tag[]" value="<?php echo esc_attr($tag->term_id); ?>"<?php echo $checked; ?> onclick="submit();">
                      <span><?php echo esc_html($tag->name); ?></span>
                    </label>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </form>
                                                                      
          <!-- 3. 検索結果の取得と表示 -->
          <div class="news-list">
            <ul>
              <?php
                $the_query = new WP_Query($args);
                if($the_query->have_posts()) :
              ?>	
              <?php
                while($the_query->have_posts()) :
                  $the_query->the_post();
              ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="news-item-box">
                      <div class="news-item">
                        <div class="news-date"><?php the_time("Y.n.j"); ?></div>
                        <div class="news-tags news-tags-<?php foreach((get_the_category()) as $category) { echo $category->slug . ' ';} ?>">
                          <?php foreach((get_the_category()) as $tag) {
                            echo $category->name . ' ';
                          } ?>
                        </div>
                      </div>
                      <div class="news-description">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endwhile; wp_reset_postdata(); ?>
              <!-- 3. 検索結果の取得と表示 -->
              <nav class="pagination">
                <div class="nav-links">
                  <?php
                    // ページャーを設置
                    $big = 99999;
                    echo paginate_links(array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'total' => $the_query->max_num_pages,
                      'current' => $paged,
                      'prev_text' => '&lsaquo;',
                      'next_text' => '&rsaquo;',
                      'type' => 'list',
                    )); 
                  ?>
                </div>
              </nav>
              <?php else : ?>
                <div class="news-item-none">
                  <p>該当するお知らせはありませんでした。</p>
                </div>
              <?php endif; ?>

              </div>
            </ul>
          </div>
          <div class="news-button-wrapper">
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
  </section>

  </main><!-- #main -->
<?php
get_footer();