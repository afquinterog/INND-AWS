<?php

?>

<?php get_header(); ?>
 
<?php
  $postId    = get_the_ID();  
  $greenText = get_post_meta($postId, 'greenText', true);               
?>

<?php //echo var_export($GLOBALS['post'], TRUE);?>
<div class="container-flex" >

  <div class="row-flex no-gutter">

    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro services-title">
    <div class="row-flex no-gutter">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 prev-page img-responsive">
            
        </div> 
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <h3 class="text-center"><?php the_title(); ?></h3>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 next-page img-responsive">
    
        </div>
    </div>
    </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     
        <p class="lead text-center services-text1 services-menu">
          <?php 
           showServicesMenu( get_the_ID() );
          ?>
        </p>
    </div>

<div class="clearfix"></div>
    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">      
      <p class="lead text-center services-text"><?php the_content(); ?></p>
    </div> 

    <div class="container-flex" >
      <div class="row-flex no-gutter">
        <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro services-icon-div">
            <div class="services-icons">

            	  <?php 
            	  	$title = get_the_title($postId);
            	  	if($title == 'technology'){
		          ?>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail img-responsive ">  
                      <img class="websites-icon" src="<?php echo site_url(); ?>/wp-content/uploads/websites1.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span  class="service-text">websites</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="mobile-icon" src="<?php echo site_url(); ?>/wp-content/uploads/mobile.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span  class="service-text">mobile</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="applications-icon" src="<?php echo site_url(); ?>/wp-content/uploads/applications.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span  class="service-text">applications</span></span>
                      </div>        
                    </div>
                  </div>

                  <?php
                  	} else if($title == 'interactivity'){
                  ?>

                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail img-responsive ">  
                      <img class="exhibitions-icon" src="<?php echo site_url(); ?>/wp-content/uploads/exhibitions.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">exhibitions</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="publicspaces-icon" src="<?php echo site_url(); ?>/wp-content/uploads/publicspaces.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">public spaces</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="products-icon" src="<?php echo site_url(); ?>/wp-content/uploads/products.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">products</span></span>
                      </div>        
                    </div>
                  </div>

                   <?php
                  	} else if($title == 'engagement'){
                  ?>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail img-responsive ">  
                      <img class="social-icon" src="<?php echo site_url(); ?>/wp-content/uploads/social.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">social</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail img-responsive ">  
                      <img class="content-icon" src="<?php echo site_url(); ?>/wp-content/uploads/content.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">content</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="public-relations-icon" src="<?php echo site_url(); ?>/wp-content/uploads/public-relations.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">public relations</span></span>
                      </div>        
                    </div>
                  </div>


                  <?php
                  	} else if($title == 'identity'){
                  ?>

                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-2">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 thumbnail img-responsive ">  
                      <img class="branding-icon" src="<?php echo site_url(); ?>/wp-content/uploads/branding.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">branding</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  thumbnail img-responsive ">  
                      <img class="graphic-design-icon" src="<?php echo site_url(); ?>/wp-content/uploads/graphicdesign.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">graphic design</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  thumbnail img-responsive ">  
                      <img class="seo-icon" src="<?php echo site_url(); ?>/wp-content/uploads/seo.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">seo</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  thumbnail img-responsive ">  
                      <img class="digital-publishing-icon" src="<?php echo site_url(); ?>/wp-content/uploads/digitalpublishing.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">digital publishing</span></span>
                      </div>        
                    </div>
                  </div>


                  <?php
                  	} else if($title == 'strategy'){
                  ?>

                  <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 thumbnail img-responsive ">  
                      <img class="marketing-icon" src="<?php echo site_url(); ?>/wp-content/uploads/marketing.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">marketing</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 thumbnail img-responsive ">  
                      <img class="communications-icon" src="<?php echo site_url(); ?>/wp-content/uploads/communications.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text" style="">communications</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  thumbnail img-responsive ">  
                      <img class="research-icon" src="<?php echo site_url(); ?>/wp-content/uploads/research.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">research</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  thumbnail img-responsive ">  
                      <img class="campaign-icon" src="<?php echo site_url(); ?>/wp-content/uploads/campaign.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">campaigns</span></span>
                      </div>        
                    </div>
                  </div>

                  <?php
                  	} else if($title == 'data'){
                  ?>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail img-responsive ">  
                      <img class="analytics-icon" src="<?php echo site_url(); ?>/wp-content/uploads/analytics.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">analytics</span></span>
                      </div>        
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="seo-icon" src="<?php echo site_url(); ?>/wp-content/uploads/seo.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">seo</span></span>
                      </div>        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  thumbnail img-responsive ">  
                      <img class="behavior-icon" src="<?php echo site_url(); ?>/wp-content/uploads/behavior.png" alt="">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-icon-text">
                        <span style="" class=""><span class="service-text">behavior</span></span>
                      </div>        
                    </div>
                  </div>

                  <?php
                  	}
                  ?>
<?php //endwhile; else : ?>
  <?php //endif; ?>
                  

            </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <!-- Green bar section -->
    <div class="container-flex video" >
        <div class="row-flex no-gutter">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-green-bar "> 
              <div class="div-green-bar-services">
                 
                  <p class="lead text-center green-text services-green-text" >
                      <?php echo $greenText; ?>
                  </p>
              </div>
              
            </div>
        </div>
    </div>
    <!-- End green bar section -->
  
    <div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>

    <!-- Image section -->

      <?php
      	$first = true;
      	$foundImage = "margin-bott";
      	$pageslug = get_the_title($postId);
        $catslug  = get_category_by_slug($pageslug); 
        $catid    = $catslug->term_id; 

        $args      = array( 'posts_per_page' => -1,  'category' => $catid ); 
        $portfolio = get_posts( $args );

        foreach($portfolio as $item){
	          $image = wp_get_attachment_url( get_post_thumbnail_id($item->ID));
	          $name = $item->post_name;

	          if($image != ""){
	          	$foundImage = "";
      ?>

      <?php 
      	if($first == true){
      		$first = false;
      ?>
      	<div class="col-lg-12 col-lg-offset-0 col-md-12-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 services-images">
      <?php
  		}
      ?>

      <a href="<?php echo site_url(); ?>/portfolio/digital-solutions/<?php echo $name; ?>"  >
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
           <img class="full-width-img container-shadow-hvr hover" src="<?php echo $image ?>" alt=""/>
        </div>
      </a>  

     <?php
     		}
        }
     ?>

	<?php 
		if($first == false){
	?>
		</div>
	<?php
		}
	?>
  <!-- End Image section  -->    

   <div class="clearfix"></div>
 </div>
</div>

<div class="container-flex <?php echo $foundImage; ?>" >
</div>

<?php get_footer(); ?>