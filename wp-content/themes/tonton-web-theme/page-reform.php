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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/reform.css" media="screen" >

  <main id="primary" class="site-main">
     <div class="reform-contents">
      <div class="title-area">
        <h2 class="title">
          <p>リフォーム / リノベーション</p>
          <span>reform / renovation</span>
        </h2>
      </div>
      <div class="wrapper-boxes">
        <div class="wrapper-boxes-inner">
            <ul class="breadcrumbs">
              <li><a href="/">TOP</a></li>
              <li><a href="/business">事業案内</a></li>
              <li>リフォーム / リノベーション</li>
            </ul>
            <div class="reform-block reform-block--top">
              <h3 class="reform-subTitle">
              とんとんでのリフォーム / リノベーション
              </h3>
              <div class="reform-leadText">
              購入と併せたリフォームのご提案、お客様のお住まいのリフォーム相談、<br />
              戸建・マンション問わずリノベーションのご提案が可能です。
              </div>
            </div>
          </div>
          <div class="reform-block reform-block--wull">
            <div class="reform-blockInner">
              <h3 class="reform-pointsTitle">とんとんでリフォーム / リノベーションするポイント</h3>
              <ul class="reform-pointList">
                <li>
                  <div class="reform-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point01_reform.png" alt="ご予算に合ったリフォームプランのご提案が可能" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point01_reform_sp.png" alt="ご予算に合ったリフォームプランのご提案が可能" class="dis-sp">
                  </div>
                </li>
                <li>
                  <div class="reform-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point02_reform.png" alt="事例が多数なため安心して任せることができる" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point02_reform_sp.png" alt="事例が多数なため安心して任せることができる" class="dis-sp">
                  </div>
                </li>
                <li>
                  <div class="reform-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point03_reform.png" alt="予算に合わせた安心の完全定額制、予算に合わせた選択制" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point03_reform_sp.png" alt="予算に合わせた安心の完全定額制、予算に合わせた選択制" class="dis-sp">
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="wrapper-boxes-inner">
            <div class="reform-block">
              <h3 class="reform-pointsTitle">代表的なリフォーム / リノベーション事例</h3>
              <ul class="reform-exampleList">
                <li>
                  <h3 class="reform-exampleTitle">
                    <div class="reform-exampleTitleInner">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case01_reform.png" alt="case01 フルリノベーション" class="dis-pc">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case01_reform_sp.png" alt="case01 フルリノベーション" class="dis-sp">
                    </div>
                    <div class="reform-exampleTitleDeco">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/tonton_family.png" alt="">
                    </div>
                  </h3>
                  <h4 class="reform-exampleSubtitle">お客様の背景</h4>
                  <div class="reform-point01">
                    <dl class="reform-tableBlock">
                      <dt>年代</dt>
                      <dd>20代</dd>
                      <dt>ご職業</dt>
                      <dd>会社員</dd>
                      <dt>お住まい</dt>
                      <dd>札幌市</dd>
                      <dt>ご相談の地域</dt>
                      <dd>札幌市</dd>
                    </dl>
                    <!-- TODO: 画像差し替えあり -->
                    <div class="reform-point01Img">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/sell_example_01.png" alt="">
                    </div>
                  </div>
                  <h4 class="reform-exampleSubtitle">ご相談内容</h4>
                  <div class="reform-point02">
                  新築で検討していたが、希望の条件に合うものが予算から大幅にでてしまい新築同様の快適な住宅を探していました。
                  </div>
                  <h4 class="reform-exampleSubtitle">ご提案内容と結果</h4>
                  <div class="reform-point03">
                  お客様のご予算、エリアなどの条件に合ったとんとんのフルリノベーション住宅をご提案。新築では叶えられなかった 価格について大変満足されています。
                  </div>
                  <h4 class="reform-exampleSubtitle">とんとんならではのポイント</h4>
                  <div class="reform-point04">
                  建物の構造を理解したスタッフがお客様の希望する間取りやご予算内で選べる商品に合わせてご提案ができます。
                  </div>
                  <h4 class="reform-exampleSubtitle">担当スタッフからのメッセージ</h4>
                  <div class="reform-point05">
                  お客様が新築同様のデザイン性や機能性を重視されておりましたので、ご希望通りのフルリノベーション内容に満足していただけて大変うれしいです。
                  </div>
                </li>
                <li>
                  <h3 class="reform-exampleTitle">
                    <div class="reform-exampleTitleInner">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case02_reform.png" alt="case02 マンションリフォーム" class="dis-pc">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case02_reform_sp.png" alt="case01 マンションリフォーム" class="dis-sp">
                    </div>
                    <div class="reform-exampleTitleDeco">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/tonton_family.png" alt="">
                    </div>
                  </h3>
                  <h4 class="reform-exampleSubtitle">お客様の背景</h4>
                  <div class="reform-point01">
                    <dl class="reform-tableBlock">
                      <dt>年代</dt>
                      <dd>40代</dd>
                      <dt>ご職業</dt>
                      <dd>公務員</dd>
                      <dt>お住まい</dt>
                      <dd>札幌市</dd>
                      <dt>ご相談の地域</dt>
                      <dd>札幌市</dd>
                    </dl>
                    <!-- TODO: 画像差し替えあり -->
                    <div class="reform-point01Img">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/sell_example_02.png" alt="">
                    </div>
                  </div>
                  <h4 class="reform-exampleSubtitle">ご相談内容</h4>
                  <div class="reform-point02">
                  購入したマンションのリフォームをしたい。
                  </div>
                  <h4 class="reform-exampleSubtitle">ご提案内容と結果</h4>
                  <div class="reform-point03">
                  クロス交換、洗面所、トイレ、ユニットバス、キッチン、フローリングなどの ご希望に合わせて とんとんの リフォーム内容 をご提案。 契約となりました。
                  </div>
                  <h4 class="reform-exampleSubtitle">とんとんならではのポイント</h4>
                  <div class="reform-point04">
                  弊社のスタッフ が同行して、ショールームで実際に使う商品のご説明、お客様のご予算に合わせた ご提案ができます。
                  </div>
                  <h4 class="reform-exampleSubtitle">担当スタッフからのメッセージ</h4>
                  <div class="reform-point05">
                  雨が降っていても濡れずに乗降車でき、屋内と屋外の中間として活用できるインナーガレージは、室内ではやりにくい趣味を楽しめたり、普段使わないアウトドア用品やスポーツ用品を収納したりと、多様な用途で使えて利便性が高いです。
                  </div>
                </li>
                <li>
                  <h3 class="reform-exampleTitle">
                    <div class="reform-exampleTitleInner">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case03_reform.png" alt="case03" class="dis-pc">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/case03_reform_sp.png" alt="case03" class="dis-sp">

                    </div>
                    <div class="reform-exampleTitleDeco">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/tonton_family.png" alt="">
                    </div>
                  </h3>
                  <h4 class="reform-exampleSubtitle">お客様の背景</h4>
                  <div class="reform-point01">
                    <dl class="reform-tableBlock">
                      <dt>年代</dt>
                      <dd>テキスト</dd>
                      <dt>ご職業</dt>
                      <dd>テキスト</dd>
                      <dt>お住まい</dt>
                      <dd>札幌市</dd>
                      <dt>ご相談の地域</dt>
                      <dd>札幌市</dd>
                    </dl>
                    <!-- TODO: 画像差し替えあり -->
                    <div class="reform-point01Img">
                      <img src="<?php echo get_template_directory_uri();?>/images/business/sell_example_03.png" alt="">
                    </div>
                  </div>
                  <h4 class="reform-exampleSubtitle">ご相談内容</h4>
                  <div class="reform-point02">
                  広々とした明るい印象のリビングと書斎を設けたい
                  </div>
                  <h4 class="reform-exampleSubtitle">ご提案内容と結果</h4>
                  <div class="reform-point03">
                  お家全体のテーマとして、明るい雰囲気を演出するために白を基調とした色使いをご提案させていただきました。<br />
                  </div>
                  <h4 class="reform-exampleSubtitle">とんとんならではのポイント</h4>
                  <div class="reform-point04">
                  間取りを設定する上でリビングから直接アクセス可能な書斎とし、書斎からもリビングにいる家族の様子が分かるような生活空間をイメージした造りとしました。
                  </div>
                  <h4 class="reform-exampleSubtitle">担当スタッフからのメッセージ</h4>
                  <div class="reform-point05">
                  家族が団らんして過ごせる開放感のあるLDKはゆったりと過ごせて…
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="reform-block reform-block--wullGreen">
            <div class="reform-blockInner">
              <h3 class="reform-contactTitle">まずはお気軽に<br class="dis-sp" />お問い合わせください。</h3>
              <div class="reform-button reform-button--green">
                <div class="reform-buttonInner reform-buttonInner--small">
                  <a href="/business/reform">
                    お問い合わせ
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper-boxes-inner">
            <div class="reform-block">
              <ul class="reform-linkList">
                <li>
                  <a href="/business/reform/results-archive">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/link01_reform.png" alt="">
                    <div class="reform-linkTitle">
                      <p>過去のリフォーム施工例</p>
                    </div>
                    <div class="reform-linkArrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <!-- TODO: 中古物件のリンク？ -->
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/link02_reform.png" alt="">
                    <div class="reform-linkTitle">
                      <p>現在取扱中の中古物件</p>
                    </div>
                    <div class="reform-linkArrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- #main -->

<?php
 get_footer();
?>
