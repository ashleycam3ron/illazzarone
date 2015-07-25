<?php get_header(); ?>
<?php if (is_page(10)){ ?>
<!--
<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza.jpg) no-repeat center;background-size: cover;min-height: 40vh;">
</div>
-->
<div id="banner">
<video autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza.jpg" id="video-bg">
	<source src="<?php echo get_stylesheet_directory_uri() ?>/videos/neapolitan-wood-fired-pizza.webm" type="video/webm">
	<source src="<?php echo get_stylesheet_directory_uri() ?>/videos/neapolitan-wood-fired-pizza.mp4" type="video/mp4">
</video>
</div>
<?php } ?>
<?php if (is_page(21)){ ?>
	<iframe src="https://www.google.com/maps/d/embed?mid=z3twnvWQ1PhU.kYRPzqlE-lf4" width="640" height="380" style="width: 100%;"></iframe>
<?php } ?>

<div id="page" class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	  <?php if ( has_post_thumbnail() ) { ?>
		<div class="col-sm-10 col-md-4">
     		<?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
    	</div>
    	<div class="entry col-sm-10 col-md-8">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
      <?php } else { ?>
        <div class="entry col-sm-12">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	  <?php } ?>

	</article>
  <?php endwhile; ?>
  <?php else : ?>
	<h2>Not Found</h2>
  <?php endif; ?>
</div>

<?php if (get_field('gallery')){ ?>
	<div class="container gallery">
	 <?php $images = get_field('gallery');
		if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li class="col-xs-4 col-sm-3 col-md-2">
                    <a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" rel="pizza">
	                    <img class="img-responsive" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['title']; ?>" />
	                </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
	<?php endif; ?>
<?php } ?>

<?php get_footer(); ?>