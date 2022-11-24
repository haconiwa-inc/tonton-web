<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tonton-web-theme
 */

?>

  <footer id="colophon" class="site-footer">
    <div class="footer">
      <div class="footer-wrapper dis-pc">
        <div class="footer-content">
          <div class="footer-box">
            <div class="footer-logo">
              <a href="/">
                <img src="<?php echo get_template_directory_uri();?>/images/pc/logo_pc.png" alt="">
              </a>
            </div>
            <ul class="footer-description">
              <li>〒063-0034 札幌市西区西野4条3丁目10番1号</li>
              <li>[営業時間]9:30～18:00</li>
              <li>[定休日]水曜日、第１・３火曜日</li>
              <li>tel.011-668-3700</li>
              <li>fax.011-668-3701</li>
              <li>公益社団法人北海道宅地建物取引業協会会員</li>
              <li>一般社団法人北海道不動産公正取引協議会会員</li>
              <li>北海道知事 石狩(2)第8340号</li>
            </ul>
          </div>
          <div class="footer-box">
            <div class="footer-link">
              <ul class="footer-link-list">
                <li>
                  <a href="/">
                    TOP
                  </a>
                </li>
                <li>
                  <a href="/business/">
                    とんとんのお仕事
                  </a>
                </li>
                <li>
                  <a href="/company-inq/">
                    会社概要
                  </a>
                </li>
                <li>
                  <a href="/news/">
                    お知らせ
                  </a>
                </li>
                <li>
                  <a href="/contact/">
                    お問い合せ
                  </a>
                </li>
                <br>
                <li>
                  <a href="/policy/">
                    プライバシーポリシー
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-link-second">
              <ul class="footer-link-second-list">
                <li>
                  <a href="/business/sell/">
                    売る
                  </a>
                </li>
                <li>
                  <a href="/business/buy/">
                    買う・建てる
                  </a>
                  <div class="footer-link-second-text">
                    <a href="/business/buy/lineup/">
                      −売買物件
                    </a>
                  </div>
                  <div class="footer-link-second-text">
                    <a href="/business/buy/sold/">
                      −過去の成約物件
                    </a>
                  </div>
                </li>
                <li>
                  <a href="/business/reform/">
                    直す
                  </a>
                  <div class="footer-link-second-text">
                    <a href="/business/reform/results-archive/">
                      −修繕事例
                    </a>
                  </div>
                </li>
                <li>
                  <a href="/business/chintai/">
                    借りる
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content dis-sp">
        <div class="footer-box">
          <div class="footer-link">
            <ul class="footer-link-list">
              <li>
                <a href="/">
                  TOP
                </a>
              </li>
              <li>
                <a href="/business/">
                  とんとんのお仕事
                </a>
              </li>
              <li>
                <a href="/company-inq/">
                  会社概要
                </a>
              </li>
              <li>
                <a href="/news/">
                  お知らせ
                </a>
              </li>
              <li>
                <a href="/contact/">
                  お問い合せ
                </a>
              </li>
              <br>
              <li>
                <a href="/policy/">
                  プライバシーポリシー
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-link-second">
            <ul class="footer-link-second-list">
              <li>
                <a href="/business/sell/">
                  売る
                </a>
              </li>
              <li>
                <a href="/business/buy/">
                  買う・建てる
                </a>
                <div class="footer-link-second-text">
                  <a href="/business/buy/lineup/">
                    −売買物件
                  </a>
                </div>
                <div class="footer-link-second-text">
                  <a href="/business/buy/sold/">
                    −過去の成約物件
                  </a>
                </div>
              </li>
              <li>
                <a href="/business/reform/">
                  直す
                </a>
                <div class="footer-link-second-text">
                  <a href="/business/reform/results-archive/">
                    −修繕事例
                  </a>
                </div>
              </li>
              <li>
                <a href="/business/chintai/">
                  借りる
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-box">
          <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri();?>/images/pc/logo_pc.png" alt="">
          </div>
          <ul class="footer-description">
            <li>〒063-0034 札幌市西区西野4条3丁目10番1号</li>
            <li>[営業時間]9:30～18:00</li>
            <li>[定休日]水曜日、第１・３火曜日</li>
            <li>tel.011-668-3700</li>
            <li>fax.011-668-3701</li>
            <li>公益社団法人北海道宅地建物取引業協会会員</li>
            <li>一般社団法人北海道不動産公正取引協議会会員</li>
            <li>北海道知事 石狩(2)第8340号</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      copyright © とんとん住宅販売株式会社
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
<?php wp_footer(); ?>

</body>
</html>
