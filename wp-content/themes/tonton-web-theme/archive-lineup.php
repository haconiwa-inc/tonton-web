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
          <li>すべて</li>
          <li>新築</li>
          <li>中古</li>
          <li>建築中</li>
          <li>土地</li>
        </ul>
        <div class="lineup-box lineup-box1">
          <ul class="lineup-list">
            <li class="lineup-item">
              <div class="lineup-img">
                <img src="/wp-content/themes/tonton-web-theme/images/business/lineup_item01.png" alt="">
              </div>
              <div class="lineup-textArea">
                <div class="lineup-textBox">
                  <p class="lineup-access">西区発寒14条3丁目{住所}</p>
                  <p class="lineup-price"><span>4,280万円{金額}</span></p>
                  <p class="lineup-accessDetail">札幌市西区発寒１４条３丁目４-１８{住所詳細}</p>
                  <p class="lineup-minutes">ＪＲ函館本線「発寒中央」駅 徒歩２分{駅徒歩分}</p>
                  <div class="lineup-detail">3LDK/木造2階建/建物面積101.85㎡(約30.75坪)/土地面積129.75㎡(約39.24坪)/2021年9月築{その他詳細}</div>
                </div>
                <ul class="lineup-buttonArea">
                  <li class="lineup-button lineup-button--white">
                    <div class="lineup-buttonInner">
                      <a href="#">
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
                      <a href="#">
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
            <li class="lineup-item">
              <div class="lineup-img">
                <img src="/wp-content/themes/tonton-web-theme/images/business/lineup_item01.png" alt="">
              </div>
              <div class="lineup-textArea">
                <div class="lineup-textBox">
                  <p class="lineup-access">{住所}</p>
                  <p class="lineup-price"><span>{金額}</span></p>
                  <p class="lineup-accessDetail">{住所詳細}</p>
                  <p class="lineup-minutes">{駅徒歩分}</p>
                  <div class="lineup-detail">{その他詳細}</div>
                </div>
                <ul class="lineup-buttonArea">
                  <li class="lineup-button lineup-button--white">
                    <a href="#">
                      詳細をみる
                    </a>
                  </li>
                  <li class="lineup-button lineup-button--green">
                    <a href="#">
                      お問い合わせ
                    </a>
                  </li>
                </ul>
              </div>
            </li>
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
  <?#php if ( have_posts() ) : ?>

<header class="page-header">
  <?#php
  // the_archive_title( '<h1 class="page-title">', '</h1>' );
  // the_archive_description( '<div class="archive-description">', '</div>' );
  #?>
</header><!-- .page-header -->

<?#php
// /* Start the Loop */
// while ( have_posts() ) :
//   the_post();

//   /*
//    * Include the Post-Type-specific template for the content.
//    * If you want to override this in a child theme, then include a file
//    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
//    */
//   get_template_part( 'template-parts/content', get_post_type() );

// endwhile;

// the_posts_navigation();

// else :

// get_template_part( 'template-parts/content', 'none' );

// endif;
#?>
<?php
get_footer();
?>
