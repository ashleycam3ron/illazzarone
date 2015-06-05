<?php get_header(); ?>


<div id="page" class="container-fluid text-center">

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
						    'tax_query' => array(
								array(
									'taxonomy' => 'courses',
									'field'    => 'slug',
									'terms'    => 'pizza',
								),
							)
						    ));
						    $count = 0;
						   while ( $the_query->have_posts() ) :
						   $the_query->the_post(); ?>
						 <div class="item <?php if ( $count++ == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
						     <h3>The <?php the_title();?></h3>
						     <div class="col-md-4">
							    <span class="xl">10"</span>
						     	<p><?php the_field('brief_description'); ?></p>
						     </div>

						     <div class="col-md-4">
						     	<?php the_post_thumbnail('large');?>
						     </div>

						     <div class="col-md-4">
							    <span class="lg">Featuring</span>
						     	<p><?php the_field('ingredients'); ?></p>
						     </div>
							 <div class="clearfix">
								 <h4 class="lg clearfix">Rate Pizza</h4>
							 	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
							 </div>
						</div><!-- item active -->
						<?php endwhile; wp_reset_postdata(); ?>

                    </div>
                    <a class="carousel-control left" href="#carousel" data-slide="prev"><i class="glyphicon glyphicon-arrow-left"></i></a>
                    <a class="carousel-control right" href="#carousel" data-slide="next"><i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>

        </div><!-- end #slider -->

        <!-- !Menu -->
		<ul class="col-md-12">
	      <li class="col-xs-12 col-sm-6 col-md-4 c1">
		      <a>Beverages</a>
		      <span class="d"></span>
	      </li>
		  <li class="col-xs-12 col-sm-6 col-md-4 c2">
		      <a>Appetizers & Insalatas</a>
	      </li>
	      <li class="col-xs-12 col-sm-6 col-md-4 c3">
		      <a>Desserts</a>
		      <span class="d"></span>
	      </li>
	    </ul>

    </div>
    <!--/main slider carousel-->

	<div class="row">

		<div class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Neapolitan History<span>1760</span></h2>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div id="philosophy" class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Our Philosophy</h2>
		  <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor.</p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Quality Ingredients</h2>
		  <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
		</div>
    </div><!-- end .row -->

    <div class="row">
		<div class="col-xs-12 col-sm-6">
		  <h2>Il Lazzarone Commercial</h2>
		  <span class="d"></span>
		</div>
		<div class="col-xs-12 col-sm-6">
		  <h2>The Oven</h2>
		  <p>Each Acunto oven is made by hand and the family secrets for assembly have been passed down for four generations. The bricks are made from soil found at Mount Vesuvius, which makes them porous and allows them to draw the moisture out of the dough for a crispier final product. Each oven is kept at precisely 900 degrees, which allows us to cook a pizza in about 90 seconds.</p>
		  <span class="d"></span>
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
</script>

<?php get_footer(); ?>