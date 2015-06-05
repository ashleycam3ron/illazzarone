<footer class="container-fluid">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<h2>Recent News</h2>
		<?php query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
		    global $more;
		    $more = 0;
		    while (have_posts()) : the_post();
		        echo "<h2>Upcoming</h2>"; ?>
		    <?php the_content('[...]'); ?>
		     <p><a class="btn-default" href="<?php echo get_home_url();?>/news/events/" class="more">Read More</a></p>
		    <?php endwhile;
		    wp_reset_query(); ?>
		<address><span class="glyphicon glyphicon-map-marker"></span>412 Delaware St, Kansas City, MO 64105</address>
		<a href="tel:816-541-3695"><span class="glyphicon glyphicon-earphone">816.541.3695</a>

		<address><span class="glyphicon glyphicon-map-marker"></span>1628 Frederick Ave, St Joseph, MO 64501</address>
		<a href="tel:816-273-0582"><span class="glyphicon glyphicon-earphone">816.273.0582</a>
		<p class="copyright">&copy;2015 Il Lazzarone. All Rights Reserved.</p>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<a target="_blank" href="http://americas.pizzanapoletana.org/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Neapolitan-Pizza-Certification.png" alt="Neapolitan Pizza Certification"></a>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<h2>Connect</h2>
		<nav id="social" role="navigation">
		  <h2>Social Navigation</h2>
		  <?php wp_nav_menu(array('theme_location' => 'social')); ?>
		</nav>
	</div>
</footer>

<?php wp_footer(); ?>
</body></html>