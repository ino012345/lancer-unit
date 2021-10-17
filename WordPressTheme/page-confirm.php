<?php get_header(); ?>

<main>
  <section class="contact">
    <h1 class="contact__title">フォーム内容確認画面</h1>
    <p class="contact__english">Confirmation</p>
    <div class="contact__phase">
      <ul class="contact__phaseList">
        <li class="contact__phaseItem current">入力画面</li>
        <li class="contact__phaseItem current">内容確認</li>
        <li class="contact__phaseItem">送信完了</li>
      </ul>
    </div>
    <div class="contact__confirm">
      <?php the_content(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>