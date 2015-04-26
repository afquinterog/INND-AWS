<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-flex intro-page" style="padding-top:10px">
	<div class="row-flex">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  			<?php if ( has_post_thumbnail() )  { the_post_thumbnail('large');} ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row-flex no-gutter">
		    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 prev-page img-responsive">
		    	<?php $previous_post = get_previous_post(true, 4, category);
					if (!empty( $previous_post )): ?>
  						<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><img class="img-responsive" src="/wp-content/uploads/previous-white.png"></a>
  					<?php endif; ?>
  			</div>
  			 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 intro-page" style="margin-top:15px">
            	<h3 class="text-center"><?php the_title(); ?></h3>
            	<h3 class="text-center"><?php $title = get_post_meta($post->ID, 'title', true); ?>
				<p class="lead text-center"  style="text-align:center"><?php echo $title; ?></p>
        	</div>
        	 <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 next-page img-responsive">
        	 	<?php
				$next_post = get_next_post(true, 4,category);
					if (!empty( $next_post )): ?>
  						<a href="<?php echo get_permalink( $next_post->ID ); ?>"><img class="img-responsive" src="/wp-content/uploads/next-white.png"></a>
  					<?php endif; ?>
			</div>
      </div>
      <div class="clearfix"></div>
	<div class="row-flex intro-page" style="margin-top:40px;">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
			<?php the_content(); ?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<ul class="list-group favorite-place">
				<li class="list-group-item">
					<h4>favorite place : 
						<?php $favorite_place = get_post_meta($post->ID, 'favorite_place', true); ?>
							<?php echo $favorite_place; ?></h4>
				</li>
				<li class="list-group-item">
					<h4>favorite food :
							<?php $favorite_food = get_post_meta($post->ID, 'favorite_food', true); ?>
							<?php echo $favorite_food; ?></h4>
				</li>
				<li class="list-group-item">
					<h4>favorite music : <?php $favorite_music = get_post_meta($post->ID, 'favorite_music', true); ?>
							<?php echo $favorite_music; ?></h4>
				</li>
			</ul>
		</div>
	</div>
</div> 	
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>