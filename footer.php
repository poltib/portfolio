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
			    		<a href="<?php the_field('lien') ?>" class="social <?php the_field('nom') ?>" title="<?php the_title() ?>"><i class="<?php the_field('nom_icon') ?>"></i></a>
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
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45178902-1', 'jeremy-thiry.be');
          ga('send', 'pageview');

        </script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=true"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/prism.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>