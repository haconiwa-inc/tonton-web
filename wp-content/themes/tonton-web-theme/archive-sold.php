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
          <li><a href="/news/">お知らせ一覧</a></li>
          <li><?php the_title(); ?></li>
        </ul>

        <div class="sold-search">
          <div class="sold-serch-box">
            <div class="sold-search-text">エリア</div>
            <div class="sold-search-list dis-pc">
              <input type="checkbox" id="" name="中央区">
              <label for="">中央区</label>
              <input type="checkbox" id="" name="北区">
              <label for="">北区</label>
              <input type="checkbox" id="" name="東区">
              <label for="">東区</label>
              <input type="checkbox" id="" name="白石区">
              <label for="">白石区</label>
              <input type="checkbox" id="" name="豊平区">
              <label for="">豊平区</label>
              <input type="checkbox" id="" name="厚別区">
              <label for="">厚別区</label>
              <input type="checkbox" id="" name="南区">
              <label for="">南区</label>
              <input type="checkbox" id="" name="西区">
              <label for="">西区</label>
              <input type="checkbox" id="" name="手稲区">
              <label for="">手稲区</label>
              <input type="checkbox" id="" name="清田区">
              <label for="">清田区</label>
            </div>
            <div class="sold-search-list dis-sp">
              <input type="checkbox" id="" name="中央区">
              <label for="">中央区</label>
              <input type="checkbox" id="" name="北区">
              <label for="">北区</label>
              <input type="checkbox" id="" name="東区">
              <label for="">東区</label>
              <input type="checkbox" id="" name="白石区">
              <label for="">白石区</label>
            </div>
            <div class="sold-search-list dis-sp">
              <input type="checkbox" id="" name="豊平区">
              <label for="">豊平区</label>
              <input type="checkbox" id="" name="厚別区">
              <label for="">厚別区</label>
              <input type="checkbox" id="" name="南区">
              <label for="">南区</label>
              <input type="checkbox" id="" name="西区">
              <label for="">西区</label>
            </div>
            <div class="sold-search-list dis-sp">
              <input type="checkbox" id="" name="手稲区">
              <label for="">手稲区</label>
              <input type="checkbox" id="" name="清田区">
              <label for="">清田区</label>
            </div>
          </div>
          <div class="sold-serch-box">
            <div class="sold-search-text">物件種別</div>
            <div class="sold-search-list">
              <input type="checkbox" id="" name="中古">
              <label for="">中古</label>
              <input type="checkbox" id="" name="新築">
              <label for="">新築</label>
              <input type="checkbox" id="" name="戸建">
              <label for="">戸建</label>
              <input type="checkbox" id="" name="マンション">
              <label for="">マンション</label>
              <input type="checkbox" id="" name="土地">
              <label for="">土地</label>
            </div>
          </div>
          <div class="sold-button-wrapper">
            <div class="top-button top-button--green">
              <div class="top-buttonInner">
                <a href="/">
                  検索する
                </a>
                <div class="top-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                    <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="sold-content">
          <div class="sold-info">
            <div class="sold-info-text">
              エリア：<span>中央区</span>
            </div>
            <div class="sold-info-text">
              物件種別：<span>中古</span>
            </div>
          </div>

          <ul>
            <?php
              $args = array(
                'post_type' => 'sold',
                'posts_per_page' => 10,
              );
              if ( have_posts() ) :
              while ( have_posts() ) :
              the_post();
              $my_posts = get_posts($args);
              $img_obj_field = get_field_object('estate-img');
            ?>
              <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                <li>
                  <a href="<?php the_permalink() ?>">
                    <div class="sold-item">
                      <?php
                        $image = $img_obj_field['value'][0]['estate-img-single'];
                        $size = 'medium';
                      ?>
                      <?php echo wp_get_attachment_image( $image, $size ); ?>
                      <div class="sold-item-text">
                        <?php the_title(); ?>
                      </div>
                    </div>      
                  </a>
                </li>
              <?php endforeach; ?>
            <?php 
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </ul>
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
