<?php get_header(); ?>
<div id="banner" class="hidden-xs" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza.jpg) no-repeat center #000;min-height: 40vh;">
</div>
<div id="archive" class="text-center">
	<div id="menu" class="container">
		<div class="col-md-6">
			<h2><span class="d"></span>Antipasti<span class="d"></span></h2>
			<?php echo do_shortcode('[menu type="antipasti"]'); ?>
		</div>
		<div class="col-md-6">
			<h2><span class="d"></span>Insalata<span class="d"></span></h2>
			<?php echo do_shortcode('[menu type="insalata"]'); ?>
		</div>
		<h2><span class="d"></span>Pizze<span class="d"></span></h2>
		<div class="col-md-6">
			<h3>Pizze Rosse</h3>
			<?php echo do_shortcode('[menu type="pizze-rosse"]'); ?>
		</div>
		<div class="col-md-6">
			<h3>Pizze Bianche</h3>
			<?php echo do_shortcode('[menu type="pizze-bianche"]'); ?>
		</div>

		<h2><span class="d"></span>Dessert<span class="d"></span></h2>
		<div class="col-md-6"><?php echo do_shortcode('[menu type="dessert"]'); ?></div>

		<h2><span class="d"></span>Beverages<span class="d"></span></h2>
		<?php echo do_shortcode('[menu type="beverages"]'); ?>

		<h2><span class="d"></span>Extras<span class="d"></span></h2>
		<?php echo do_shortcode('[menu type="extras"]'); ?>

	</div>
</div>
<?php get_footer(); ?>