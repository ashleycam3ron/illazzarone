<?php get_header(); ?>

<div id="archive">
	<div class="container">

 <div id="snippets">
        <?php
/*
	         $terms = get_terms('courses');

	        foreach ($terms as $term) {
            $wpq = array ('post_type' => 'menu','taxonomy'=>'pizze','term'=>$term->slug, 'posts_per_page' => -1,'orderby'=>'title', 'order'=>'ASC');
            $query = new WP_Query ($wpq);
            $article_count = $query->post_count; ?>

            <h2 id="<?php echo $term->slug ?>"><?php echo $term->name; ?></h2>
            <?php if ($article_count) { ?>
            <ul class="code">
            <?php $posts = $query->posts;
            foreach ($posts as $post) {
            echo "<li><a href=\"".get_permalink()."\">".$post->post_title."</a></li>";
            } ?>
            </ul>
            <?php }}
*/ ?>
    </div>
	<?php //wp_reset_query(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div class="col-sm-3">
     		<?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
			<h2 class="text-center"><?php the_title(); ?></h2>
			<?php //the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>
<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>