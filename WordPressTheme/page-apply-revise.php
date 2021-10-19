<?php get_header(); ?>

<main>
  <section class="contact">
    <h1 class="contact__title">クリエイター登録内容<br>修正フォーム</h1>
    <p class="contact__english">Revise form</p>
    <div class="contact__phase">
      <ul class="contact__phaseList">
        <li class="contact__phaseItem current">入力画面</li>
        <li class="contact__phaseItem">内容確認</li>
        <li class="contact__phaseItem">送信完了</li>
      </ul>
    </div>
    <p class="contact__explain">ご登録いただいたクリエイター情報に変更・追加がある場合は、下記フォームよりご連絡ください。<br>登録内容を修正させていただきます。</p>
    <div class="contact__time">ご回答時間の目安：5分程度</div>
    <div class="contact__main">
      <?php the_content(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>