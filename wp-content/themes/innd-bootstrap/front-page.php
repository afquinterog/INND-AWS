<?php
get_header(); 

$section = get_query_var('section');
?>

<!-- Logo section -->
<div class="clearfix"></div>
<div class="container-flex video">
 
  <div class="row-flex no-gutter">
    <div  id="home" style="height:1px">&nbsp;</div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive div-logo-img" >
        <img class="img-responsive" style ="width:100%" src="<?php echo site_url(); ?>/wp-content/uploads/innd-home1.jpg" />
    </div>
  </div>

  <div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>

  <div class="row-flex no-gutter tagline">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 intro">
       <h3 class="text-center">strategy | design | interaction</h3>    
    </div>
  </div>

</div>
<!--End  Logo section -->

<div class="clearfix"></div>
<!-- Green bar section -->
<div class="container-flex video" >
    <div class="row-flex no-gutter">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "> 
          <div class="div-green-bar">
              <p class="lead text-center green-text">inNuevo Digital provides creative solutions for brand engagement</p>
          </div>
          
        </div>
    </div>
</div>
<!-- End green bar section -->


<!-- What we do section -->
<div class="container-flex">

  
  <div class="row-flex no-gutter">
    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2  intro">
      <div id="services">&nbsp;</div>
      <h3 class="text-center">what we do</h3>
        <p class="lead text-center">we strive for impact and excel at delivering innovative solutions</p>
    </div>
  </div>
    
  <div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>
    

    <a href="<?php echo site_url(); ?>/services/technology/">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
         <img class="container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/technology1.jpg" alt="">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>technology</span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>        
      </div>
    </a>

    <a href="<?php echo site_url(); ?>/services/interactivity/">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
         <img class="full-width-img container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/interactivity.jpg" alt="">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>interactivity</span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>        
      </div>
    </a>

    <a href="<?php echo site_url(); ?>/services/engagement/">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
         <img class="full-width-img container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/engaging.jpg" alt="">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>engagement</span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>        
      </div>
    </a>

    <a href="<?php echo site_url(); ?>/services/identity/"  >
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">      
         <img class="full-width-img container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/identity.jpg" alt=""/>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>identity</span>&nbsp;
              <img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>     
        
      </div>
    </a>   

    <a href="<?php echo site_url(); ?>/services/strategy/">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
        <img class="container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/strategy.jpg" alt="">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>strategy</span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>        
      </div>
    </a>

    <a href="<?php echo site_url(); ?>/services/data/">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
         <img class="full-width-img container-shadow-hvr hover" src="<?php echo site_url(); ?>/wp-content/uploads/data.jpg" alt="">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span>data</span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
          </div>        
      </div>
    </a>

   
    
  <!--Services Carousel --> 
  <div class="row-flex no-gutter">
      <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="">
          <div id="servicesCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#servicesCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#servicesCarousel" data-slide-to="1"></li>
                <li data-target="#servicesCarousel" data-slide-to="2"></li>
                <!-- <li data-target="#servicesCarousel" data-slide-to="3"></li> -->
             </ol>
            <div class="carousel-inner">
              <div class="item active">
                  <img class="img-responsive" src="/wp-content/uploads/carousel-black.jpg">
                      <div class="container">
                          <div class="carousel-caption">
                              <p class="lead text-top">"inNuevo Digital has been a dynamic partner in helping the Center for Advancement of Informal Science Education (CAISE) plan and develop a robust online infrastructure for the professional field of out of school science, technology, engineering and mathematics (STEM) educators, researchers and evaluators." </p>
                          </div>
                      </div>
                </div>
                <div class="item">
                    <img src="/wp-content/uploads/carousel-black.jpg" class="img-responsive">
                      <div class="container">
                          <div class="carousel-caption">
                            <p class="lead text-top">"We are thrilled with inNuevo Digital's attention to detail and methodical approach to creating our corporate identity and our website. Our website now engages clients with our diverse portfolio and showcases the visual nature of our architectural projects. We highly recommend inNuevo Digital."</p>
                          </div>
                      </div>
                </div>
                <div class="item">
                    <img src="/wp-content/uploads/carousel-black.jpg" class="img-responsive">
                      <div class="container">
                          <div class="carousel-caption">
                              <p class="lead text-top">“inNuevo Digital captured the essence of my business through graphics. The brand identity is memorable and timeless."</p>
                          </div>
                      </div>
                </div>
                <!-- <div class="item">
                    <img src="/wp-content/uploads/carousel-black.jpg" class="img-responsive">
                      <div class="container">
                          <div class="carousel-caption">
                              <p class="lead"></p>
                          </div>
                      </div>
                </div> -->
             </div>
              <!--a class="left carousel-control" href="#servicesCarousel" data-slide="prev">
                  <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#servicesCarousel" data-slide="next">
                  <span class="icon-next"></span>
              </a-->  
        </div>
      </div>
  </div>
  <!--End Services Carousel --> 
</div>
<!-- End what we do section -->


<!-- Who we are section -->
<div class="container-flex">

  <div class="row-flex no-gutter">

    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 intro">
      <div  id="team">&nbsp;</div>
      <h3 class="text-center">who we are</h3> 
      <p class="lead text-center">our team members host a diverse set of expertise and are fueled by a passion for doing meaningful work</p>    
    </div> 

    <div class="clearfix"></div>

     <?php
        $args      = array( 'posts_per_page' => 12,  'category' => 2 , 'orderby' => 'date', 'order' => 'ASC'); 
        $portfolio = get_posts( $args );
        foreach($portfolio as $item){
          $image = wp_get_attachment_url( get_post_thumbnail_id($item->ID));
          $name = $item->post_name;
          $title  = get_post_meta($item->ID, 'title', true);
          $title  = explode("/", $title);
      ?>

      <a href="<?php echo site_url(); ?>/team/<?php echo $name; ?>"  >
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 thumbnail img-responsive">  
          <img class="container-shadow-hvr hover" src="<?php echo $image;?>" alt="">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <span class="caption"><span class="team-text"><?php echo  $title[0] ; ?> </span></span>
            </div>        
        </div>
      </a>  

     <?php
        }
     ?>

       

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="div-team-view-all text-right  right-div" style="margin-top:25px">
          <a class="link" href="<?php echo site_url(); ?>/our-team/">
            <b class="right-text">view all</b></a>
            <img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
          </a>
        </div>
    </div>

   

 </div>



</div>
<!-- End who we are section -->


<!-- What we think blog section -->
<div class="container-flex">

  <div class="clearfix visible-xs-block"></div>
  <div class="clearfix"></div>

  <div class="row-flex no-gutter">
    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 intro" style="margin-top:-3px">
        <div id="blog">&nbsp;</div>
        <h3 class="text-center">what we think</h3>
        <p class="lead text-center">updates, awards, best practices and a behind the scenes look into our creative studio</p>  
    </div>
  </div>

  <div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>

  <div class="row-flex no-gutter">    
    <?php
      $sticky = get_option('sticky_posts');
      rsort( $sticky );
      $sticky = array_slice( $sticky, 0, 6);
      query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );

      if (have_posts()) : 
          while (have_posts()) : the_post(); 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>

    <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail img-responsive">  
        <?php if(isset($url) && $url != "" ){
        ?>
         <img class="full-width-img container-shadow-hvr hover" src="<?php echo $url; ?>" alt="">
        <?php
         }
        ?>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <span class="caption"><span><?php the_title(); ?></span>&nbsp;<img src="<?php echo site_url(); ?>/wp-content/uploads/plus2.gif" class="skinny-plus" alt="plus icon"/></span>
         </div>        
      </div>
    </a>
       
    <?php endwhile; ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="div-team-view-all text-right  right-div" style="margin-top:25px">
          <a class="link" href="<?php echo site_url(); ?>/our-blog/">
            <b class="right-text">view all</b></a>
            <img class="right-icon" src="<?php echo site_url(); ?>/wp-content/uploads/black-right.png" />
          </a>
        </div>
    </div>

  </div>
</div>
<!-- End what we think blog section -->

<div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>

<!-- Contact section -->
<div class="container-flex">
  
  <div class="row-flex">
    <div class="col-lg-8 col-lg-offset-2 col-md-8-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 intro" style="margin-top:36px" >
      <div id="contact"></div>
      <h3 class="text-center">contact us</h3> 
      <p class="lead text-center">chat with us about your goals, vision, strategy or just brainstorm with us</p>  
    </div>
    <div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>
  </div>

  <div class="container-flex video" style="">
      <div class="clearfix visible-xs-block"></div>
      <div class="clearfix"></div>
      <div class="row-flex no-gutter">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-div-center" >
             <div class="contact-div">
              <div class="contact-div-phone text-center">
                  <a href="tel:202.537.1107">202.537.1107</a>
              </div>
              <div class="contact-div-logo text-center">
                  <a href="mailto:studio@innuevodigital.com"><img src="<?php echo site_url(); ?>/wp-content/uploads/icon_message.png" /></a>
              </div>
              <div class="contact-div-email text-center">
                  <a href="mailto:studio@innuevodigital.com?Subject=Contact">studio@innuevodigital.com</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 div-map">
               <div id="map"></div>
          </div>
      </div>
  </div>
</div>


<?php endif; ?> 

<?php get_footer(); ?> 
<script type="text/javascript">
if(window.location.hash == "#services"){
    $('a[href="/#services"]').parent().addClass("active");
    $('a[href="/#home"]').parent().removeClass("active");
}
else if(window.location.hash == "#team"){
    $('a[href="/#team"]').parent().addClass("active");
    $('a[href="/#home"]').parent().removeClass("active");
}
else if(window.location.hash == "#blog"){
    $('a[href="/#blog"]').parent().addClass("active");
    $('a[href="/#home"]').parent().removeClass("active");
}
</script>
<?php
/*Redirect the user to the selected section*/
  if($section != ""){
    ?>
      <script type="text/javascript">
        /*function scrollTo(hash) {
            location.hash = "#" + hash;
        }
        scrollTo('<?php echo $section ; ?>');*/

        /*
        function scrollTo(hash) {
            //location.href = '<?php echo site_url(); ?>/' +  "#" + hash;
            console.log("en fuuncction");
            if( hash == "home"){
               $("#closeModal").click();
            }
            else  if( hash == "services"){
               $("#closeModal2").click();
            }
            else  if( hash == "whoweare"){
               $("#closeModal1").click();
            }
           else  if( hash == "blog"){
               $("#closeModal3").click();
            }
           else  if( hash == "contact"){
               $("#closeModal4").click();
            }
        }
        scrollTo('<?php echo $section ; ?>');
        */
      </script>
    <?php
  }
?>




