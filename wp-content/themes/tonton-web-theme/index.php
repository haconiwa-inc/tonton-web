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
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/index.css" media="all">
  <main id="primary" class="site-main">
    <section>
      <div class="kv">
        <img class="dis-pc" src="<?php echo get_template_directory_uri(); ?>/images/pc/kv_pc.jpg" alt="とんとんkv_pc">
        <img class="dis-sp" src="<?php echo get_template_directory_uri(); ?>/images/sp/kv_sp.jpg" alt="とんとんkv_sp">
        <div class="kv-button kv-modal-open">
          CM動画はこちら
          <div class="kv-button-inner">
            <div class="kv-button-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 15.96 12.424">
                <path id="Arrow005_1" data-name="Arrow005 1" d="M586.751,620.521l-5.655-5.3c-.775-.726-1.933.455-1.154,1.184l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.675l12.205-.011L579.916,626a.827.827,0,0,0,1.154,1.184l5.68-5.482A.855.855,0,0,0,586.751,620.521Z" transform="translate(-571.028 -614.997)" fill="#009844"/>
              </svg>
            </div>
          </div>
        </div>
        <div class="kv-modal-container">
          <div class="kv-modal-body">
            <div class="kv-modal-close">×</div>
            <div class="kv-modal-content">
              <div class="kv-modal-title">
                CM動画
              </div>
              <div class="kv-modal-movie">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rixYW_PsZrU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="top-notice">
        <div class="top-notice-title">
          とんとん住宅販売に<br class="dis-sp">お任せいただくメリットとは
        </div>
        <div class="top-notice-block">
          <div class="top-notice-item">
            <div class="top-notice-item-tag">
              <div class="top-notice-item-tag-box">
                <div class="top-notice-item-tag-text">Merit</div>
                <div class="top-notice-item-tag-num">01</div>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/notice_1.jpg" alt="">
            <div class="top-notice-description">
              ワンストップで不動産の購入・売却・リフォーム・相続のご相談に乗ることができます。
            </div>
          </div>
          <div class="top-notice-item">
            <div class="top-notice-item-tag">
              <div class="top-notice-item-tag-box">
                <div class="top-notice-item-tag-text">Merit</div>
                <div class="top-notice-item-tag-num">02</div>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/notice_2.jpg" alt="">
            <div class="top-notice-description">
              地元に密着している会社ならではの情報網でお客様にあった物件をご紹介できます。
            </div>
          </div>
          <div class="top-notice-item">
            <div class="top-notice-item-tag">
              <div class="top-notice-item-tag-box">
                <div class="top-notice-item-tag-text">Merit</div>
                <div class="top-notice-item-tag-num">03</div>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/notice_3.jpg" alt="">
            <div class="top-notice-description">
              お客様の情報を社員一同で管理し共有しているため、スピード感のある安心したご対応が可能です。
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="top-content">
        <div class="top-content-title">
          私たちにできること
        </div>
        <div class="top-content-wrapper">
          <div class="top-content-block">
            <div class="top-content-item">
              <div class="top-content-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_1.png" alt="">
              </div>
              <div class="top-content-box">
                <div class="top-content-item-title">売る</div>
                <div class="top-content-item-title-min">sell</div>
                <div class="top-content-item-subtitle">
                  マンション・戸建て・土地売却を<br class="dis-sp">検討の方へ
                </div>
                <div class="top-content-item-description dis-pc">
                  お客様のマンション・戸建て・土地等の不動産売却はとんとん住宅販売にお任せください。豊富な経験と地域に根付いた知識を生かし資産を最大化します。
                </div>
                <a href="/business/sell/">
                  <div class="top-content-button">
                    物件売却についてみる
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="top-content-item">
              <div class="top-content-item-img dis-sp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_2.png" alt="">
              </div>
              <div class="top-content-box top-content-box--right">
                <div class="top-content-item-title">買う・建てる</div>
                <div class="top-content-item-title-min">buy / build</div>
                <div class="top-content-item-subtitle">
                  取扱物件を見る
                </div>
                <div class="top-content-item-description dis-pc">
                  初めてのマンション・戸建て・土地等の不動産購入でも安心ください。豊富な経験と地域に根付いた知識を生かし資産を最大化します。
                </div>
                <a href="/business/buy/lineup/">
                  <div class="top-content-button m-start">
                    取扱物件を見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
                <a href="/business/buy/sold/">
                  <div class="top-content-button m-start">
                    過去の成約物件を見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
                <a href="/business/buy/">
                  <div class="top-content-button m-start">
                    物件購入について見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
              <div class="top-content-item-img dis-pc">
                <div class="top-content-item-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/character_icon1.png" alt="キャラクター">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_2.png" alt="">
              </div>
            </div>
            <div class="top-content-item">
              <div class="top-content-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_3.png" alt="">
              </div>
              <div class="top-content-box">
                <div class="top-content-item-title">修繕する</div>
                <div class="top-content-item-title-min">repair</div>
                <div class="top-content-item-subtitle">
                  お住まいのリフォーム・増改築を<br class="dis-sp">ご検討の方へ
                </div>
                <div class="top-content-item-description dis-pc">
                  リフォーム・リノベーションはとんとんにお任せください。スタイルに合わせた豊富な事例やわかりやすいパッケージを取り揃えてます。
                </div>
                <a href="/business/reform/results-archive/">
                  <div class="top-content-button top-content-button--long m-start">
                    過去のリフォーム施工例を見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
                <a href="/business/reform/">
                  <div class="top-content-button top-content-button--long m-start">
                    リフォーム・リノベーションについて見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="top-content-item-second">
              <div class="top-content-box">
                <div class="top-content-item-title">借りる</div>
                <div class="top-content-item-title-min">rent</div>
                <div class="top-content-item-subtitle">
                  賃貸をご検討中の方へ
                </div>
                <div class="top-content-item-description dis-pc">
                  注文住宅と同じ品質や設備で建てられた賃貸住宅がございます。敷地内駐車場には、積雪時に安心のロードヒーティングが備えつけられています。
                </div>
                <a href="/business/chintai/">
                  <div class="top-content-button m-start">
                    取扱物件を見る
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
              <div class="top-content-box">
                <div class="top-content-item-title">投資する</div>
                <div class="top-content-item-title-min">invest</div>
                <div class="top-content-item-subtitle">
                  不動産投資をご検討中の方へ
                </div>
                <div class="top-content-item-description dis-pc">
                  いまの時代、１つの資産に頼るには不安です。貯金だけじゃ将来や老後が不安…そんな方に不動産投資をご提案させていただきます。
                </div>
                <a href="/contact/">
                  <div class="top-content-button m-start">
                    お問い合わせ
                    <div class="top-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="top-slider">
        <div class="swiper infinite-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_01.png" alt="slider1" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_02.png" alt="slider2" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_03.png" alt="slider3" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_04.png" alt="slider4" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_05.png" alt="slider5" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_06.png" alt="slider6" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_07.png" alt="slider7" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_08.png" alt="slider8" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_09.png" alt="slider9" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_10.png" alt="slider10" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_11.png" alt="slider11" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_12.png" alt="slider12" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_13.png" alt="slider13" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_14.png" alt="slider14" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_15.png" alt="slider15" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_16.png" alt="slider16" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_17.png" alt="slider17" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_18.png" alt="slider18" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_19.png" alt="slider19" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_20.png" alt="slider20" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_21.png" alt="slider21" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_22.png" alt="slider22" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_23.png" alt="slider23" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_24.png" alt="slider24" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_25.png" alt="slider25" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_26.png" alt="slider26" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_27.png" alt="slider27" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_28.png" alt="slider28" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_29.png" alt="slider29" /></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_30.png" alt="slider30" /></div>
          </div>
        </div>
      </div>
    </section>

    <section>
      
      <div class="top-news">
        <div class="top-news-title">お知らせ</div>
        <div class="top-news-wrapper">
          <div class="top-news-list">
          <ul>
            <?php
              $args = array(
                'posts_per_page' => 5 // 表示件数の指定
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): // ループの開始
              setup_postdata( $post ); // 記事データの取得
            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="top-news-item-box">
                    <div class="top-news-item">
                      <div class="top-news-date"><?php the_time("Y.n.j"); ?></div>
                      <div class="top-news-tags top-news-tags-<?php foreach((get_the_category()) as $category) { echo $category->slug . ' ';} ?>">
                        <?php foreach((get_the_category()) as $category) {
                          echo $category->name . ' ';
                        } ?>
                      </div>
                    </div>
                    <div class="top-news-description">
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
          <div class="top-news-button-wrapper">
            <a href="/news/">
              <div class="top-news-button">
                お知らせ一覧
                <div class="top-news-icon dis-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/character_icon2.png" alt="キャラクター">
                </div>
                <div class="top-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                    <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="top-news-icon dis-pc">
          <img src="<?php echo get_template_directory_uri(); ?>/images/character_icon2.png" alt="キャラクター">
        </div>
      </div>
    </section>

    <section>
      <div class="top-about-overWrapper">
        <div class="top-about">
          <div class="top-about-title">私たちについて</div>
          <div class="top-about-wrapper">
            <div class="top-about-block">
              <a href="/business/">
                <img src="wp-content/themes/tonton-web-theme/images/about_1.png" alt="">
                <div class="top-about-box">
                  <div class="top-about-box-text">とんとんのお仕事</div>
                  <div class="top-about-arrorw">→</div>
                </div>
              </a>
            </div>
            <div class="top-about-block">
              <a href="/company-inq/#greeting">
                <img src="wp-content/themes/tonton-web-theme/images/about_2.png" alt="">
                <div class="top-about-box">
                  <div class="top-about-box-text">代表挨拶</div>
                  <div class="top-about-arrorw">→</div>
                </div>
              </a>
            </div>
            <div class="top-about-block">
              <a href="/company-inq/#overview">
                <img src="wp-content/themes/tonton-web-theme/images/about_3.png" alt="">
                <div class="top-about-box">
                  <div class="top-about-box-text">会社概要</div>
                  <div class="top-about-arrorw">→</div>
                </div>
              </a>
            </div>
          </div>
          <div class="top-about-subtitle">当社へのアクセス</div>
          <div class="top-about-wrapper">
            <div class="top-about-item">
              <div class="top-about-item-title">本社</div>
              <div class="top-about-item-text">〒063-0034　札幌市西区西野4条3丁目10番1号</div>
              <div class="top-about-item-text">最寄り駅：地下鉄東西線 発寒南駅から徒歩20分</div>
              <div class="top-about-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.6156245691864!2d141.27565731519098!3d43.07055109792871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b282f6489ac1b%3A0xd45f1a67b852d28!2z44CSMDYzLTAwMzQg5YyX5rW36YGT5pyt5bmM5biC6KW_5Yy66KW_6YeO77yU5p2h77yT5LiB55uu77yR77yQ4oiS77yR!5e0!3m2!1sja!2sjp!4v1661657822054!5m2!1sja!2sjp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="top-about-item">
              <div class="top-about-item-title">中央店</div>
              <div class="top-about-item-text">〒064-0920　札幌市中央区南20条西10丁目1番1号</div>
              <div class="top-about-item-text">最寄り駅：札幌市電 石山通駅から徒歩20分</div>
              <div class="top-about-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.3842022163735!2d141.34368531518976!3d43.03334720030831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a1036f06aa5%3A0xc115ef6fd986d426!2z44CSMDY0LTA5MjAg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yS77yQ5p2h6KW_77yR77yQ5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1661657879810!5m2!1sja!2sjp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="top-about-icon dis-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/character_icon3.png" alt="キャラクター">
          </div>
        </div>
        <div class="top-about-icon dis-pc">
          <img src="<?php echo get_template_directory_uri(); ?>/images/character_icon3.png" alt="キャラクター">
        </div>
      </div>
    </section>
  </main><!-- #main -->

<?php
get_footer();
