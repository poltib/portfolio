<?php
    get_header();
?>
<section class="news blog">
    <h2 class="hidden">Article</h2>
    <section class="hi">
        <div class="text"> 
        <h2><?php single_cat_title(); ?></h2>
        <p>Articles de la catégorie "<?php single_cat_title(); ?>".</p>
        </div>
    </section>
    <div id="position">
        <div class="category">
            <?php wp_list_categories(array('title_li' => __( '<h3>Catégories</h3>' ))); ?>
        </div>
            <a href="../../blog/">Retourner à la section blog</a>
    </div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article role="article" itemscope itemtype="http://schema.org/Article">
            <a href="<?php the_permalink(); ?>">
            <h3 class="post" role="heading" aria-level="3" itemprop="name"><?php the_title(); ?> <span><time date="<?php the_time('Y-m-d') ?>" pubdate><?php echo(get_the_date()) ?></time></span></h3>
            </a>
            <span>Catégorie(s) : <?php the_category('/'); ?></span>
            <div itemprop="text"><?php the_excerpt(); ?></div>
            <span class="comm"><?php comments_number(); ?></span>
        </article>
    <?php endwhile; ?>
  <?php endif; ?>
    
</section>


<?php
    get_footer();
?>