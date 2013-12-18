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
				<figure><img src="<?php the_field('image_section_une'); ?>" alt=""></figure>
				<div><?php the_field('texte_section_une'); ?></div>

				<h4 role="heading" aria-level="4"><?php the_field('titre_section_deux'); ?></h4>
				<figure><img src="<?php the_field('image_section_deux'); ?>" alt=""></figure>
				<div>
                    <?php the_field('texte_section_deux'); ?>
                    <?php $bloginfo = get_bloginfo('template_url'); // adresse du blog

                    $titre=get_the_title(); // titre de l'article

                    $pmlink=get_permalink(); // adresse de l'article  ?>
                    <h4 role="heading" aria-level="4">
                        Partager le projet
                    </h4>
                    <a class="partage" href="http://www.facebook.com/share.php?u=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Facebook : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/fbh.png" alt="Facebook" /></a>

                    <a class="partage" href="http://twitter.com/home?status=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Twitter : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/twh.png" alt="Twitter" /></a>

                    <a class="partage" href="https://plus.google.com/share?url=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Google + : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/ggh.png" alt="Google +" /></a>

                    <a class="partage" href="<?php echo $pmlink; ?>feed" target="blank" rel="nofollow" ><img title="Suivre les réponses par RSS à : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/feedh.png" alt="RSS" /></a>

                    <a class="partage" href="mailto:?subject=Projet sur <?php bloginfo('name'); ?>&amp;body=Un projet interessant sur <?php bloginfo('name'); ?> : <?php echo $titre;?>... Adresse : <?php echo $pmlink; ?>" rel="nofollow" ><img title="Envoyer par mail : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/mailh.png" alt="Mail" /></a>

                </div>

				</div>

			</article>


	  <?php endwhile; ?>
	<?php endif; ?>
</section>

<?php
	get_footer();
?>