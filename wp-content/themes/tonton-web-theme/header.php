<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tonton-web-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="og:url" content="<?php echo get_template_directory_uri();?>/images/common/tonton_ogp.jpg">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/common/tonton_favicon.ico" />
  <?php if (is_home() || is_front_page()) : ?>
    <meta name="description" content="札幌の不動産のことならとんとん住宅販売。ワンストップで不動産の購入・売却・リフォーム・相続のご相談に乗ることができます。">
  <?php elseif (is_category() || is_singular('post')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトのお知らせページです。">
  <?php elseif (is_category() || is_singular('sold')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの過去の成約物件ページです。">
  <?php elseif (is_category() || is_singular('archive')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの過去のリフォーム施工例ページです。">
  <?php elseif (is_category() || is_singular('lineup')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの売買物件ページです。物件のご紹介・現地ご案内・資金計画の提案・住宅ローンのご相談等も行なっております。">
  <?php elseif (is_category() || is_singular('chintai')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの賃貸物件ページです。">
  <?php elseif (is_page('company-inq')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの会社概要・スタッフ紹介ページです。">
  <?php elseif (is_page('policy')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトのプライバシーポリシーページです。">
  <?php elseif (is_page('business')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの事業案内ページです。不動産の価値を最大化できるプランニング力に自信があります。">
  <?php elseif (is_page('reform')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトのリフォーム／リノベーションページです。購入と併せたリフォームのご提案、お客様のお住まいのリフォーム相談、戸建・マンション問わずリノベーションのご提案が可能です。">
  <?php elseif (is_page('sell')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの物件売却ページです。とんとん住宅販売では、不動産の無料査定等・自社での買取を行なっています。札幌市内全域の土地・中古住宅・マンションを豊富に取り扱っています。">
  <?php elseif (is_page('buy')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトの物件購入ページです。札幌市内全域の土地・中古住宅・マンションを豊富に取り扱っています。">
  <?php elseif (is_page('contact') || is_page('confirm') || is_page('comple')) : ?>
    <meta name="description" content="とんとん住宅販売株式会社企業サイトのお問い合わせページです。">
  <?php else: ?>
    <meta name="description" content="<?php $post_type = get_queried_object(); echo esc_attr($post_type->description); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/header.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/footer.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/common.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/GenJyuuGothic-Regular.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/GenJyuuGothic-Bold.css" media="all">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://use.typekit.net/kbr7cbg.css">
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tonton-web-theme' ); ?></a>

  <header id="masthead" class="site-header">
    <div class="site-branding">
      <div class="header">
        <div class="header-top dis-pc">
          <div class="header-top-menu">
            <div class="header-top-menu-item">
              <a href="/news/">
                お知らせ
              </a>
            </div>
            <div class="header-top-menu-item">
              <a href="/business/">
                事業案内
              </a>
            </div>
            <div class="header-top-menu-item">
              <a href="/company-inq/">
                会社概要
              </a>
            </div>
            <div class="header-top-menu-item">
              <a href="/contact/">
                お問い合せ
              </a>
            </div>
          </div>
        </div>
        <div class="header-bottom">
          <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo get_template_directory_uri();?>/images/pc/logo_pc.png" alt="とんとんロゴ">
            </a>
          </div>
          <div class="header-bottom-wrapper dis-pc">
            <div class="header-bottom-menu">
              <div class="header-bottom-menu-item">
                <a href="/business/sell/">
                  売る
                </a>
              </div>
              <div class="header-bottom-menu-item">
                <a href="/business/buy/">
                  買う・建てる
                </a>
              </div>
              <div class="header-bottom-menu-item">
                <a href="/business/chintai/">
                  借りる
                </a>
              </div>
              <div class="header-bottom-menu-item">
                <a href="/business/reform/">
                  直す
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-btn dis-sp">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="header-nav-wrapper dis-sp">
            <nav class="header-nav">
              <div class="header-nav-wrapper">
                <div class="header-nav-lists">
                  <ul class="header-list-box">
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <div class="header-nav-text">
                            <a href="/">
                              TOP
                            </a>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <div class="header-nav-text">
                            <a href="/business/">
                              事業案内
                            </a>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">                
                          <div class="header-nav-text">
                          <a href="/company-inq/">
                            会社概要
                          </a>
                        </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <div class="header-nav-text">
                            <a href="/news/">
                              お知らせ
                            </a>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <div class="header-nav-text">
                            <a href="/contact/">
                              お問い合せ
                            </a>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <div class="header-nav-text">
                            <a href="/policy/">
                              プライバシーポリシー
                            </a>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <ul class="header-list-box">
                    <li>
                      <div class="header-item-box">
                        <a class="header-nav-link" href="/business/sell/">
                          <div class="header-nav-text text-large">売る</div>
                        </a>
                        <a href="/business/buy/lineup">
                          <div class="header-nav-text">- 売却事例</div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="header-item-box">
                        <a class="header-nav-link" href="/business/buy/">
                          <div class="header-nav-text text-large">買う・建てる</div>
                        </a>
                        <a href="/business/buy/lineup/">
                          <div class="header-nav-text">- 売買物件</div>
                        </a>
                        <a href="/business/buy/sold/">
                          <div class="header-nav-text">- 過去の成約物件</div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="header-nav-link" href="">
                        <div class="header-item-box">
                          <a class="header-nav-link" href="/business/reform/">
                            <div class="header-nav-text text-large">直す</div>
                          </a>
                          <a href="/business/reform/results-archive/">
                            <div class="header-nav-text">- 修繕事例</div>
                          </a>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="header-item-box">
                        <a class="header-nav-link" href="/business/chintai/">
                          <div class="header-nav-text text-large">借りる</div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div><!-- .site-branding -->
  </header><!-- #masthead -->
