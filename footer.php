	</div><!-- Row End -->
</section><!-- Container End -->
<br><br>
<div class="full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row" role="contentinfo"><hr>
	<div class="large-4">
		<p>&copy; <?php echo date('Y'); ?>, Leo Postovoit.</p>
	</div>
	
	<div class="large-8">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
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