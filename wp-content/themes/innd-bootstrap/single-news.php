<?php get_header(); ?>

<script type="text/javascript">
/*
jQuery.noConflict();
jQuery(document).ready(function($){
 $('img').each(function(){ 
 $(this).removeAttr('width')
 $(this).removeAttr('height');
 });
});*/
</script>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		$postId = get_the_ID();
		$category = get_the_category( $postId );
		$slug = $category[0]->slug;

        // Get the next post id 
		$args      = array( 'category' =>$category[0]->cat_ID, 'posts_per_page' => -1 ); 
        $postList = get_posts( $args );
        $pages = array();
        foreach ($postList as $post) {
        	$pages[] += $post->ID;
        }
        $current = array_search( $postId, $pages);
        $currentID = $pages[$current];
        $prevID = $pages[$current-1];
        $nextID = $pages[$current+1];
        wp_reset_query();

        $backLink = "/our-blog/";
        $textLink = "back to blog";
	?>
		<div class="container-flex intro-page">	
			<div class="row-flex" style="margin-top:60px">
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-page" style="margin-top:80px;">
  					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'category-news' ); }?>
  						<p>&nbsp;</p>
                        <p><b>author:</b> <?php the_author(); ?></p>
                        <p><b>date:</b> <?php the_time('l, F jS, Y'); ?></p>		
  				</div>
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-page">
					<h3><?php the_title(); ?></h3> <br>
	  					<?php the_content(); ?>
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, this page does not exist.'); ?></p>
						<?php endif; ?>
				</div>
			</div>

			<div class="clearfix"></div>
			<div style="margin-bottom:40px"></div>
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    	 	
			        	 <div class="div-team-view-all text-left no-margin left-div" style="">
			        	 	<?php
			        	 		if(  $prevID != "" ){
			        	 	?>
			          		<a class="link" style='' href="<?php echo get_permalink( $prevID  ); ?>">
			          			<img class="left-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-left.png" />
			          			<b class="left-text">previous post</b>
			          		</a>
			          		<?php
			          			}
			          		?>
			        	</div>
			    	 </div>


			    	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			        	<div class="div-team-view-all text-right no-margin right-div" style="">
			        		<?php
			        	 		if(  $nextID != "" ){
			        	 	?>
			          		<a class="link" style='' href="<?php echo get_permalink( $nextID ); ?>">
			          			<b class="right-text">next post</b></a>
			          			<img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
			          		</a>
			          		<?php
			          			}
			          			else{
			          		?>
			          		<a class="link" style='' href="<?php echo site_url() . $backLink ?>">
			          			<b class="right-text"><?php echo $textLink; ?></b></a>
			          			<img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
			          		</a>
			          		<?php
			          			}
			          		?>

			        	</div>
			    	 </div>
			       
			    </div>

			    <div style="margin-bottom:100px"></div>

		</div>


<?php 
	get_footer(); 
?>
