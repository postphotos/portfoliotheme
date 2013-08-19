	</div><!-- Row End -->
</section><!-- Container End -->
<br><br>
<div class="full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="full-width" role="contentinfo"><hr>
	<div class="row"><div class="large-12"><div class="row">

	<div class="large-2 columns">
		<p>&copy; <?php echo date('Y'); ?>, Leo Postovoit.</p>
	</div>
	
	<div class="large-10 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
	
	</div></div></div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>