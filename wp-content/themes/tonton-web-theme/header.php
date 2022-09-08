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
  <link rel="profile" href="https://gmpg.org/xfn/11">
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
            <a href="">
              <img src="<?php echo get_template_directory_uri();?>/images/facebook_icon.png" alt="">
            </a>
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
                <a href="/chintai/">
                  借りる
                </a>
              </div>
              <div class="header-bottom-menu-item">
                <a href="/reform/">
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
