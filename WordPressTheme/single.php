<?php get_header(); ?>

<main>
  <section class="article" id="top">
    <div class="article__info">
      <div class="article__body">
        <h1 class="article__title"><?php the_field('catch'); ?></h1>
        <p class="article__badge"><?php the_field('badge'); ?></p>
        <p class="article__name"><?php the_field('name'); ?></p>
        <ul class="article__categories">
          <?php
            $categories = get_the_category();
            foreach( $categories as $category ) {
              echo '<li class="article__category '.$category->slug.'"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
            }
          ?>
        </ul>
      </div>
      <figure class="article__image">
        <?php if(has_post_thumbnail()): ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
        <?php endif; ?>
      </figure>
    </div>
    <p class="article__description"><?php the_field('description'); ?></p>
    <?php the_content(); ?>
    <div class="article__new">
      <h2 class="article__new-interview">new interview</h2>
      <ul class="article__newList">
      <?php
      $args = array( 'posts_per_page' => 2, );
      $postslist = get_posts( $args );
      foreach ( $postslist as $post ) :
        setup_postdata( $post );
      ?>
        <li class="article__newItem">
          <figure class="article__newImage">
            <?php if(third_image()): ?>
              <img src="<?php echo third_image(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>          
          </figure>
          <div class="article__newBody">
            <h3 class="article__newTitle">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="article__newBadge"><?php the_field('badge'); ?></p>
            <p class="article__newName"><?php the_field('name'); ?></p>
          </div>
        </li>
        <?php
          endforeach;
          wp_reset_postdata();
        ?>
      </ul>
    </div>
    <a href="<?php echo home_url("interview"); ?>" class="article__btn">インタビュー一覧へ</a>
  </section>
  <a href="#top" class="flowBtn flowBtn--top interview"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-TOP@2x-100.jpg" alt="TOPへのボタン"></a>
</main>

<?php get_footer(); ?>