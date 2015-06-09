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
						    'tax_query' => array(
								array(
									'taxonomy' => 'courses',
									'field'    => 'slug',
									'terms'    => 'pizze',
								),
							)
						    ));
						    $count = 0;
						   while ( $the_query->have_posts() ) :
						   $the_query->the_post(); ?>
						 <div class="item <?php if ( $count++ == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
						     <h3><div>The</div> <?php the_title();?></h3>
						     <div class="col-md-4">
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

						     <div class="col-md-4">
							    <div class="col-md-10 pull-left featuring">
							    	<span class="lg">Featuring</span>
									<span class="lh"><?php echo implode('<br>', get_field('ingredients2')); ?></span>
									<?php edit_post_link('Edit this.', '<p>', '</p>'); ?>
						     	</div>
						     </div>
							 <div class="clearfix">
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
		      <a href="/">Beverages
			      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/beverages.jpg" alt="Beverages" class="img-responsive right">
		      </a>
		    </div>
	      </li>
		  <li class="col-xs-12 col-sm-6 col-md-4 c2">
		  	<div class="inner">
		      <a href="/">Appetizers &amp; Insalatas
		      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/appetizers-and-salads.jpg" alt="Appetizers and Insalatas" class="img-responsive">
		      </a>
		  	</div>
	      </li>
	      <li class="col-xs-12 col-sm-6 col-md-4 c3">
	      	<div class="inner">
		      <a href="/">Desserts
		      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/desserts.jpg" alt="Beverages" class="img-responsive left">
		      </a>
	      	</div>
	      </li>
	    </ul>

    </div>
    <!--/main slider carousel-->

	<div class="row">

		<div id="history" class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Neapolitan <br>History</h2>
		  <p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div id="philosophy" class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Our Philosophy</h2>
		  <p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor.</p>
		</div>

		<div id="ingredients" class="col-xs-12 col-sm-6 col-md-4">
		  <h2>Quality <br>Ingredients</h2>
		  <p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
		</div>
    </div><!-- end .row -->

    <div class="row equal">
		  <iframe id="commercial" class="col-xs-12 col-sm-6 inverse" src="https://player.vimeo.com/video/108967402" width="500" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
		  <h2 style="position: absolute;">Il Lazzarone Commercial
			  <span class="d"></span>
		  </h2>
		  </iframe>
		<div id="oven" class="col-xs-12 col-sm-6 inverse">
		  <div class="col-md-8 col-md-offset-2">
			  <h2><div>The </div>Oven</h2>
			  <p>Each Acunto oven is made by hand and the family secrets for assembly have been passed down for four generations. The bricks are made from soil found at Mount Vesuvius, which makes them porous and allows them to draw the moisture out of the dough for a crispier final product. Each oven is kept at precisely 900 degrees, which allows us to cook a pizza in about 90&nbsp;seconds.</p>
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

//equal height columns
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;

jQuery(container).each(function() {

   $el = jQuery(this);
   jQuery($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

jQuery(window).load(function() {
  equalheight('.equal .inverse');
});


jQuery(window).resize(function(){
  equalheight('.equal .inverse');
});
</script>

<?php get_footer(); ?>