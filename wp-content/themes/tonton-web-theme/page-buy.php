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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/buy.css" media="screen" >

    <main id="primary" class="site-main">
     <div class="buy-contents">
      <div class="title-area">
        <h2 class="title">
          <p>物件購入</p>
          <span>buy</span>
        </h2>
      </div>
        <div class="wrapper-boxes">
          <div class="wrapper-boxes-inner">
            <ul class="breadcrumbs">
              <li><a href="/">TOP</a></li>
              <li><a href="/business">事業案内</a></li>
              <li>物件購入</li>
            </ul>
            <div class="buy-block buy-block--top">
              <h3 class="buy-subTitle">
              とんとんでの物件購入
              </h3>
              <div class="buy-leadText">
                とんとん住宅販売では、物件のご紹介・現地ご案内・資金計画の提案・住宅ローンのご相談等も行なっております。<br />
                新築・中古どちらも取り扱っておりますので、まずはお気軽にご相談ください。
              </div>
            </div>
          </div>
          <div class="buy-block buy-block--wull">
            <div class="buy-blockInner">
              <h3 class="buy-pointsTitle">とんとんで物件を購入するポイント</h3>
              <ul class="buy-pointList">
                <li>
                  <div class="buy-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point01.png" alt="" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point01_sp.png" alt="" class="dis-sp">
                  </div>
                  <div class="buy-pointText">
                    <p class="buy-pointTitle">地元に密着した不動産情報多数</p>
                    <div class="buy-pointContent">
                      弊社に任せて頂いた売却物件に限らず、地元に密着しているからこその他社との繋がりがあり、札幌市の不動産情報を仕入れることができます。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="buy-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point02.png" alt="" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point02_sp.png" alt="" class="dis-sp">
                  </div>
                  <div class="buy-pointText">
                    <p class="buy-pointTitle">実績豊富なため安心して不動産購入を任せることができる</p>
                    <div class="buy-pointContent">
                      手続きなど、いろいろ難しい不動産購入ですが、実績豊富なスタッフが引渡しまでしっかりお手伝いします。また、数ある不動産を見てきている為建物に関しても詳しく、他社の不動産をご紹介する際もお客様の内覧前に事前に現地を確認してからお客様にご紹介いたします。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="buy-pointCapture">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point03.png" alt="" class="dis-pc">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/point03_sp.png" alt="" class="dis-sp">
                  </div>
                  <div class="buy-pointText">
                    <p class="buy-pointTitle">物件購入と併せてご予算・ご希望に合ったリフォーム提案が可能</p>
                    <div class="buy-pointContent">
                      中古住宅の購入にはリフォームやリノベーションをすることでより良い快適な住まいのご提案をいたします。お客様のご希望のご予算、 リフォーム内容をお聞かせください。
                    </div>
                    <div class="buy-button buy-button--green">
                      <div class="buy-buttonInner buy-buttonInner--left">
                        <a href="/business/reform">
                          リフォームについて
                        </a>
                        <div class="buy-buttonArrow">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                            <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="wrapper-boxes-inner">
            <div class="buy-block">
              <h3 class="buy-flowTitle">
                購入の流れ
              </h3>
              <ul class="buy-flowList">
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step01.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      購入相談
                    </p>
                    <div class="buy-stepContent">購入したい物件の条件をお聞きし、物件をお探しいたします。</div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step02.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      資金計画
                    </p>
                    <div class="buy-stepContent">
                      お客様の収入やご予算をお聞きした上で、お客様に合う資金計画をご提案いたします。<br />
                      購入の際にかかる諸費用の説明も併せて行います。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step03.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      物件案内
                    </p>
                    <div class="buy-stepContent">
                      ご希望に沿う物件を紹介し、営業担当者が気になる物件のご案内をします。<br />
                      購入したい物件が見つかりましたら、購入申込へ！
                    </div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step04.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      売買契約
                    </p>
                    <div class="buy-stepContent">
                      購入物件等の調査が完了しましたら、契約書類を作成し、契約準備を行います。<br />
                      売買契約後、住宅ローンのお申込みへ。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step05.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      住宅ローン
                    </p>
                    <div class="buy-stepContent">住宅ローンの本申込を行います。併せて住宅ローンに必要となる火災保険のご説明と手続きを行います。</div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step06.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      残代金決済
                    </p>
                    <div class="buy-stepContent">売主様へ残代金と固定資産税の精算金をお支払いいたします。</div>
                  </div>
                </li>
                <li>
                  <div class="buy-stepIcon">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/step07.png" alt="">
                  </div>
                  <div class="buy-stepText">
                    <p class="buy-stepTitle">
                      引渡し
                    </p>
                    <div class="buy-stepContent">決済終了後、鍵や設備の説明書等をいただいて、引渡し完了となります。</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="buy-block buy-block--wullGreen">
            <div class="buy-blockInner">
              <h3 class="buy-contactTitle">まずはお気軽に<br class="dis-sp" />お問い合わせください。</h3>
              <div class="buy-button buy-button--green buy-button--contact">
                <div class="buy-buttonInner buy-buttonInner--small">
                  <a href="/business/reform">
                    お問い合わせ
                  </a>
                  <div class="buy-buttonArrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                      <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper-boxes-inner">
            <div class="buy-block">
              <ul class="buy-linkList">
                <li>
                  <a href="/business/buy/lineup">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/link01.png" alt="">
                    <div class="buy-linkTitle">
                      <p>現在取扱中の物件</p>
                    </div>
                    <div class="buy-linkArrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/business/sold">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/link02.png" alt="">
                    <div class="buy-linkTitle">
                      <p>過去の成約物件</p>
                    </div>
                    <div class="buy-linkArrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
                        <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/business/reform">
                    <img src="<?php echo get_template_directory_uri();?>/images/business/link03.png" alt="">
                    <div class="buy-linkTitle">
                      <p>
                        リフォーム/<br />
                        リノベーションについて
                      </p>
                    </div>
                    <div class="buy-linkArrow">
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
