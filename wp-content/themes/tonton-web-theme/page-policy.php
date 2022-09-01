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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/pages/policy.css" media="screen" >
  <main id="primary" class="site-main">
  <div class="policy-contents">
    <div class="title-area">
      <h2 class="title">
        <p>プライバシーポリシー</p>
        <span>privacy policy</span>
      </h2>
    </div>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li><a href="/">TOP</a></li>
        <li>プライバシーポリシー</li>
      </ul>
      <h3 class="policy-subTitle">個人情報保護に関する、基本方針</h3>
      <p class="policy-leadText">お客様よりお預かりしました個人情報につきましては、とんとん住宅販売株式会社の円滑な運営と必要な情報の提供を希望されるお客様への的確な情報提供のために使用するものとし、目的外の利用を致しません。また、お預かりした個人情報を安全に取扱えるよう個人情報保護に関するコンプライアンスプログラムを策定し、個人情報保護の仕組みを整備すると共に個人情報保護管理責任者を決め、毎年の監査と改善に努めます。</p>
      <h3 class="policy-subTitle">プライバシーポリシー(個人情報保護方針)</h3>
      <dl class="policy-text">
        <dt>１．ご提供をしていただく個人情報</dt>
        <dd>（お客様の氏名・住所・電話番号・生年月日・家族構成・現在の住居の種類、等々）</dd>
      </dl>
      <dl class="policy-text">
        <dt>２．個人情報の利用目的について</dt>
        <dd>・とんとん住宅販売株式会社に不動産の売却や購入をご依頼されたお客様に対して、的確な情報提供を行うため</dd>
        <dd>・お客様への今後のサービス向上のため、統計資料作成に使用させていただくため</dd>
        <dd>・その他、何らかの理由でお客様と接触する必要が生じた場合のため</dd>
      </dl>
      <dl class="policy-text">
        <dt>３．個人情報の開示・訂正・削除について</dt>
        <dd>お客様ご本人様より個人データについて何らかのご要望があった場合は、ご要望に対する速やかな対応を致します。<br>
        また、お客様ご本人様より個人データの開示、訂正・削除についてお申し出があった場合にはご本人確認をさせて頂いた上で、速やかにデータの開示・訂正・削除を致します。</dd>
      </dl>
      <dl class="policy-text">
        <dt>４．個人情報の管理について</dt>
        <dd>・個人情報データベースについては、外部からのアクセス防止対策機能を持ったシステムを導入しております。</dd>
        <dd>・個人データの持ち出し規制を実施し、持ち出しについては、個人情報責任者の承認制としております。</dd>
        <dd>・不要になった情報は定期的に安全に破棄を致します。</dd>
        <dd>・従業員が遵守すべき安全管理措置を定める規定を整備し、一定の間隔で確認を致します。</dd>
      </dl>
      <dl class="policy-text">
        <dt>５．個人情報に関するお問合せについて</dt>
        <dd>個人情報に関するお問合せは下記でお受けしています。</dd>
      </dl>
      <div class="policy-rightText">
        <p>札幌市西区西野4条3丁目10番1号 担当：遠藤<br>
        電話番号：011-668-3700<br>
        受付時間：9:30～18:00（毎週水曜日、第1・3火曜日は定休）</p>
        <p>代表取締役 遠藤 琢磨</p>
      </div>
      <div class="top-button top-button--white">
        <div class="top-buttonInner">
          <a href="/">
            TOPへ戻る
          </a>
          <div class="top-icon">
            <img src="<?php echo get_template_directory_uri();?>/images/common/tonton-boy.png" alt="">
          </div>
          <div class="top-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.96" height="12.424" viewBox="0 0 15.96 12.424">
              <path d="M1427.751,843.521l-5.656-5.3c-.775-.727-1.932.455-1.153,1.183l4.225,3.957-12.349.011a.839.839,0,0,0,0,1.674l12.206-.01L1420.916,849a.827.827,0,0,0,1.154,1.184l5.681-5.482A.857.857,0,0,0,1427.751,843.521Z" transform="translate(-1412.029 -837.997)" fill="#fff"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main><!-- #main -->
<?php
get_footer();
