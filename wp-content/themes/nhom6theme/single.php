<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
<article class="post">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="single-post-image">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'single-post-image' ); ?></a>

    </div>
    <?php } ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <p class="post-meta"><?php the_time( 'F jS, Y' ); ?> | <a
            href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
        | <?php
				$categories = get_the_category();
				$comma      = ', ';
				$output     = '';
				
				if ( $categories ) {
					foreach ( $categories as $category ) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
					}
					echo trim( $output, $comma );
				} ?>
    </p>
    <?php the_content() ?>
</article>

<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
get_footer();
 
?>