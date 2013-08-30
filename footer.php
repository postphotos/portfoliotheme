	</div><!-- Row End -->
</section><!-- Container End -->

<div class="full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer role="contentinfo" style="bottom: -22px; padding-top:20px;">
	
	<div class="large-3 columns gray">
		<p>&copy; <?php echo date('Y'); ?>, Leo Postovoit.</p>
	</div>
	
	<div class="large-9 columns gray footerfix">
		Menu: <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>

	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>