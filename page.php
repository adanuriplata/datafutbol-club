<?php get_header(); ?>
  <main class="generic-page">
    <?php while(have_posts()): the_post(); ?>
      <?php the_title('<h1>','</h1>'); ?>
        <div class="generic-page__content">
          <?php the_content(); ?>
        </div>
      
    <?php endwhile ?>
  </main>
<?php get_footer(); ?>