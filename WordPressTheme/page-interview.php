<?php get_header(); ?>
<main>
  <section class="archive">
    <h1 class="archive__title">クリエイターインタビュー</h1>
    <div class="archive__inner">
      <ul class="archive__list">
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <a href="" class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</a>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</h2>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</h2>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</h2>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</h2>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
        <li class="archive__item">
          <figure class="archive__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-image@4x-100.jpg" alt="">
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle">デザイン歴18年。<br>独立開業デザイナーが語る、<br>課題解決のイロハ</h2>
            <p class="archive__badge">株式会社若旅デザイン事務所</p>
            <p class="archive__name">代表　若旅 宏和</p>
            <p class="archive__date">2021/00/00</p>
          </div>
        </li>
      </ul>
      <!-- pagenation -->
      <div class="pagenation">
      <?php 
      if ($the_query->max_num_pages > 1) {
          echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%/',
              'current' => max(1, $paged),
              'mid_size' => 1,
              'total' => $the_query->max_num_pages
          ));
      }
      wp_reset_postdata();?>
      </div>
      <!-- /pagenation -->
    </div>
  </section>
</main>
<?php get_footer(); ?>