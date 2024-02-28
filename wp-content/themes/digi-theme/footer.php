		<footer itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-main">
				<div itemscope itemtype="http://schema.org/Organization" id="logo">
					<div class="container">
						<a itemprop="url" href="<?php echo bloginfo('url') ?>">
							<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
						</a>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>