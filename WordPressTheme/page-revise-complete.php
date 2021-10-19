<?php get_header(); ?>

<main>
  <section class="complete">
    <h1 class="complete__title">ご連絡<span>ありがとうございます</span></h1>
    <p class="complete__text">ご登録内容を修正させていただきます。</p>
    <div class="contact__phase">
      <ul class="contact__phaseList">
        <li class="contact__phaseItem current">入力画面</li>
        <li class="contact__phaseItem current">内容確認</li>
        <li class="contact__phaseItem current">送信完了</li>
      </ul>
    </div>
    <p class="complete__explain">受付完了メールをお送りいたしましたのでご確認ください。<br>受付完了メールが届かない場合は、以下の電話もしくはメールにてお知らせください。</p>
    <div class="complete__infos">
      <div class="complete__infoWrap">
        <a href="tel:03-5289-9223">03-5289-9223</a>
      </div>
      <div class="complete__infoWrap">
        <a href="mailto:xworks@dhw.co.jp">xworks@dhw.co.jp</a>
      </div>
    </div>
    <div class="benefits__media">
      <figure class="benefits__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vo_ogp_1200_630.png" alt="DMMバーチャルオフィス紹介画像">
      </figure>
      <div class="benefits__body">
        <p class="benefits__head">DMMバーチャルオフィス</p>
        <p class="benefits__detail">DMMバーチャルオフィスは、業界最安水準の月あたり2,530円（年間契約一括払いの場合）から基本プランの契約が可能です。<br>オフィスなしでビジネスをスタートしたい個人事業主やフリーランスに向け、ブランドイメージを考慮した都内一等地にある洗練された物件住所と、「スマホにOffice!」をコンセプトとしたスマホ1つでオフィス機能を実現する、利便性の高い会員サイトを提供しています。<br>今後、「ランサーユニット」を中心としたメンバーは通常よりも割引が適用された料金で、DMMバーチャルオフィスのサービスを利用することが可能となります。</p>
        <div class="benefits__linkWrap">
          <a href="https://virtualoffice.dmm.com" class="benefits__link">登録はこちら</a>
        </div>
      </div>
    </div>
    <div class="complete__linkWrap">
      <a href="<?php echo home_url(''); ?>" class="complete__link">＜ クリエイターTOPページへ戻る</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>