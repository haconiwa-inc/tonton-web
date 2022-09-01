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
	<link rel="stylesheet" href="/wp-content/themes/tonton-web-theme/css/pages/news.css" media="all">
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
      <div class="news-content wapper">
        <ul class="breadcrumbs">
          <li><a href="http://webliker.info">TOP</a></li>
          <li>お知らせ一覧</li>
        </ul>
        <div class="news-tab-top pc">
          <ul>
            <li class="news-select">すべて</li>
            <li>ニュース</li>
            <li>新規</li>
            <li>成約</li>
            <li>価格変更</li>
          </ul>
        </div>
        <div class="news-tab-top sp">
          <ul>
            <li class="news-select">すべて</li>
            <li>ニュース</li>
            <li>新規</li>
          </ul>
          <ul>
            <li>成約</li>
            <li>価格変更</li>
          </ul>
        </div>
        <div class="news-tab-bottom">
          <ul>
            <li class="news-select">すべて</li>
            <li>2022</li>
            <li>2021</li>
          </ul>
        </div>
        <div class="news-wrapper">
          <div class="news-list">
            <ul>
              <?php
                $args = array(
                  'posts_per_page' => 10 // 表示件数の指定
                );
                $posts = get_posts( $args );
                foreach ( $posts as $post ): // ループの開始
                setup_postdata( $post ); // 記事データの取得
              ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="news-item-box">
                      <div class="news-item">
                        <div class="news-date"><?php the_time("Y.n.j"); ?></div>
                        <div class="news-tags news-tags-<?php foreach((get_the_tags()) as $tag) { echo $tag->slug . ' ';} ?>">
                          <?php foreach((get_the_tags()) as $tag) {
                            echo $tag->name . ' ';
                          } ?>
                        </div>
                      </div>
                      <div class="news-description">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </li>
              <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
              ?>
            </ul>
          </div>
          <nav class="pagination">
            <div class="nav-links">
              <a class="prev" href="">&lsaquo;</a>
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="">2</a>
              <a class="page-numbers" href="">3</a>
              <a class="page-numbers" href="">4</a>
              <a class="page-numbers" href="">5</a>
              <a class="page-numbers pc" href="">6</a>
              <a class="page-numbers pc" href="">7</a>
              <a class="page-numbers pc" href="">8</a>
              <a class="page-numbers pc" href="">9</a>
              <a class="page-numbers pc" href="">10</a>
              <span class="page-numbers dots">…</span>
              <a class="page-numbers" href="">62</a>
              <a class="next" href="">&rsaquo;</a>
            </div>
          </nav>
        </div>
        <div class="news-button-wrapper">
          <div class="news-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/news/character-news-1.png" alt="">
          </div>
          <div class="news-button">
            TOPへ戻る
          </div>
        </div>
      </div>
    </div>
  </section>

  </main><!-- #main -->
<?php
get_footer();