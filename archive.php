<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-10 large-centered columns" role="main">
	

	<h1 class="search-title"> <?php single_cat_title(); ?> </h1>
	<hr class="whitehr" /><br>
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		
		
		<?php while ( have_posts() ) : the_post(); ?><div class="row">
   		<div class="large-4 columns">
   				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  $the_post_thumbnail(large); 
					}
					else {
						echo '<img src="http://postphotos.us/p/wp-content/themes/portfoliotheme/favicon.png">';
					}
				?>

   		 the_post_thumbnail('large');?></div>
		<div class="large-8 columns"><?php get_template_part( 'content', get_post_format() ); ?>
		</div></div>
		<br><hr class="whitehr" /><br>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>