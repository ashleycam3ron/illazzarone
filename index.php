<?php get_header(); ?>
<?php if (is_page(10)){ ?>
<div id="banner">
<video autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() ?>/images/neapolitan-wood-fired-pizza1.jpg" id="video-bg">
	<source src="<?php echo get_stylesheet_directory_uri() ?>/videos/neapolitan-wood-fired-pizza.webm" type="video/webm">
	<source src="<?php echo get_stylesheet_directory_uri() ?>/videos/neapolitan-wood-fired-pizza.mp4" type="video/mp4">
</video>
</div>
<?php } ?>
<?php if (is_page(21)){ ?>
	<iframe src="https://www.google.com/maps/d/embed?mid=z3twnvWQ1PhU.kYRPzqlE-lf4" width="640" height="380" style="width: 100%;"></iframe>
<?php } ?>
<?php if (is_page(366)){ ?>
	<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/Neapolitan-Pizza_What-to-Expect.jpg) no-repeat center;background-size: cover;min-height: 40vh;">
	</div>
<?php } ?>
<?php if (is_single()){ ?>
	<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri() ?>/images/il-Lazzarone-News.jpg) no-repeat center;background-size: cover;min-height: 40vh;">
	</div>
<?php } ?>

<div id="page" class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	  <?php if ( has_post_thumbnail() && !(is_page(21))) { ?>
		<div class="col-sm-10 col-md-4" style="margin-top: 20px;">
     		<?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
    	</div>
    	<div class="entry col-sm-10 col-md-8">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<?php if (is_single()){ ?><p><a target="_blank" href="<?php the_field('news_source_link'); ?>">Continue reading →</a></p><?php } ?>
		</div>
      <?php } else { ?>
        <div class="entry col-sm-12">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php if (is_single()){ ?><p><a target="_blank" href="<?php the_field('news_source_link'); ?>">Continue reading →</a></p><?php } ?>
		</div>
	  <?php } ?>

	</article>
  <?php endwhile; ?>
  <?php else : ?>
	<h1>Not Found</h1>
  <?php endif; ?>
</div>

<?php if (get_field('gallery')){ ?>
	<div class="container gallery">
	 <?php $images = get_field('gallery');
		if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li class="col-xs-3 col-sm-3 col-md-2">
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