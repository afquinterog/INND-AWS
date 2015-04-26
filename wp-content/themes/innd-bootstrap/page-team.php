<?php
/*
Template Name: Our Team Template
*/
?>

<?php get_header(); ?>



<div class="container-flex" >

  <div class="row-flex no-gutter">

    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro team-title">
      <div id="whoweare">&nbsp;</div>
      <h3 class="text-center">who we are</h3> 
       <?php the_content(); ?>
    </div> 

    <div class="clearfix"></div>

      <?php
        $args      = array( 'posts_per_page' => -1,'category' => 2 , 'orderby' => 'date', 'order' => 'ASC'); 
        $teamList = get_posts( $args );
        foreach($teamList as $item){
          $image = wp_get_attachment_url( get_post_thumbnail_id($item->ID));
          $name = $item->post_name;
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
     ?>


 </div>
</div>

<div class="container-flex" style="margin-bottom:100px" >

  <div class="row-flex no-gutter">
  	<div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro team-last">
  	</div>
  </div>
</div>

<?php get_footer(); ?>