<?php
	get_header();
?>

<section class="projet">
	<h2 class="hidden">Projets</h2>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>

	    	<article role="article">
	    		<div class="text">
				<h3 role="heading" aria-level="3"><?php the_title(); ?>  <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
				<span><?php the_terms( $post->ID, 'Competence', 'Technologies : ', ' / ' ); ?></span>

				<h4 role="heading" aria-level="4"><?php the_field('titre_section_une'); ?></h4>
				<figure><a class="thumbnail" href="<?php the_field('image_section_une'); ?>"><img src="<?php the_field('image_section_une'); ?>" alt=""></a></figure>
				<div><?php the_field('texte_section_une'); ?></div>

				<h4 role="heading" aria-level="4"><?php the_field('titre_section_deux'); ?></h4>
				<figure><a class="thumbnail" href="<?php the_field('image_section_deux'); ?>"><img src="<?php the_field('image_section_deux'); ?>" alt=""></a></figure>
				<div>
                    <?php the_field('texte_section_deux'); ?>
                    <?php $bloginfo = get_bloginfo('template_url'); // adresse du blog

                    $titre=get_the_title(); // titre de l'article

                    $pmlink=get_permalink(); // adresse de l'article  ?>
                    <h4 role="heading" aria-level="4">
                        Partager le projet
                    </h4>
                    <a class="social partage-facebook facebook" href="http://www.facebook.com/share.php?u=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-facebook-circled-1"></i></a>

                    <a class="social partage-twitter twitter" href="http://twitter.com/home?status=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-twitter-circled-1"></i></a>

                    <a class="social partage-google google" href="https://plus.google.com/share?url=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-gplus-circled-1"></i></a>

                    <a class="social partage-mail mail" href="mailto:?subject=Article sur <?php bloginfo('name'); ?>&amp;body=Un projet interessant sur <?php bloginfo('name'); ?> : <?php echo $titre;?>... Adresse : <?php echo $pmlink; ?>" rel="nofollow" ><i class="icon-mail-circled"></i></a>

                </div>

				</div>

			</article>


	  <?php endwhile; ?>
	<?php endif; ?>
</section>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.heplbox.js"></script>
<script>
    jQuery( function() {
        jQuery( '.projet a.thumbnail' ).heplbox();
    } );
</script>
<?php
	get_footer();
?>