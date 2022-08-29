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

	<main id="primary" class="site-main">
		<section>
			<div class="kv">
				<img class="pc" src="/wp-content/themes/tonton-web-theme/images/pc/kv_pc.png" alt="とんとんkv_pc">
				<img class="sp" src="/wp-content/themes/tonton-web-theme/images/sp/kv_sp.png" alt="とんとんkv_sp">
				<h1>
					最大限のメリットを生む<br>
					不動産プロフェッショナルからの<br>
					ご提案
				</h1>
				<div class="kv-button kv-modal-open">CM動画はこちら</div>
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
					とんとん住宅販売に<br class="sp-br">お任せいただくメリットとは
				</div>
				<div class="top-notice-block">
					<div class="top-notice-item">
						<div class="top-notice-item-tag">
							<div class="top-notice-item-tag-box">
								<div class="top-notice-item-tag-text">merit</div>
								<div class="top-notice-item-tag-num">0 1</div>
							</div>
						</div>
						<img src="/wp-content/themes/tonton-web-theme/images/notice_1.png" alt="">
						<div class="top-notice-description">
							ワンストップで不動産の購入・売却・リフォーム・相続のご相談に乗ることができます。
						</div>
					</div>
					<div class="top-notice-item">
						<div class="top-notice-item-tag">
							<div class="top-notice-item-tag-box">
								<div class="top-notice-item-tag-text">merit</div>
								<div class="top-notice-item-tag-num">0 2</div>
							</div>
						</div>
						<img src="/wp-content/themes/tonton-web-theme/images/notice_2.png" alt="">
						<div class="top-notice-description">
							ワンストップで不動産の購入・売却・リフォーム・相続のご相談に乗ることができます。
						</div>
					</div>
					<div class="top-notice-item">
						<div class="top-notice-item-tag">
							<div class="top-notice-item-tag-box">
								<div class="top-notice-item-tag-text">merit</div>
								<div class="top-notice-item-tag-num">0 3</div>
							</div>
						</div>
						<img src="/wp-content/themes/tonton-web-theme/images/notice_3.png" alt="">
						<div class="top-notice-description">
							ワンストップで不動産の購入・売却・リフォーム・相続のご相談に乗ることができます。
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
								<img src="/wp-content/themes/tonton-web-theme/images/content_1.png" alt="">
							</div>
							<div class="top-content-box">
								<div class="top-content-item-title">売る</div>
								<div class="top-content-item-title-min">sell</div>
								<div class="top-content-item-subtitle">
									マンション・戸建て・土地売却を検討の方へ
								</div>
								<div class="top-content-item-description">
									お客様のマンション・戸建て・土地等の不動産売却はとんとん住宅販売にお任せください。豊富な経験と地域に根付いた知識を生かし資産を最大化します。
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										物件売却についてみる
									</div>
								</div>
							</div>
						</div>
						<div class="top-content-item">
							<div class="top-content-item-img sp">
								<img src="/wp-content/themes/tonton-web-theme/images/content_2.png" alt="">
							</div>
							<div class="top-content-box">
								<div class="top-content-item-title">買う・建てる</div>
								<div class="top-content-item-title-min">buy / build</div>
								<div class="top-content-item-subtitle">
									新築・中古物件をお探しの方へ
								</div>
								<div class="top-content-item-description">
									初めてのマンション・戸建て・土地等の不動産購入でも安心ください。豊富な経験と地域に根付いた知識を生かし資産を最大化します。
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										取扱物件を見る
									</div>
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										過去の成約物件を見る
									</div>
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										物件購入について見る
									</div>
								</div>
							</div>
							<div class="top-content-item-img pc">
								<div class="top-content-item-icon">
									<img src="/wp-content/themes/tonton-web-theme/images/character_icon1.png" alt="キャラクター">
								</div>
								<img src="/wp-content/themes/tonton-web-theme/images/content_2.png" alt="">
							</div>
						</div>
						<div class="top-content-item">
							<div class="top-content-item-img">
								<img src="/wp-content/themes/tonton-web-theme/images/content_3.png" alt="">
							</div>
							<div class="top-content-box">
								<div class="top-content-item-title">修繕する</div>
								<div class="top-content-item-title-min">repair</div>
								<div class="top-content-item-subtitle">
									お住まいのリフォーム・増改築をご検討の方へ
								</div>
								<div class="top-content-item-description">
									リフォーム・リノベーションはとんとんにお任せください。スタイルに合わせた豊富な事例やわかりやすいパッケージを取り揃えてます。
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										過去のリフォーム施工例を見る
									</div>
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										リフォーム・リノベーションについて見る
									</div>
								</div>
							</div>
						</div>
						<div class="top-content-item-second">
							<div class="top-content-box">
								<div class="top-content-item-title">借りる</div>
								<div class="top-content-item-title-min">rent</div>
								<div class="top-content-item-subtitle">
									賃貸をご検討中の方へ
								</div>
								<div class="top-content-item-description">
									注文住宅と同じ品質や設備で建てられた賃貸住宅がございます。敷地内駐車場には、積雪時に安心のロードヒーティングが備えつけられています。
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										取扱物件を見る
									</div>
								</div>
							</div>
							<div class="top-content-box">
								<div class="top-content-item-title">投資する</div>
								<div class="top-content-item-title-min">invest</div>
								<div class="top-content-item-subtitle">
									不動産投資をご検討中の方へ
								</div>
								<div class="top-content-item-description">
									いまの時代、１つの資産に頼るには不安です。貯金だけじゃ将来や老後が不安…そんな方に不動産投資をご提案させていただきます。
								</div>
								<div class="top-content-button">
									<div class="top-button m-start">
										お問い合わせ
									</div>
								</div>
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
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_1.png" alt="slider1" /></div>
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_2.png" alt="slider2" /></div>
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_3.png" alt="slider3" /></div>
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_4.png" alt="slider4" /></div>
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_5.png" alt="slider5" /></div>
						<div class="swiper-slide"><img src="/wp-content/themes/tonton-web-theme/images/slider_6.png" alt="slider6" /></div>
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
							<li>
								<div class="top-news-item-box">
									<div class="top-news-item">
										<div class="top-news-date">2022.2.22</div>
										<div class="top-news-tags top-news-tags-brown">ニュース</div>
									</div>
									<div class="top-news-description">
										<a href="">
											「〈土地〉西宮の沢６条２丁目」が成約となりました
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="top-news-item-box">
									<div class="top-news-item">
										<div class="top-news-date">2022.2.22</div>
										<div class="top-news-tags top-news-tags-blue">新規</div>
									</div>
									<div class="top-news-description">
										<a href="">
											「〈土地〉平和１条６丁目」の販売を開始しました。
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="top-news-item-box">
									<div class="top-news-item">
										<div class="top-news-date">2022.2.22</div>
										<div class="top-news-tags top-news-tags-yellow">成約</div>
									</div>
									<div class="top-news-description">
										<a href="">
											「〈中古マンション〉エバーグリーン円山　４０１号室」が新価格となりました。
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="top-news-item-box">
									<div class="top-news-item">
										<div class="top-news-date">2022.2.22</div>
										<div class="top-news-tags top-news-tags-red">ニュース</div>
									</div>
									<div class="top-news-description">
										<a href="">
											「〈中古マンション〉エバーグリーン円山　４０１号室」が新価格となりました。
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="top-news-item-box">
									<div class="top-news-item">
										<div class="top-news-date">2022.2.22</div>
										<div class="top-news-tags top-news-tags-brown">採用</div>
									</div>
									<div class="top-news-description">
										<a href="">
											「〈中古マンション〉エバーグリーン円山　４０１号室」が新価格となりました。
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="top-news-button-wrapper">
						<div class="top-button">
							お知らせ一覧
						</div>
					</div>
				</div>
				<div class="top-news-icon">
					<img src="/wp-content/themes/tonton-web-theme/images/character_icon2.png" alt="キャラクター">
				</div>
			</div>
		</section>

		<section>
			<div class="top-about">
				<div class="top-about-title">私たちについて</div>
				<div class="top-about-wrapper">
					<div class="top-about-block">
						<img src="wp-content/themes/tonton-web-theme/images/about_1.png" alt="">
						<div class="top-about-box">
							<div class="top-about-box-text">経営理念</div>
							<div class="top-about-arrorw">→</div>
						</div>
					</div>
					<div class="top-about-block">
						<img src="wp-content/themes/tonton-web-theme/images/about_2.png" alt="">
						<div class="top-about-box">
							<div class="top-about-box-text">経営理念</div>
							<div class="top-about-arrorw">→</div>
						</div>
					</div>
					<div class="top-about-block">
						<img src="wp-content/themes/tonton-web-theme/images/about_3.png" alt="">
						<div class="top-about-box">
							<div class="top-about-box-text">経営理念</div>
							<div class="top-about-arrorw">→</div>
						</div>
					</div>
				</div>
				<div class="top-about-subtitle">当社へのアクセス</div>
				<div class="top-about-wrapper">
					<div class="top-about-item">
						<div class="top-about-item-title">本社</div>
						<div class="top-about-item-text">〒063-0034　札幌市西区西野4条3丁目10番1号</div>
						<div class="top-about-item-text">最寄り駅：地下鉄東西線 発寒南駅から徒歩20分</div>
						<div class="top-about-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.6156245691864!2d141.27565731519098!3d43.07055109792871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b282f6489ac1b%3A0xd45f1a67b852d28!2z44CSMDYzLTAwMzQg5YyX5rW36YGT5pyt5bmM5biC6KW_5Yy66KW_6YeO77yU5p2h77yT5LiB55uu77yR77yQ4oiS77yR!5e0!3m2!1sja!2sjp!4v1661657822054!5m2!1sja!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<div class="top-about-item">
						<div class="top-about-item-title">中央点</div>
						<div class="top-about-item-text">〒063-0034　札幌市西区西野4条3丁目10番1号</div>
						<div class="top-about-item-text">最寄り駅：地下鉄東西線 発寒南駅から徒歩20分</div>
						<div class="top-about-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.3842022163735!2d141.34368531518976!3d43.03334720030831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a1036f06aa5%3A0xc115ef6fd986d426!2z44CSMDY0LTA5MjAg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yS77yQ5p2h6KW_77yR77yQ5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1661657879810!5m2!1sja!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<div class="top-about-icon">
					<img src="/wp-content/themes/tonton-web-theme/images/character_icon3.png" alt="キャラクター">
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
