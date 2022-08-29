<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonton-web-theme
 */
	get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/business.css" media="screen" >

	<main id="primary" class="site-main">
		 <div class="business-contents">
			<div class="business-title-area">
				<h1 class="business-title">
					<img src="<?php echo get_template_directory_uri();?>/images/business/business_title.png" alt="事業案内">
				</h1>
			</div>
			<ul class="breadcrumbs">
				<li><a href="/">TOP</a></li>
				<li>事業案内</li>
			</ul>
				<div class="business-block business-block--top">
					<h2 class="business-subTitle">
						不動産の価値を最大化できるプランニング力に自信があります
					</h2>
					<div class="business-leadText">
						不動産の購入・売却・新築・リフォーム全てを網羅できる“総合不動産会社”としてお客様にとって最善の『住み替え』を提案します！<br />
						住まいのこと、何でもご相談下さい。<br />
						“住まいが変われば暮らしが楽しくなる”をモットーにとんとん住宅販売の専門スタッフがサポートします。
					</div>
					<ul class="business-itemList">
						<li>
							<a href="/business/sell">
								<div class="business-itemCapture">
									<img src="<?php echo get_template_directory_uri();?>/images/business/item01.jpg" alt="">
								</div>
								<div>
									<p class="business-itemTitle">物件売却</p>
									<div class="business-itemContent">
										売却が成功するか否かは、いくつかコツがあります。そのコツの部分、すべてお伝えします。一度、ご相談下さい。
									</div>
								</div>
								<div class="business-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
										<path d="M1089.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.205-.01L1082.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1089.751,843.521Z" transform="translate(-1074.028 -837.997)" fill="#009844"/>
									</svg>
								</div>
							</a>
						</li>
						<li>
							<a href="/business/buy">
								<div class="business-itemCapture">
									<img src="<?php echo get_template_directory_uri();?>/images/business/item02.jpg" alt="">
								</div>
								<div>
									<p class="business-itemTitle">物件購入</p>
									<div class="business-itemContent">
										“この物件良いな”だけでは不動産の購入はリスクがあります。資金計画など、すべての角度から最適な物件をご提案させていただきます。一度、ご相談ください。
									</div>
								</div>
								<div class="business-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
										<path d="M1089.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.205-.01L1082.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1089.751,843.521Z" transform="translate(-1074.028 -837.997)" fill="#009844"/>
									</svg>
								</div>
							</a>
						</li>
						<li>
							<a href="/business/reform">
								<div class="business-itemCapture">
									<img src="<?php echo get_template_directory_uri();?>/images/business/item03.jpg" alt="">
								</div>
								<div>
									<p class="business-itemTitle">リフォーム / リノベーション</p>
									<div class="business-itemContent">
										ただ家をデザインするのではなく、家族の暮らしや想いをデザインという形に変えてご提案します。
									</div>
								</div>
								<div class="business-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
										<path d="M1089.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.205-.01L1082.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1089.751,843.521Z" transform="translate(-1074.028 -837.997)" fill="#009844"/>
									</svg>
								</div>
							</a>
						</li>
					</ul>
					<div class="business-button business-button--green">
						<div class="business-buttonInner">
							<a href="/contact">
								お問い合わせ
							</a>
						</div>
					</div>
					<ul class="business-realEstateList">
						<li>
							<p class="business-realEstateTitle">不動産投資</p>
							<div class="business-realEstateContent">
								注文住宅と同じ品質や設備で建てられた賃貸住宅がございます。敷地内駐車場には、積雪時に安心のロードヒーティングが備えつけられています。
							</div>
							<div class="business-button business-button--green">
								<a href="#">
									取扱物件を見る
								</a>
							</div>
						</li>
						<li>
							<p class="business-realEstateTitle">不動産投資をご検討中の方へ</p>
							<div class="business-realEstateContent">
								いまの時代、１つの資産に頼るには不安です。貯金だけじゃ将来や老後が不安…そんな方に不動産投資をご提案させていただきます。
							</div>
							<div class="business-button business-button--green">
								<a href="/content">
									お問い合わせ
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="business-button business-button--green">
						<div class="business-buttonInner business-buttonInner--small">
							<a href="/">
								TOPへ戻る
							</a>
							<div class="business-icon">
								<img src="<?php echo get_template_directory_uri();?>/images/business/tonton-boy.png" alt="">
							</div>
						</div>
					</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
	get_footer();
?>
