<?php get_header(); ?>

<main>
  <section class="archive" id="top">
    <div class="article__bread">
      <p class="article__breadItem"><a href="<?php echo home_url(); ?>">TOP</a></p>
      <p class="article__breadItem">＞</p>
      <p class="article__breadItem">クリエイターインタビュー</p>
    </div>
    <h1 class="archive__title">クリエイターインタビュー</h1>
    <div class="archive__inner">
      <ul class="archive__list">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 9, // 表示件数
              'orderby' => 'date',
              'order' => 'DESC'
          ) );

          if ($the_query->have_posts()) :
        ?>
        <?php
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="archive__item">
          <figure class="archive__image">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
            <?php endif; ?>
          </figure>
          <div class="archive__body">
            <h2 class="archive__singleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="archive__badge"><?php the_field('badge'); ?></p>
            <p class="archive__name"><?php the_field('name'); ?></p>
            <p class="archive__date"><?php the_time('Y/m/n'); ?></p>
          </div>
        </li>
        <?php endwhile;?>
        <?php endif; ?>
      </ul>
      <!-- pagenation -->
      <div class="archive__pagenation">
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
        wp_reset_postdata();
      ?>
      </div>
      <!-- /pagenation -->
    </div>
  </section>
  <a href="#top" class="flowBtn flowBtn--top interview"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-TOP@2x-100.jpg" alt="TOPへのボタン"></a>
</main>

<?php get_footer(); ?>