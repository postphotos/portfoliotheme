<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-10 large-centered columns" role="main">
	
		<h1 class="search-title"><?php _e('Showing search results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h1>
		<br><hr class="whitehr" /><br>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?><div class="row">
   		<div class="large-4 columns">
   		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> | works by Leo Postovoit"><?php the_post_thumbnail('large');?></a></div>
		<div class="large-8 columns"><h2><?php echo get_the_title(); ?></h2>
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> | works by Leo Postovoit">View here</h3></p>

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