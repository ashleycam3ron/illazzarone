<footer id="footer" class="container-fluid clearfix">
	<h2>Connect &amp; Follow Us</h2>
	<div class="col-xs-12 col-sm-4 col-md-4">
		<h3>Recent News</h3>
		<?php query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
		    global $more;
		    $more = 0;
		    while (have_posts()) : the_post(); ?>
		    <h4><a href="/news"><?php the_title(); ?></a></h4>
		    <small class="date">
			    by <?php $posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo $tag->name . ' ';
					  }
					}
				?>
				 on <?php the_date('F d, Y'); ?></small>
		    <p><a class="btn btn-default" href="/news" class="more">Read More</a></p>
		    <?php endwhile;
		    wp_reset_query(); ?>
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4">
		<a target="_blank" href="http://americas.pizzanapoletana.org/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Neapolitan-Pizza-Certification.png" alt="Neapolitan Pizza Certification"></a>
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4">
		<h3>Connect</h3>
		<nav class="social" role="navigation">
		  <h4>Social Navigation</h4>
		  <?php wp_nav_menu(array('theme_location' => 'social')); ?>
		  <h5>St Joseph, MO</h5>
		</nav>
		<nav class="social" role="navigation">
		  <h4>Social Navigation</h4>
		  <?php wp_nav_menu(array('theme_location' => 'social2')); ?>
		  <h5>Kansas City, MO</h5>
		</nav>
	</div>
	<p class="row copyright">&copy;<?php echo date('Y'); ?> Il Lazzarone Neapolitan Pizzeria. All Rights Reserved.</p>
	<small style="margin-top: 0;"><a href="http://ashley-cameron.com" target="_blank">Handcrafted by Ashley Cameron</a></small>
</footer>

<?php wp_footer(); ?>
</body></html>