<?php
	get_header();
?>
<section class="hi">
        <div class="text"> 
        <h2 title="blog" role="heading" aria-level="2">Blog</h2>
        <p>Voici mon blog. Enjoy!</p>
        </div>
    </section>
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
			<a class="social partage-facebook facebook" href="http://www.facebook.com/share.php?u=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-facebook-circled-1"></i></a>

			<a class="social partage-twitter twitter" href="http://twitter.com/home?status=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-twitter-circled-1"></i></a>

			<a class="social partage-google google" href="https://plus.google.com/share?url=<?php echo $pmlink; ?>" target="blank" rel="nofollow" ><i class="icon-gplus-circled-1"></i></a>

			<a class="social partage-mail mail" href="mailto:?subject=Article sur <?php bloginfo('name'); ?>&amp;body=Un article interessant sur <?php bloginfo('name'); ?> : <?php echo $titre;?>... Adresse : <?php echo $pmlink; ?>" rel="nofollow" ><i class="icon-mail-circled"></i></a>

	<?php endwhile; ?>
	<?php endif; ?>
	<div class="comment">
		<h4 id="comm" class="comm">Commentaires</h4>
		<?php comments_template() ?>
	</div>
</article>
<div id="position">
	<?php wp_list_categories(array('title_li' => __( '<h3><i class="icon-tag"></i>Catégories</h3>' ))); ?>
	<li class="categories">
		<h3><i class="icon-bookmarks"></i> Derniers articles</h3>
		<ul>
			<?php
			    $recentPosts = new WP_Query();
			    $recentPosts->query('showposts=5');
			?>
			<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
			    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</li>
	<a href="blog/"><i class="icon-forward"></i> Retourner à la section blog</a>
</div>
</section>


<?php
	get_footer();
?>