<?php get_header(); ?>

<main>
  <?php //get_sidebar(); ?>

  <div class="ledgo-logo animate fadeIn one"></div>
  <article class="content animate fadeIn three">
    <div class="inner">
    <?php while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1 class="content-title">
          <a title="<?php printf(esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>"
             href="<?php the_permalink(); ?>" rel="bookmark">
            <?php the_title(); ?>
          </a>
        </h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>
