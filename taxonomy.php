<?php
	get_header();
?>
  <section class="hi">
    <div class="text">
      <h2 role="heading" aria-level="3"><?php _e( 'Projets réalisés utilisant ', 'portfolio' ); ?><?php single_term_title(); ?></h2>
    </div>
  </section>

<section  class="projets">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
      <article role="article">
        <h3 role="heading" aria-level="3"><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
        <figure><img src="<?php the_field('image_section_une'); ?>" alt="<?php the_title(); ?>"></figure>
        <div><?php the_field('texte_section_une'); ?></div>
          <a class="detail" href="<?php the_permalink(); ?>">Détails sur ce projet</a>
        <div><?php the_terms( $post->ID, 'Competence', 'Technologies: ', ' / ' ); ?></div>
        
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

</section>


<?php
	get_footer();
?>