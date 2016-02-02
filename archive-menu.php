<?php get_header(); ?>
<div id="banner" class="hidden-xs" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza.jpg) no-repeat center #000;min-height: 40vh;">
</div>
<div id="archive" class="text-center">
	<h1 class="hidden">Il Lazzarone Menu – Appetizers, Salads, Pizza, Dessert, & Drinks</h1>
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
		<div class="beverages"><?php //echo do_shortcode('[menu type="beverages"]'); ?>
			<ul class="menu">
				<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3">
					<a target="_blank" href="<?php the_field('pdf',263); ?>">
						<img class="img-responsive col-sm-12 hidden-xs" src="<?php the_field('thumb',263); ?>" alt="Saint Joseph Wine & Beer List"/>
						<div class="col-sm-12">
							<h4>St Joseph Wine & Beer List</h4>
						</div>
					</a>
					PDF
				</li>
				<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3">
					<a target="_blank" href="<?php the_field('pdf',264); ?>">
						<img class="img-responsive col-sm-12 hidden-xs" src="<?php the_field('thumb',264); ?>" alt="Kansas City Wine & Beer List"/>
						<div class="col-sm-12">
							<h4>Kansas City Wine & Beer List</h4>
						</div>
					</a>
					PDF
				</li>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>