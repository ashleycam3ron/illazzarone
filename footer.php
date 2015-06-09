<footer id="footer" class="container-fluid clearfix">
	<h2>Connect &amp; Follow Us</h2>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<h3>Recent News</h3>
		<?php query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
		    global $more;
		    $more = 0;
		    while (have_posts()) : the_post(); ?>
		    <h4><?php the_title(); ?></h4>
		    <?php the_excerpt(); ?>
		     <p><a class="btn btn-default" href="<?php the_permalink(); ?>" class="more">Read More</a></p>
		    <?php endwhile;
		    wp_reset_query(); ?>

		<p class="copyright">&copy;2015 Il Lazzarone. All Rights Reserved.</p>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<a target="_blank" href="http://americas.pizzanapoletana.org/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Neapolitan-Pizza-Certification.png" alt="Neapolitan Pizza Certification"></a>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<h3>Connect</h3>
		<address><span class="glyphicon glyphicon-map-marker"></span>1628 Frederick Ave, St Joseph, MO 64501 <small>(map)</small></address>
		<a href="tel:816-273-0582"><span class="glyphicon glyphicon-earphone"></span>816.273.0582</a>
		<nav class="social" role="navigation">
		  <h4>Social Navigation</h4>
		  <?php wp_nav_menu(array('theme_location' => 'social')); ?>
		</nav>
		<address><span class="glyphicon glyphicon-map-marker"></span>412 Delaware St, Kansas City, MO 64105 <small>(map)</small></address>
		<a href="tel:816-541-3695"><span class="glyphicon glyphicon-earphone"></span>816.541.3695</a>
		<nav class="social" role="navigation">
		  <h4>Social Navigation</h4>
		  <?php wp_nav_menu(array('theme_location' => 'social2')); ?>
		</nav>
	</div>
</footer>

<?php wp_footer(); ?>
</body></html>