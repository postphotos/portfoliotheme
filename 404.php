<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-10 large-centered columns" role="main">
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title">This is not the page you're looking for.</h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'reverie'); ?>
					<br>
					<br>Or, maybe you just wanted to see a cat video!</p>
					<?php
$min=1;  $max=8;  //the number of videos on your playlist
?>
<object width="746" height="413"><param name="movie" value="http://www.youtube.com/p/CAAA1242CA3E37B4?version=3&hl=es_ES&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param>
<?php
//in index the script randomize the numbre between $min $max
echo "
<embed src=\"http://www.youtube.com/p/CAAA1242CA3E7B4?version=3&hl=es_ES&fs=1&index=".rand($min,$max)."\" type=\"application/x-shockwave-flash\" width=\"746\" height=\"413\" allowscriptaccess=\"always\" allowfullscreen=\"true\">
</embed>
";
?>
</object>
				</div>
				<p><?php _e('Please try the following:', 'reverie'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'reverie'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></li>
				</ul>
			</div>
		</article>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>