<footer role="footer">
			<p>Jérémy Thiry 2013</p>
			<?php 
			// the query
			$the_query = new WP_Query( array( 'post_type' => 'socials')); ?>

			<?php if ( $the_query->have_posts() ) : ?>

			  <!-- pagination here -->
				<ul>
			  <!-- the loop -->
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>
			    	<a href="<?php the_field('lien') ?>" class="<?php the_field('nom') ?>" title="<?php the_title() ?>"></a>
					</li>
			  <?php endwhile; ?>
			  <!-- end of the loop -->
				</ul>
			  <!-- pagination here -->

			  <?php wp_reset_postdata(); ?>

			<?php else:  ?>
			  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
</footer>
</div>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=true"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/prism.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>