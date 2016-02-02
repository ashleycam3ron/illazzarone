<?php get_header(); ?>
<div id="page" class="container" style="margin-top: 5%;">
	<article>
        <div class="entry col-sm-12">
			<img class="img-responsive" style="margin: auto;" src="<?php echo get_stylesheet_directory_uri() ?>/images/404.png">
		</div>
	</article>
</div>

<? if (is_404()) { ?>
 _gaq.push(['_trackEvent', '404',
              document.location.pathname + document.location.search,
              document.referrer, 0, true]);
<? } ?>
<?php get_footer(); ?>