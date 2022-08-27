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
// TODO: ヘッダーあとから入れる get_header();
?>
<!-- TODO: ヘッダーあとから入れる -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/tonton-web-theme/css/pages/sell.css" media="screen" >
</head>
<!-- TODO: パンくずで使う -->
<?#php single_post_title(); ?>

	<main id="primary" class="site-main">
		 <div class="sell-contents">
			<div class="sell-title-area">
				<h1 class="sell-title">
					<img src="/wp-content/themes/tonton-web-theme/img/business/sell_title.png" alt="物件購入">
				</h1>
			</div>
				<div class="sell-block">
					<h2 class="sell-subTitle">
					とんとんでの物件売却
					</h2>
					<div class="sell-leadText">
					とんとん住宅販売では、不動産の無料査定等・自社での買取を行なっています。<br />
					札幌市内全域の土地・中古住宅・マンションを豊富に取り扱っています。
					</div>
				</div>
				<div class="sell-block sell-block--wull">
					<div class="sell-blockInner">
						<h2 class="sell-pointsTitle">とんとんで物件を売却するポイント</h2>
						<ul class="sell-pointList">
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/img/business/point01.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/img/business/point02.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/img/business/point03.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/img/business/point03.png" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="sell-block">
					<h2 class="sell-flowTitle">
						売却の流れ
					</h2>
					<ul class="sell-flowList">
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step01.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								売却相談
								</p>
								<div class="sell-stepContent">売却をしたい物件を一度見させていただき、その際に物件詳細の確認や売却時期等のご相談をいたします。</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step02.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								売却価格のご提示
								</p>
								<div class="sell-stepContent">
								ご自宅を見させていただいた上で、売却が見込める正確な価格をご提示いたします。<br />
								併せて、売主様に合う売却方法のご提案をいたします。
								</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step03.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
									物件案内
								</p>
								<div class="sell-stepContent">
									ご希望に沿う物件を紹介し、営業担当者が気になる物件のご案内をします。<br />
									購入したい物件が見つかりましたら、購入申込へ！
								</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step04.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								媒介契約
								</p>
								<div class="sell-stepContent">不動産の売却をお任せしていただくための契約となります。</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step05.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								売却活動
								</p>
								<div class="sell-stepContent">
								購入希望者を探す為の売却活動を行います。皆様からお預かりした不動産を早急に自社HPや不動産検索サイト（SUUMO・アットホーム・ハウスタウン）に物件の広告を出し、多くの購入希望者に不動産の情報を伝えます。<br />
								なるべく早く売却できるように、スタッフ全員で協力しスピーディーに動きます。
								</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step06.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								売買契約
								</p>
								<div class="sell-stepContent">
								売主様・買主様の売却条件、購入条件の合意のもと、売買契約に進みます。売買契約の流れをしっかり説明しご理解頂いてから手続きを進めます。契約締結後に、売主様が行わなければならない手続きも担当スタッフがお手伝いします。
								</div>
							</div>
						</li>
						<li>
							<div class="sell-stepIcon">
								<img src="/wp-content/themes/tonton-web-theme/img/business/step07.png" alt="">
							</div>
							<div class="sell-stepText">
								<p class="sell-stepTitle">
								残代金の受領と引渡し
								</p>
								<div class="sell-stepContent">残代金を受領し、売買契約時に定めた状態で物件の引き渡しを行います。同時に司法書士が所有権移転登記をします。</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="sell-block sell-block--wull">
					<div class="sell-blockInner">
						<h2 class="sell-pointsTitle">代表的な売却事例</h2>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// TODO: フッターあとから入れる get_footer();
?>
