<?php get_header(); ?>
<div id="banner" class="hidden-xs" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza.jpg) no-repeat center #000;min-height: 40vh;">
</div>
<div id="archive" class="text-center">
	<div id="menu" class="container">
		<h2 id="antipasti"><span class="d"></span>Antipasti<span class="d"></span></h2>
		<?php echo do_shortcode('[menu type="antipasti"]'); ?>

		<h2><span class="d"></span>Insalata<span class="d"></span></h2>
		<?php echo do_shortcode('[menu type="insalata"]'); ?>

		<h2 id="pizze"><span class="d"></span>Pizze<span class="d"></span></h2>
		<h3>Pizze Rosse</h3>
		<?php echo do_shortcode('[menu type="pizze-rosse"]'); ?>
		<h3>Pizze Bianche</h3>
		<?php echo do_shortcode('[menu type="pizze-bianche"]'); ?>

		<h2 id="dessert"><span class="d"></span>Dessert<span class="d"></span></h2>
		<?php echo do_shortcode('[menu type="dessert"]'); ?>

		<h2 id="beverages"><span class="d"></span>Beverages<span class="d"></span></h2>
		<div class="beverages"><?php echo do_shortcode('[menu type="beverages"]'); ?></div>
	</div>
</div>
<?php get_footer(); ?>