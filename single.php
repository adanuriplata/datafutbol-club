<?php get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <main class="main-single-post">
      <div class="single-post__hero">
        <?php the_title('<h1 class="single-post__hero__title">','</h1>'); ?>
        <p class="single-post__hero__copy"><?php echo get_the_excerpt();?></p>
        <div class="author">
          <div class="author__info">
            <figure class="author__info__avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 52 ); ?></figure>
            <div class="author__info__name-container">
              <p class="author__info__name-container__name"><?php echo get_the_author_link(); ?></p>
              <p class="author__info__name-container__description"><?php echo get_the_author_meta('description') ?></p>
            </div>
          </div>
          <div class="author__share-post">
            <a href="">Share</a>
          </div>
        </div>
      </div>
      <div class="single-post__thumbnail">
        <?php the_post_thumbnail('large') ?>
      </div>
      <div class="single-post__content"><?php the_content();?></div>
  <?php endwhile ?>
      <div class="single-post-footer">
        <div class="sponsor-lb">
          <?php if(get_option('datafutbol_728_90')) :?>
            <?php echo get_option('datafutbol_728_90'); ?>
          <?php else : ?>
            <img src="https://download-twitter-videos.com/es/img/728.jpg" alt="">
          <?php endif ?>
    </div>
        <div class="author">
          <div class="author__info">
            <figure class="author__info__avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 52 ); ?></figure>
            <div class="author__info__name-container">
              <p class="author__info__name-container__name"><?php the_author_link(); ?></p>
              <p class="author__info__name-container__description"><?php echo get_the_author_meta('description') ?></p>
            </div>
          </div>
          <div class="author__share-post">
            <a href="">Share</a>
          </div>
        </div>
        <div class="tags">
        <?php 
          the_tags( 
            '<ul><li class="btn-raw"><i class="fas fa-tag"></i>', 
            '</li><li class="btn-raw"><i class="fas fa-tag"></i>', 
            '</li></ul>' ); 
        ?>
        </div>
      </div>
      <section class="grid-post-ads">
        <article class="grid-post-ads__add">
          <?php if(get_option('datafutbol_300_250_1')) :?>
            <?php echo get_option('datafutbol_300_250_1'); ?>
          <?php else : ?>
            <img src="https://placehold.it/300x250/56aace/fff" alt="">
          <?php endif ?>
        </article>
        
        <?php 
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'posts_per_page' => 4
          );
          $the_query = new WP_Query( $args );
          ?>
        <?php if( $the_query->have_posts() ) : ?>
          <?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
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
          <?php endwhile?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <article class="grid-post-ads__post">
        <h4 class="grid-posts__post__title">HEY!</h4>
            <p class="grid-posts-ads__post__extract">Sin informacion que mostrar</p>
        </article>
        <?php endif; ?>

        <article class="grid-post-ads__add">
          <?php if(get_option('datafutbol_300_250_2')) :?>
            <?php echo get_option('datafutbol_300_250_2'); ?>
          <?php else : ?>
            <img src="https://placehold.it/300x250/56aace/fff" alt="">
          <?php endif ?>
        </article>
      </section>
    </main>
    <div class="comments">
          <?php comment_form(); ?>
    </div>
    <div class="comments-list">
      <ul>
        <?php  
          $comments_var = get_comments(array(
            'post_id' => $post->ID,
            'status' => 'approve'
          ));
          wp_list_comments( array(
            'per_page' => 10,
            'reverse_top_level' => false
          ), $comments_var);
        ?>
      </ul>
    </div>
<?php get_footer(); ?>

