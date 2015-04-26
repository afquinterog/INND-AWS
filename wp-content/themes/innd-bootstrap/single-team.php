<?php
	/*Template Name: Portfolio Post */
?>

<?php get_header(); ?>

<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function($){
 $('img').each(function(){ 
 $(this).removeAttr('width')
 $(this).removeAttr('height');
 });
});
</script>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		$postId = get_the_ID();
		$category = get_the_category( $postId );
		$portfolioImage = get_post_meta($postId, 'full-image', true);
		$favoriteMusic  = get_post_meta($postId, 'favorite_music', true);
		$favoritePlace  = get_post_meta($postId, 'favorite_place', true);
		$favoriteFood   = get_post_meta($postId, 'favorite_food', true);
		$geekOut        = get_post_meta($postId, 'geek_out', true); 
		$mobileApps     = get_post_meta($postId, 'mobile_apps', true);
		$linkedIn       = get_post_meta($postId, 'linked_in', true);
		$mail           = get_post_meta($postId, 'mail', true);

        // Get the next post id 
		$args      = array( 'category' =>$category[0]->cat_ID, 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page'   => -1 ); 
        $postList = get_posts( $args );
        $pages = array();
        foreach ($postList as $post) {
        	$pages[] += $post->ID;
        }
        print_r($pages);
        $current = array_search( $postId, $pages);
        $prevID = $pages[$current-1];
        $nextID = $pages[$current+1];
        wp_reset_query();


		/*Array (     [0] => stdClass Object         (             
		[term_id] => 14             [name] => technology             [slug] => technology            
		[term_group] => 0             [term_taxonomy_id] => 14             [taxonomy] => category             
		[description] =>              [parent] => 9             [count] => 5             [object_id] => 1125             
		[filter] => raw             [cat_ID] => 14             [category_count] => 5             [category_description] =>             
		 [cat_name] => technology             [category_nicename] => technology             [category_parent] => 9         )  */
		
		//exit;
	?>
		<div class="container-flex intro-page" style="margin-bottom:60px">	
			<div class="row-flex" style="margin-top:120px">
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-page" style="margin-top:20px;">
  					<?php if ( (get_post_meta($postId, 'full-image')) ) {  
  					?>
  						<img class="img-responsive" src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $portfolioImage; ?>">
  					<?php
  					}
  					?>
  				</div>
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
					<h3><?php the_title(); ?></h3>  

						<div class="clearfix" style="padding-top:8px"></div>

						<p style="margin-top:0px"> <?php the_content(); ?> </p>

							<p><b>favorite place:&nbsp;</b><?php echo $favoritePlace; ?></p>
							<p><b>favorite music:&nbsp;</b><?php echo $favoriteMusic; ?></p>
							<p><b>i geek out to:&nbsp;</b><?php echo $geekOut; ?></p>
							<p><b>favorite mobile apps:&nbsp;</b><?php echo $mobileApps; ?></p>	
			
                        <p>&nbsp;</p>

						<div class="clearfix" style=""></div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 team-icons" style="margin-top:20px;">	
								<a href="<?php echo $linkedIn; ?>" class="link">
									<img class="team-linkedin" src="<?php echo site_url(); ?>/wp-content/uploads/in-black.png" />
								</a>
								<a href="mailto:<?php echo $mail; ?>" class="link">
									<img class="team-mail" src="<?php echo site_url(); ?>/wp-content/uploads/mail-black.png" />
								</a>
				        </div>		
						
				</div>
			</div>
            
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    	 	<div class="div-team-view-all text-left no-margin left-div" style="">
			          		<a class="link" style='' href="<?php echo get_permalink( $prevID  ); ?>">
			          			<img class="left-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-left.png" />
			          			<b class="left-text">previous member</b>
			          		</a>
			        	</div>
			    	 </div>

			    	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    	 	<div class="div-team-view-all text-right no-margin right-div" style="">
			          		<a class="link" style='' href="<?php echo get_permalink( $nextID ); ?>">
			          			<b class="right-text">next member</b></a>
			          			<img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
			          		</a>
			        	</div>
			    	 </div>
			       
			    </div>

			<div class="clearfix"></div>

			<div class="row-flex" style="margin-top:50px;">

				<?php
			        $args      = array( 'posts_per_page' => -1, 'category' => 2 , 'orderby' => 'date', 'order' => 'ASC'); 
			        $teamList = get_posts( $args );
			        foreach($teamList as $item){
			          $image  = wp_get_attachment_url( get_post_thumbnail_id($item->ID));
			          $name   = $item->post_name;
			          $title  = get_post_meta($item->ID, 'title', true);
			          $title  = explode("/", $title);
			      ?>

			      <a href="<?php echo site_url(); ?>/team/<?php echo $name; ?>"  >
			        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 thumbnail img-responsive">  
			          <img class="container-shadow-hvr hover" src="<?php echo $image;?>" alt="">
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
			                <span class="caption"><span class="team-text"><?php echo  $title[0] ; ?> </span></span>
			            </div>        
			        </div>
			      </a>  

			     <?php
			        }
			        wp_reset_query();
			     ?>

			</div>

			<div class="clearfix"></div>
			<div style="margin-bottom:50px"></div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="div-team-view-all text-right no-margin right-div" style="">
                <a class="link" style='' href="<?php echo site_url(); ?>/our-team/">
                    <b class="right-text">meet the team</b></a>
                    <img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
                </a>
            </div>
            </div>

			<div class="clearfix"></div>
			<div style="margin-bottom:60px"></div>



		</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
