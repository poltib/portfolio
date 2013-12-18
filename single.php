<?php
	get_header();
?>
<section class="news blog">
	<h2 class="hidden">Article</h2>
<article>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<h3 class="post" role="heading" aria-level="3">
				<?php the_title() ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span>
			</h3>
			<span>Catégorie(s) : <?php the_category('/'); ?></span>
			<div class="post-content"><?php the_content() ?></div>
			<?php $bloginfo = get_bloginfo('template_url'); // adresse du blog

			$titre=get_the_title(); // titre de l'article

			$pmlink=get_permalink(); // adresse de l'article  ?>
			<h4 role="heading" aria-level="4">
				Partager l'article
			</h4>
			<a class="partage" href="http://www.facebook.com/share.php?u=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Facebook : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/fbh.png" alt="Facebook" /></a>

			<a class="partage" href="http://twitter.com/home?status=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Twitter : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/twh.png" alt="Twitter" /></a>

			<a class="partage" href="https://plus.google.com/share?url=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><img title="Partager sur Google + : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/ggh.png" alt="Google +" /></a>

			<a class="partage" href="<?php echo $pmlink; ?>feed" target="blank" rel="nofollow" ><img title="Suivre les réponses par RSS à : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/feedh.png" alt="RSS" /></a>

			<a class="partage" href="mailto:?subject=Article sur <?php bloginfo('name'); ?>&amp;body=Un article interessant sur <?php bloginfo('name'); ?> : <?php echo $titre;?>... Adresse : <?php echo $pmlink; ?>" rel="nofollow" ><img title="Envoyer par mail : <?php echo $titre;?>" src="<?php echo $bloginfo;?>/img/mailh.png" alt="Mail" /></a>

	<?php endwhile; ?>
	<?php endif; ?>
	<div class="comment">
		<h4 class="comm">Commentaires</h4>
		<?php comments_template() ?>
	</div>
</article>
<div id="position">
	<div class="category">
		<?php wp_list_categories(array('title_li' => __( '<h3>Catégories</h3>' ))); ?>
	</div>
	<a href="blog/">Retourner à la section blog</a>
</div>
</section>


<?php
	get_footer();
?>