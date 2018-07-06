<?php get_header(); ?>
<main class="main-404">
  <div class="texto">
    <h1>Opss...  No encontramos lo que buscas</h1>
    <p class="texto__404">--404--</p>
    <p class="texto__p">La pagina que buscas no existe</p>
  </div>
  <div class="post-relacionados">
    <h2>Pero puedes echarle un ojo a cualquiera de estas</h2>
    <section class="grid-post-ads">
      <article class="grid-post-ads__add">
        <img src="https://placehold.it/300x250/56aace/fff" alt="">
      </article>
      <?php 
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'orderby' => 'rand',
          'posts_per_page' => 4
        );
        $the_query = new WP_Query($args);
      ?>
      <?php if($the_query->have_posts()) : ?>
        <?php while($the_query->have_posts()) : $the_query->the_post() ?>
          <article class="grid-post-ads__post">
            <a class="grid-post-ads__post__a-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail-3') ?></a>
            <h4 class="grid-post-ads__post__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <div class="grid-post-ads__post__footer">
              <?php the_category(); ?>
              <time class="grid-post-ads__post__footer__date"><?php echo get_the_date(); ?></time>
            </div>
                
              </article>
        <?php endwhile ?>
      <?php else : ?>
        <article class="grid-post-ads__post">
          <h4 class="grid-posts__post__title">HEY!</h4>
          <p class="grid-posts-ads__post__extract">Sin informacion que mostrar</p>
          <p class="grid-posts-ads__post__extract">Agrega entradas para mostrarlas aqui</p>
        </article>
      <?php endif ?>
          <article class="grid-post-ads__add">
            <img src="https://placehold.it/300x250/56aace/fff" alt="">
          </article>
    </section>
  </div>
</main>
<?php get_footer(); ?>