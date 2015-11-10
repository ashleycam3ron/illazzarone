<?php get_header(); ?>

<div id="home" class="container-fluid text-center">

	<!-- main slider carousel -->
    <div class="row" id="feature">
	    <h2>Our Authentic Neapolitan Pizzas</h2>
        <div id="slider">

            <div id="carousel-bounding-box">
                <div id="carousel" class="carousel slide text-center">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
	                    <?php $the_query = new WP_Query(array(
							'post_type' => 'menu',
							'posts_per_page' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC',
						    'tax_query' => array(
							    'relation' => 'AND',
								array(
									'taxonomy' => 'courses',
									'field'    => 'slug',
									'terms'    => array('featured'),
								),
								array(
									'taxonomy' => 'courses',
									'field'    => 'slug',
									'terms'    => array('pizze'),
								),
							)
						    ));
						    $count = 0;
						   while ( $the_query->have_posts() ) :
						   $the_query->the_post(); ?>
						 <div class="item <?php if ( $count++ == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
						     <h3><div>The</div> <?php the_title();?></h3>
						     <div class="col-md-4 hidden-xs">
							    <div class="col-md-10 col-md-offset-2">
								    <span class="xl">10"</span>
									<p class="lh"><?php the_field('brief_description'); ?></p>
								</div>
						     </div>

						     <div class="col-md-4">
							 <?php if ( has_post_thumbnail() ) { ?>
						     	 <?php the_post_thumbnail('large', array( 'class' => 'img-responsive'));?>
							 <?php } else { ?>
									<img width="360" height="360" src="http://66.147.240.173/~illazzar/wordpress/wp-content/uploads/neapolitan-pizza.png" class="img-responsive wp-post-image" alt="neapolitan-pizza">
							 <?php } ?>
						     </div>

						     <div class="col-xs-12 col-md-4">
							    <div class="col-xs-12 col-md-10 pull-left featuring">
							    	<span class="lg">Featuring</span>
									<span class="lh"><?php echo implode('<br>', get_field('ingredients2')); ?></span>
									<?php edit_post_link('Edit this.', '<p>', '</p>'); ?>
						     	</div>
						     </div>
							 <div class="clearfix hidden-xs">
								 <h4 class="lg clearfix rating">Rate Pizza</h4>
							 	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
							 </div>
						</div><!-- item active -->
						<?php endwhile; wp_reset_postdata(); ?>

                    </div>
                    <a class="carousel-control left" href="#carousel" data-slide="prev"><div class="arrow-prev"></div></a>
                    <a class="carousel-control right" href="#carousel" data-slide="next"><div class="arrow-next"></div></a>
                </div>
            </div>

        </div><!-- end #slider -->

        <!-- !Menu -->
		<ul class="col-md-12 menu">
	      <li class="col-xs-12 col-sm-6 col-md-4 c1">
	      	<div class="inner">
		      <a href="<?php echo home_url(); ?>/the-bar">Beverages
			      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/beverages.jpg" alt="Beverages" class="img-responsive right">
		      </a>
		    </div>
	      </li>
		  <li class="col-xs-12 col-sm-6 col-md-4 c2">
		  	<div class="inner">
		      <a href="<?php echo home_url(); ?>/menu/#antipasti">Appetizers &amp; Insalatas
		      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/appetizers-and-salads.jpg" alt="Appetizers and Insalatas" class="img-responsive">
		      </a>
		  	</div>
	      </li>
	      <li class="col-xs-12 col-sm-6 col-md-4 c3">
	      	<div class="inner">
		      <a href="<?php echo home_url(); ?>/menu/#dessert">Desserts
		      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/desserts.jpg" alt="Beverages" class="img-responsive left">
		      </a>
	      	</div>
	      </li>
	    </ul>

    </div>
    <!--/main slider carousel-->

	<div class="row">

		<div id="history" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4">
		  <h2>Neapolitan <br>History</h2>
		  <p class="col-md-10 col-md-offset-1"><?php the_field('history',false,false); ?></p>
		</div>

		<div id="philosophy" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4">
		  <h2>Our Philosophy</h2>
		  <p class="col-md-10 col-md-offset-1"><?php the_field('philosophy',false,false); ?></p>
		</div>

		<div id="ingredients" class="col-xs-10 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
		  <h2>Quality <br>Ingredients</h2>
		  <p class="col-md-10 col-md-offset-1"><?php the_field('ingredients',false,false); ?></p>
		</div>
    </div><!-- end .row -->

    <div class="row equal">
		  <iframe id="commercial" class="col-xs-12 col-sm-6 inverse col" src="https://player.vimeo.com/video/108967402" width="500" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
		  <h2 style="position: absolute;">Il Lazzarone Commercial
			  <span class="d"></span>
		  </h2>
		  </iframe>
		<div id="oven" class="col-xs-12 col-sm-6 inverse col">
		  <div class="col-md-8 col-md-offset-2">
			  <h2><div>The </div>Oven</h2>
			  <p><?php the_field('oven',false,false); ?></p>
		  <span class="d"></span>
		  </div>
		</div>
		<!-- Optional: clear the XS cols if their content doesn't match in height -->
		<div class="clearfix visible-xs-block"></div>
    </div><!-- end .row -->


</div>

<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: false
		});
	});

<?php if ( wp_is_mobile() ) { ?>
	jQuery(document).ready(function() {
	   jQuery("#carousel").swiperight(function() {
	      jQuery(this).carousel('prev');
	    });
	   jQuery("#carousel").swipeleft(function() {
	      jQuery(this).carousel('next');
	   });
	});
<?php } ?>

</script>

<?php get_footer(); ?>