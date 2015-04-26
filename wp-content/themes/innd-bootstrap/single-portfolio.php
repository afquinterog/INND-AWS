<?php
	/*Template Name: Portfolio Post */
?>

<?php get_header(); ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		$postId = get_the_ID();
		$category = get_the_category( $postId );
		$slug = $category[0]->slug;
		$client = get_post_meta($postId, 'client', true);
		$creative = get_post_meta($postId, 'creative', true);
		$development = get_post_meta($postId, 'development', true);
		$fullImage = get_post_meta($postId, 'full-image', true);

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

        //Select the back to services link according to actual category
        if( $slug == "technology"){
        	$backLink = "/portfolio/technology";
        	$textLink = "back to technology";
        }
        else if( $slug == "strategy"){
        	$backLink = "/portfolio/strategy";
        	$textLink = "back to strategy";
        }
        else if( $slug == "identity"){
        	$backLink = "/portfolio/identity";
        	$textLink = "back to identity";
        }
        else if( $slug == "interactivity"){
        	$backLink = "/portfolio/interactivity";
        	$textLink = "back to interactivity";
        }
        else if( $slug == "engagement"){
        	$backLink = "/portfolio/engagement";
        	$textLink = "back to engagement";
        }
        else if( $slug == "data"){
        	$backLink = "/portfolio/data";
        	$textLink = "back to data";
        }

        
      
	?>

		<div class="container-flex intro-page" style="margin-bottom:60px">	
			<div class="row-flex" style="margin-top:120px">
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-page" style="margin-top:20px;">
  					<?php if ( $fullImage ) {  ?>
  					<a title="Portfolio"  data-imagelightbox="a"
  						href="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $fullImage; ?>" >
  						<img class="img-responsive" src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $fullImage; ?>" />
  					</a>
					<?php } ?>
  				</div>
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                     <div class="clearfix" style="padding-top:18px"></div>
					<h3><?php the_title(); ?></h3>  
                    <br>
                    <p> <?php the_content(); ?> </p>
                    <p><b>client:</b> <?php echo $client; ?></p>
                    <p><b>service:</b> <?php echo $slug; ?></p>
                    <p><b>creative:</b> <?php echo $creative; ?></p>
                    <p><b>development:</b> <?php echo $development; ?></p>
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="row-flex" style="margin-top:60px;">

				<!-- Images of the  item-->
				<?php

					$actPortfolio = "portfolio";
					
					$index = 1;
					$images = array();

					// Get the portfolio images
					while( $index <= 9 ){
						if ( (get_post_meta($postId, $actPortfolio )) ) {
							$images[] = get_post_meta($post->ID, $actPortfolio, true);
						}
						$index = $index + 1;
						$actPortfolio = "portfolio" . $index;
					}

					$index = 1;
					foreach($images as $image){
				?>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 img-responsive" style="margin-top:20px;">	
					<a alt="Portfolio element <?php echo $index; ?>" 
					   data-imagelightbox="a"
					   href="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $image ?>"
					   data-group="portfolio"
					   >
						<img class="img-responsive lightbox"  src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $image ?>">
					</a>
				</div>

				<?php
						$index = $index + 1;
					}
				?>
				<!-- End of images section --> 
			</div>

			<div class="clearfix"></div>
			<div style="margin-bottom:50px"></div>

			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    	 	
			        	 <div class="div-team-view-all text-left no-margin left-div" style="">
			        	 	<?php
			        	 		if(  $prevID != "" ){
			        	 	?>
			          		<a class="link" style='' href="<?php echo get_permalink( $prevID  ); ?>">
			          			<img class="left-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-left.png" />
			          			<b class="left-text">previous project</b>
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
			          			<b class="right-text">next project</b></a>
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

			<div class="clearfix"></div>
			<div style="margin-bottom:60px"></div>



		</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php
// Hack to include the js portfolio librarys 
global $section; 
$section = "portfolio"; 
get_footer(); 
?>
