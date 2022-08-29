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
	<main id="primary" class="site-main">
		 <div class="sell-contents">
			<div class="sell-title-area">
				<h1 class="sell-title">
					<img src="/wp-content/themes/tonton-web-theme/images/business/sell_title.png" alt="物件購入">
				</h1>
			</div>
			<ul class="breadcrumbs">
				<li><a href="/">TOP</a></li>
				<li><a href="/business">事業案内</a></li>
				<li>物件売却</li>
			</ul>
				<div class="sell-block sell-block--top">
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
									<img src="/wp-content/themes/tonton-web-theme/images/business/point01.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/images/business/point02.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/images/business/point03.png" alt="">
								</div>
							</li>
							<li>
								<div class="sell-pointCapture">
									<img src="/wp-content/themes/tonton-web-theme/images/business/point03.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step01.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step02.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step03.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step04.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step05.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step06.png" alt="">
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
								<img src="/wp-content/themes/tonton-web-theme/images/business/step07.png" alt="">
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
					<ul class="sell-exampleList">
						<li>
							<h3 class="sell-exampleTitle">
								<div class="sell-exampleTitleInner">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case01.png" alt="case01 住み替え" class="sell-disPc">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case01_sp.png" alt="case01 住み替え" class="sell-disSp">
								</div>
								<div class="sell-exampleTitleDeco">
									<img src="/wp-content/themes/tonton-web-theme/images/business/tonton_family.png" alt="">
								</div>
							</h3>
							<h4 class="sell-exampleSubtitle">お客様の背景</h4>
							<div class="sell-point01">
								<dl class="sell-tableBlock">
									<dt>年代</dt>
									<dd>70代</dd>
									<dt>ご職業</dt>
									<dd>無職</dd>
									<dt>お住まい</dt>
									<dd>札幌市</dd>
									<dt>ご相談の地域</dt>
									<dd>札幌市</dd>
									<dt>ご売却の理由</dt>
									<dd>住み替えのため</dd>
								</dl>
								<div class="sell-point01Img">
									<img src="/wp-content/themes/tonton-web-theme/images/business/sell_example_01.png" alt="">
								</div>
							</div>
							<h4 class="sell-exampleSubtitle">ご相談内容</h4>
							<div class="sell-point02">
							新しくマンションを購入するため、夏ごろまでに売却して、移り住みたい。
							</div>
							<h4 class="sell-exampleSubtitle">ご提案内容と結果</h4>
							<div class="sell-point03">
							住み替え先が決まっていることから、早く売却をしたいという売主様のご要望だったので、しっかりと早期成約が見込める価格の提示。広告活動を開始してから2日後に購入申込が入り、成約となりました。
							</div>
							<h4 class="sell-exampleSubtitle">とんとんならではのポイント</h4>
							<div class="sell-point04">
							単なる査定額の提示だけではなく、成約が見込める価格の提示と価格の根拠、売却にかかる経費をご説明いたします。
							</div>
							<h4 class="sell-exampleSubtitle">担当スタッフからのメッセージ</h4>
							<div class="sell-point05">
							売却をされる4年前にご自宅をフルリフォームされており、売主様ご夫婦がこまめに清掃をされていたので、状態の良いご自宅でした。お部屋の写真をたくさんインターネットに載せることで、反響やお気に入り数も多く早期成約となりました。
							</div>
						</li>
						<li>
							<h3 class="sell-exampleTitle">
								<div class="sell-exampleTitleInner">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case02.png" alt="case02 資産処分" class="sell-disPc">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case02_sp.png" alt="case01 資産処分" class="sell-disSp">
								</div>
								<div class="sell-exampleTitleDeco">
									<img src="/wp-content/themes/tonton-web-theme/images/business/tonton_family.png" alt="">
								</div>
							</h3>
							<h4 class="sell-exampleSubtitle">お客様の背景</h4>
							<div class="sell-point01">
								<dl class="sell-tableBlock">
									<dt>年代</dt>
									<dd>80代</dd>
									<dt>ご職業</dt>
									<dd>無職</dd>
									<dt>お住まい</dt>
									<dd>札幌市</dd>
									<dt>ご相談の地域</dt>
									<dd>札幌市</dd>
									<dt>ご売却の理由</dt>
									<dd>資産処分</dd>
								</dl>
								<div class="sell-point01Img">
									<img src="/wp-content/themes/tonton-web-theme/images/business/sell_example_02.png" alt="">
								</div>
							</div>
							<h4 class="sell-exampleSubtitle">ご相談内容</h4>
							<div class="sell-point02">
							体の不調があり、家も古いため売却をして娘と賃貸で暮らそうかと考えている。
							</div>
							<h4 class="sell-exampleSubtitle">ご提案内容と結果</h4>
							<div class="sell-point03">
							建物が築後40年以上経過しており、お住いのエリアが新築を建てるお客様に向けて土地としての売却をご提案しました。広告活動開始後、約１週間ほどで 契約となりました。
							</div>
							<h4 class="sell-exampleSubtitle">とんとんならではのポイント</h4>
							<div class="sell-point04">
							住み替え先の賃貸住宅の条件もヒヤリングをして、売却活動と並行しながら住み替え先の物件もお探しできます。
							</div>
							<h4 class="sell-exampleSubtitle">担当スタッフからのメッセージ</h4>
							<div class="sell-point05">
							約62坪の大きさの土地で、目の前には大きな公園のある住環境の良い立地であったため、広告には物件の良さを全面的にアピールをしました。たくさんのお問い合わせをいただき、早期成約となり、弊社でご紹介しました賃貸物件で売主様の住み替え先も決まりました。
							</div>
						</li>
						<li>
							<h3 class="sell-exampleTitle">
								<div class="sell-exampleTitleInner">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case03.png" alt="case03 買い替え" class="sell-disPc">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case03_sp.png" alt="case03 買い替え" class="sell-disSp">

								</div>
								<div class="sell-exampleTitleDeco">
									<img src="/wp-content/themes/tonton-web-theme/images/business/tonton_family.png" alt="">
								</div>
							</h3>
							<h4 class="sell-exampleSubtitle">お客様の背景</h4>
							<div class="sell-point01">
								<dl class="sell-tableBlock">
									<dt>年代</dt>
									<dd>40代</dd>
									<dt>ご職業</dt>
									<dd>会社員</dd>
									<dt>お住まい</dt>
									<dd>札幌市</dd>
									<dt>ご相談の地域</dt>
									<dd>札幌市</dd>
									<dt>ご売却の理由</dt>
									<dd>引っ越しによる買い替え</dd>
								</dl>
								<div class="sell-point01Img">
									<img src="/wp-content/themes/tonton-web-theme/images/business/sell_example_03.png" alt="">
								</div>
							</div>
							<h4 class="sell-exampleSubtitle">ご相談内容</h4>
							<div class="sell-point02">
							注文住宅を建てることとなったため、持ち家（マンション）の売却をしたい。
							</div>
							<h4 class="sell-exampleSubtitle">ご提案内容と結果</h4>
							<div class="sell-point03">
							持ち家の住宅ローンの残債があったため、まず残債を上回る価格で販売できるかを査定いたしました。実際に売れたマンション棟内の事例に基づいて注文住宅の完成までに成約することが条件だったため、その条件にあう価格での販売活動をいたしました。広告活動後、約1か月で契約となり無事、余裕を持った買い替えを行うことができました。
							</div>
							<h4 class="sell-exampleSubtitle">とんとんならではのポイント</h4>
							<div class="sell-point04">
							買い替えは購入と売却のスケジュールを合わせるのが非常に難しいですが、とんとんはお客様の状況に合わせた売却方法をご提案いたします。
							</div>
							<h4 class="sell-exampleSubtitle">担当スタッフからのメッセージ</h4>
							<div class="sell-point05">
							購入スケジュールに沿ったスムーズな売却ができたので、売主様は余裕をもった買い替えができました。
							</div>
						</li>
						<li>
							<h3 class="sell-exampleTitle">
								<div class="sell-exampleTitleInner">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case04.png" alt="case04 維持不能" class="sell-disPc">
									<img src="/wp-content/themes/tonton-web-theme/images/business/case04_sp.png" alt="case04 維持不能" class="sell-disSp">
								</div>
								<div class="sell-exampleTitleDeco">
									<img src="/wp-content/themes/tonton-web-theme/images/business/tonton_family.png" alt="">
								</div>
							</h3>
							<h4 class="sell-exampleSubtitle">お客様の背景</h4>
							<div class="sell-point01">
								<dl class="sell-tableBlock">
									<dt>年代</dt>
									<dd>40代</dd>
									<dt>ご職業</dt>
									<dd>会社員</dd>
									<dt>お住まい</dt>
									<dd>札幌市</dd>
									<dt>ご相談の地域</dt>
									<dd>札幌市</dd>
									<dt>ご売却の理由</dt>
									<dd>住み替えのため</dd>
								</dl>
								<div class="sell-point01Img">
									<img src="/wp-content/themes/tonton-web-theme/images/business/sell_example_04.png" alt="">
								</div>
							</div>
							<h4 class="sell-exampleSubtitle">ご相談内容</h4>
							<div class="sell-point02">
							離婚されて1人の収入となり、住宅ローンの支払いが厳しくなったため。住宅ローンの残債を無くし、住み替え先の費用もできればまかないたい。
							</div>
							<h4 class="sell-exampleSubtitle">ご提案内容と結果</h4>
							<div class="sell-point03">
							住宅ローンの残債と住み替え先の費用も加味し、自宅を見させて頂いた上で不動産のマーケットを分析し成約が見込める価格を提示。価格、住宅ローンの残債もなくなり住み替え先の費用も残せる価格で成約。
							</div>
							<h4 class="sell-exampleSubtitle">とんとんならではのポイント</h4>
							<div class="sell-point04">
							お客様にとって、不動産売買を成功させることに加え＋アルファを心がけています。<br />
							通常の不動産売買であれば、それがなされれば終わりです。しかし弊社は今回のように引っ越しのことまで、最後までサポートさせていただきます。
							</div>
							<h4 class="sell-exampleSubtitle">担当スタッフからのメッセージ</h4>
							<div class="sell-point05">
							私たち担当者を、信じて任せて頂けた結果成約に繋がりました。心配なこともあったと思いますが、売主様のご希望通りに売却ができたこと、私たちも大変嬉しく思います。
							</div>
						</li>
					</ul>
				</div>
				<div class="sell-block sell-block--wullGreen">
					<div class="sell-blockInner">
						<h2 class="sell-contactTitle">まずはお気軽に<br class="sell-disSp" />お問い合わせください。</h2>
						<div class="sell-button sell-button--green">
							<div class="sell-buttonInner sell-buttonInner--small">
								<a href="/business/reform">
									お問い合わせ
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// TODO: フッターあとから入れる get_footer();
?>
