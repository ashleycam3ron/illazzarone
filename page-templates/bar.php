<?php
/*
Template Name: Bar Template
*/

get_header(); ?>

<div id="page" class="container-fluid text-center">

	<!-- main slider carousel -->
    <div class="row" id="bar">
	    <h2>From the Bar</h2>
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
									'terms'    => array( 'bar', 'featured' ),
								),
							)
						    ));
						    $count = 0;
						   while ( $the_query->have_posts() ) :
						   $the_query->the_post(); ?>
						 <div class="item <?php if ( $count++ == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
						     <h3><div>The</div> <?php the_title();?></h3>
						     <?php the_post_thumbnail('large', array( 'class' => 'img-responsive fullwidth'));?>
						     <div class="col-md-4 col-md-offset-1 recipe">
							    <div class="col-md-10">
							    	<span class="lg">Highlights</span>
									<span class="lh"><?php the_field('ingredients'); ?></span>
									<p class="lh"><?php the_field('brief_description'); ?></p>
									<?php edit_post_link('Edit this drink.', '<p>', '</p>'); ?>
						     	</div>
						     </div>
							 <div class="clearfix">
								 <h4 class="lg clearfix rating">Rate Drink</h4>
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

     </div><!--/main slider carousel-->
	<div class="row">
		<div class="col-xs-12 col-sm-6">
		  <h2>The Bar</h2>
		  <p class="col-md-10 col-md-offset-1">Kansas City has a full bar featuring herb-infused concoctions. Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
		<div class="col-xs-12 col-sm-6">
		  <h2>Quality <br>Ingredients</h2>
		  <p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
		</div>
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