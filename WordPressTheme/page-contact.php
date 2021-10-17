<?php get_header(); ?>

<main>
  <section class="contact">
    <h1 class="contact__title">クリエイター登録フォーム</h1>
    <p class="contact__english">Entry form</p>
    <div class="contact__phase">
      <ul class="contact__phaseList">
        <li class="contact__phaseItem current">入力画面</li>
        <li class="contact__phaseItem">内容確認</li>
        <li class="contact__phaseItem">送信完了</li>
      </ul>
    </div>
    <p class="contact__explain">LANCER UNIT案件にご興味のあるクリエイターに向けたアンケートです。<br>皆様の対応領域や稼働状況を詳しくお知らせいただくことにより、ご希望にあった案件を優先的にご紹介します。<br><br>＜回答の際のお願い＞<br>使用ツールや言語、得意ジャンルや実績例など、より具体的にご記入ください。<br>クライアントへお伝えできる内容が増し、案件のご紹介頻度が高まりますので、できるだけ多くの情報をご記入いただければと思います。</p>
    <div class="contact__time">ご回答時間の目安：5分程度</div>
    <div class="contact__main">
      <?php the_content(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>