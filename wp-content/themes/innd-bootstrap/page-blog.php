
<?php
/*
Template Name: Blog template
*/
?>

<?php get_header(); ?>



<div class="container-flex" >

  <div class="row-flex no-gutter">

    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro team-title">
      <div id="whoweare">&nbsp;</div>
      <h3 class="text-center">Blog</h3> 
       <?php the_content(); ?>
      </p>   
    </div> 

    <div class="clearfix"></div>

      <?php
        $args      = array( 'posts_per_page' => -1,'category' => 25 , 'orderby' => 'date', 'order' => 'DESC'); 
        $teamList = get_posts( $args );
        foreach($teamList as $item){
          $image = wp_get_attachment_url( get_post_thumbnail_id($item->ID));
          $name = $item->post_name;
          $title  = get_post_meta($item->ID, 'title', true);
          //$title  = explode("/", $title);
      ?>

      <a href="<?php echo site_url(); ?>/team/<?php echo $name; ?>"  >
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumbnail img-responsive">  
          <img class="container-shadow-hvr hover" src="<?php echo $image;?>" alt="">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span class="caption"><span class="team-text"><?php echo get_the_title( $item->ID ); ?></span></span>
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