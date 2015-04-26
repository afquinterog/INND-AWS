  <!DOCTYPE html>
<html lang="en-US"
  xmlns="http://www.w3.org/1999/xhtml" 
  xmlns:og="http://ogp.me/ns#" 
  xmlns:fb="http://www.facebook.com/2008/fbml" >
  <head>
  <meta charset="utf-8">
  <title>inNuevo Digital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="website design, website development, washington dc, digital marketing, strategy, drupal, joomla, wordpress, buddypress, exhibits, graphic design" />
  <meta name="robots" content="INDEX,FOLLOW" />
   <!-- styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />    
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="<?php echo site_url(); ?>/wp-content/themes/innd-bootstrap/css/stylebox.css" rel="stylesheet"> 
  <script type="text/javascript">
      var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
  </script>

   <script type="text/javascript">
            (function() {
                var link_element = document.createElement("link"),
                    s = document.getElementsByTagName("script")[0];
                if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                    link_element.href = "http:";
                }
                link_element.href += "//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800";
                link_element.rel = "stylesheet";
                link_element.type = "text/css";
                s.parentNode.insertBefore(link_element, s);
            })();
        </script>

  <script type="text/javascript">
    var loadimages=new Array()
    function preloadimages(){
    for (i=0;i<preloadimages.arguments.length;i++){
    loadimages[i]=new Image()
    loadimages[i].src=preloadimages.arguments[i]
    }
    }
    preloadimages("/wp-content/uploads/home-green.png",
                  "/wp-content/uploads/whoweare-green.png",
                  "/wp-content/uploads/services-green.png",
                  "/wp-content/uploads/news-green.png",
                  "/wp-content/uploads/contact-green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/twitter_green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/twitter_green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/face_green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/google_green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/pinterest_green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/instagram_green.png",

                  "<?php echo site_url(); ?>/wp-content/uploads/in-green.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/mail-green.png",

                  "<?php echo site_url(); ?>/wp-content/uploads/green-left.png",
                  "<?php echo site_url(); ?>/wp-content/uploads/green-right.png"

                  )
  </script>
     
  <?php wp_head(); ?>
  </head>




  <body>
    <div class="container-flex">
      <div class="row-flex">
        <div class="col-lg-offset-8 col-md-offset-5">
            <div class="navbar navbar-default navbar-fixed-top navbar-shadow" role="navigation">
              <div class="navbar-collapse collapse navbarcustom" id="new-navbar-collapse-1">
                <ul class="nav navbar-nav">

<?php              
if ( is_front_page() && is_home() ) {
  // Default homepage
} elseif ( is_front_page() ) {
    wp_nav_menu( array(
  'menu' => 'home-scroll',
  'depth' => 1,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);


} elseif ( is_home() ) {
  // blog page
} else {
  wp_nav_menu( array(
  'menu' => 'primary',
  'depth' => 1,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
}

?>


              
</ul>
              </div>
                <div class="container-flex">
                  <div class="row-flex">
                    <div class="col-lg-offset-8 col-md-offset-5 col-sm-offset-5 col-xs-offset-1">
                       <div class="navbar navbar-fixed-top hidden-md hidden-lg" role="navigation">
                            <button class="mobile-plus-icon" data-toggle="modal" data-target="#navModal"></button>             
                      </div>
                    </div>
                  </div>
                </div>   
              </div>
            </div>
          </div>  

          <div class="row-flex pull-right nav">
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                <div class="modal" id="navModal" tabindex="-1" role="dialog" aria-labelledby="navModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header nav">
                        <button type="button" class="mobile-modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div>
                      <div class="modal-body text-center">
                        <p><a id="closeModal" href="/#home">Home</a></p>
                        <p><a id="closeModal2" href="/#services">Services</a></p>
                        <p><a id="closeModal1" href="/#team">Who We Are</a></p>
                        <p><a id="closeModal3" href="/#blog">Blog</a></p>
                        <p><a id="closeModal4" href="/#contact">Contact</a></p>  
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
            </div>

         <div class="row-flex pull-right nav">
         </div>
        </div>      