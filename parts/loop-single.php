<?php
/**
 * Template part for displaying a single post
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



    <section class="entry-content" itemprop="text">
        <h2 class="single-title">
            <?php the_title(); ?>
        </h2>
		<?php
         get_template_part( 'parts/content', 'byline' );


         the_content();
         ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

</article> <!-- end article -->
