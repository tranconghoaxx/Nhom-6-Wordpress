<?php
 
get_header(); ?>

<div class="main-content clearfix">
    <!-- main-content -->
    <div class="main-column">
        <!-- main-column -->
        <?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'theposts', get_post_format() );
				}
			} else {
				echo '<p>There are no posts!</p>';
			}
			?>
    </div><!-- main-column -->
    
    <div class="sidebar-column">
        <!-- sidebar-column -->
        <p>Content in the sidebar</p>
    </div><!-- sidebar-column -->
</div><!-- main-content -->
<?php
 
get_footer();
 
?>