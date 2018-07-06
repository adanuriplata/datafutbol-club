<?php get_header(); ?>
  <main class="main-index">
    <div class="hero">
      <div class="hero__title" data-aos="zoom-in">DATA FUTBOL</div>
    </div>
    <?php 
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'menu-category'
      );
      wp_nav_menu($args);
    ?>
    <?php if( have_posts() ) : ?>
      <section class="grid-posts">
        <?php while (have_posts() ) : the_post(); ?>
          <article class="grid-posts__post">
             <?php the_post_thumbnail('small-thumbnail-1') ?>
            <h3 class="grid-posts__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="grid-posts__post__extract"><?php echo(get_the_excerpt()); ?></p>
            <div class="grid-posts__post__tags">
              <span><?php edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); ?></span>
              <span>Social</span>
            </div>  
          </article>
        <?php endwhile ?>
      </section>
    <?php else : ?>
      <section>
        <article>
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
      </section>
    <?php endif; ?>
    <div class="paginacion"><?php echo paginate_links(); ?></div>
    <?php get_sidebar(); ?>
    <div class="sponsor-lb">
      <img src="https://download-twitter-videos.com/es/img/728.jpg" alt="">
    </div>
  </main>
    <?php get_footer(); ?>
</body>
</html> 