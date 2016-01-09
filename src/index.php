<?php get_header(); ?>

<main>
  <?php get_sidebar(); ?>
  <section>
  <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h2 class="entry-title">
        <a title="<?php printf(esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>"
           href="<?php the_permalink(); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
  </section>
</main>

<?php get_footer(); ?>
