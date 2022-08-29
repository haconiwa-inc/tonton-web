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
	<link rel="stylesheet" href="/wp-content/themes/tonton-web-theme/css/header.css" media="all">
	<link rel="stylesheet" href="/wp-content/themes/tonton-web-theme/css/footer.css" media="all">
	<link rel="stylesheet" href="/wp-content/themes/tonton-web-theme/css/index.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
				<div class="header-top pc">
					<div class="header-top-menu">
						<a href="<?php echo esc_url( site_url( '/news' ) ); ?>">
							<div class="header-top-menu-item">お知らせ</div>
						</a>
						<div class="header-top-menu-item">事業案内</div>
						<div class="header-top-menu-item">会社概要</div>
						<div class="header-top-menu-item">お問い合せ</div>
						<a href="">
							<img src="/wp-content/themes/tonton-web-theme/images/facebook_icon.png" alt="">
						</a>
					</div>
				</div>
				<div class="header-bottom">
					<div class="header-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="/wp-content/themes/tonton-web-theme/images/pc/logo_pc.png" alt="とんとんロゴ">
						</a>
					</div>
					<div class="header-bottom-wrapper pc">
						<div class="header-bottom-menu">
							<div class="header-bottom-menu-item">売る</div>
							<div class="header-bottom-menu-item">買う・建てる</div>
							<div class="header-bottom-menu-item">借りる</div>
							<div class="header-bottom-menu-item">直す</div>
						</div>
					</div>
					<div class="responsive-btn sp">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="header-nav-wrapper sp">
						<nav class="header-nav">
							<div class="header-nav-wrapper">
								<div class="header-nav-lists">
									<ul class="header-list-box">
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													<div class="header-nav-text">TOP</div>
												</div>
											</a>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													
													<div class="header-nav-text">事業案内</div>
												</div>
											</a>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
												
													<div class="header-nav-text">会社概要</div>
												</div>
											</a>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													
													<div class="header-nav-text">お知らせ</div>
												</div>
											</a>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													<div class="header-nav-text">お問い合せ</div>
												</div>
											</a>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													<div class="header-nav-text">プライバシーポリシー</div>
												</div>
											</a>
										</li>
									</ul>
									<ul class="header-list-box">
										<li>
											<div class="header-item-box">
												<a class="header-nav-link" href="">
													<div class="header-nav-text text-large">売る</div>
												</a>
												<a href="">
													<div class="header-nav-text">- 売却事例</div>
												</a>
											</div>
										</li>
										<li>
											<div class="header-item-box">
												<a class="header-nav-link" href="">
													<div class="header-nav-text text-large">買う・建てる</div>
												</a>
												<a href="">
													<div class="header-nav-text">- 売買物件</div>
												</a>
												<a href="">
													<div class="header-nav-text">- 過去の成約物件</div>
												</a>
											</div>
										</li>
										<li>
											<a class="header-nav-link" href="">
												<div class="header-item-box">
													<a class="header-nav-link" href="">
														<div class="header-nav-text text-large">直す</div>
													</a>
													<a href="">
														<div class="header-nav-text">- 修繕事例</div>
													</a>
												</div>
											</a>
										</li>
										<li>
											<div class="header-item-box">
												<a class="header-nav-link" href="">
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
