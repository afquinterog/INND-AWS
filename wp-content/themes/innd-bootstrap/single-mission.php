<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-flex">
	<div class="row-flex" style="margin-top:60px">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-img intro-page">
  			<?php if ( has_post_thumbnail() )  {the_post_thumbnail('large');} ?>
				<h3 class"text-center" style="text-align:center"><?php the_title(); ?><h3>
				<?php $tag_line = get_post_meta($post->ID, 'tag_line', true); ?>
				<p class="lead text-center"  style="text-align:center"><?php echo $tag_line; ?></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 intro-page center-p" >	
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>