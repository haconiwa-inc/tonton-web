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
<link rel="stylesheet" href="/wp-content/themes/tonton-web-theme/css/pages/lineup.css" >

	<main id="primary" class="site-main">

		<?php
		// TODO: 一旦コメントアウト
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

		<div class="lineUp-contents">
			<div class="lineUp-title-area">
				<h1 class="lineUp-title">
					<img src="/wp-content/themes/tonton-web-theme/img/business/lineup_title.png" alt="売買物件一覧">
				</h1>
			</div>
			<div class="lineUp-block">
				<ul class="lineUp-tab">
					<li>すべて</li>
					<li>新築</li>
					<li>中古</li>
					<li>建築中</li>
					<li>土地</li>
				</ul>
				<div class="lineUp-box lineUp-box1">
					<ul class="lineUp-list">
						<li class="lineUp-item">
							<div class="lineUp-img">
								<img src="/wp-content/themes/tonton-web-theme/img/business/lineup_item01.png" alt="">
							</div>
							<div class="lineUp-textArea">
								<div class="lineUp-textBox">
									<p class="lineUp-access">西区発寒14条3丁目{住所}</p>
									<p class="lineUp-price"><span>4,280万円{金額}</span></p>
									<p class="lineUp-accessDetail">札幌市西区発寒１４条３丁目４-１８{住所詳細}</p>
									<p class="lineUp-minutes">ＪＲ函館本線「発寒中央」駅 徒歩２分{駅徒歩分}</p>
									<div class="lineUp-detail">3LDK/木造2階建/建物面積101.85㎡(約30.75坪)/土地面積129.75㎡(約39.24坪)/2021年9月築{その他詳細}</div>
								</div>
								<ul class="lineUp-buttonArea">
									<li class="lineUp-button lineUp-button--white">
										<a href="#">
											詳細をみる
										</a>
									</li>
									<li class="lineUp-button lineUp-button--green">
										<a href="#">
											お問い合わせ
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="lineUp-item">
							<div class="lineUp-img">
								<img src="/wp-content/themes/tonton-web-theme/img/business/lineup_item01.png" alt="">
							</div>
							<div class="lineUp-textArea">
								<div class="lineUp-textBox">
									<p class="lineUp-access">{住所}</p>
									<p class="lineUp-price"><span>{金額}</span></p>
									<p class="lineUp-accessDetail">{住所詳細}</p>
									<p class="lineUp-minutes">{駅徒歩分}</p>
									<div class="lineUp-detail">{その他詳細}</div>
								</div>
								<ul class="lineUp-buttonArea">
									<li class="lineUp-button lineUp-button--white">
										<a href="#">
											詳細をみる
										</a>
									</li>
									<li class="lineUp-button lineUp-button--green">
										<a href="#">
											お問い合わせ
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!-- <div class="lineUp-box lineUp-box2"></div> -->
			</div>
		</div>

	</main><!-- #main -->

<?php
// TODO: フッターあとから入れる get_footer();
?>
