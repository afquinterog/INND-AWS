
<!-- Footer section -->
<div class="container-flex video" >
    <div class="row-flex no-gutter">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding-bottom:5px"> 
          <div class="div-black-bar">
              <p class="lead text-center green-text"><img class=""  src="<?php echo site_url(); ?>/wp-content/uploads/logo_footer.png" /></p>
              <p class="lead text-center green-text footer-url"><b>www.innuevodigital.com</b></p>
              <p class="lead text-center green-text footer-address">2201 Wisconsin Avenue NW Suite 305, Washington, DC 20007</p>
              <p class="lead text-center green-text footer-email"><a class="footer-email" href="mailto:studio@innuevodigital.com?Subject=Contact">studio@innuevodigital.com</p>
              <p class="lead text-center green-text footer-tel"><a class="footer-tel" href="tel:202.537.1107">202.537.1107</a></p>
              <p class="lead text-center green-text footer-images">
                
                  <span class="footer-icon">
                    <a class="footer-link" href="https://twitter.com/inNuevoDigital" target="_blank">
                        <img class="twitter-icon" src="<?php echo site_url(); ?>/wp-content/uploads/twitter_white.png" />
                    </a>
                  </span>

                  <span class="footer-icon">         
                    <a class="footer-link" href="https://www.facebook.com/innuevodigital" target="_blank">
                        <img class="facebook-icon"  src="<?php echo site_url(); ?>/wp-content/uploads/face_white.png" />
                    </a>
                  </span> 

                   <span class="footer-icon">         
                    <a class="footer-link" href="https://plus.google.com/u/2/b/106981251560834993342/106981251560834993342/posts" target="_blank">
                        <img class="google-icon"  src="<?php echo site_url(); ?>/wp-content/uploads/google_white.png" />
                    </a>
                  </span>   

                  <span class="footer-icon">         
                    <a class="footer-link" href="http://www.pinterest.com/innuevoDIGITAL/" target="_blank">
                        <img class="pinterest-icon"  src="<?php echo site_url(); ?>/wp-content/uploads/pinterest_white.png" />
                    </a>
                  </span>  

                   <span class="">         
                    <a class="footer-link" href="http://instagram.com/innuevodigital/" target="_blank">
                        <img class="instagram-icon"  src="<?php echo site_url(); ?>/wp-content/uploads/instagram_white.png" />
                    </a>
                  </span>  
             
                
              </p>
              <p class="lead text-center green-text footer-copyright">2014 @ inNuevo Digital. All rights reserved. Privacy policy.</p>
          </div>
          
        </div>
    </div>
</div>

<div class="container-flex video" style="margin-top:20px">
  

  <div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>

  <div class="row-flex no-gutter tagline">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <p class="text-center"></p>    
    </div>
  </div>

  <div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>

  <div class="row-flex no-gutter tagline">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <p class="text-center"></p>    
    </div>
  </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-div-center" >
   
    </div>

</div>
<!--End footer section -->


 
<!-- load js -->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- Include the slideshow only in the portfolio items -->
<?php
global $section; 
if($section == "portfolio"){
?>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/innd-bootstrap/js/box/imagelightbox.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/innd-bootstrap/js/box/main.js"></script>
<?php
}
?>
<!-- End slideshow scripts -->

<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<!-- scroll nav -->


<?php

?>

<script type="text/javascript">
  console.log("port = <?php echo $portfolio; ?>");
  $('a[href*=#]:not([href^=#servicesCarousel],[href^=#videoCarousel],[href^=#myModal])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        console.log("redirecting...");
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top -35
            }, 1500);

            return false;
        }
    }
    
});

//scroll to anchor on page load
$(document).ready(function () {
    var url=document.URL.split("#");
    var anchor=url[1];
    console.log("anchor=" + anchor);

    if(typeof anchor != 'undefined'){
        console.log('click... menu');
        //jQuery("#menu-item-1408").children("a").click();
        //jQuery("#menu-item-1408").children("a").text('new text');
        /*
        console.log("top=" + $('#'+anchor).offset().top );
        $("#"+anchor)[0].scrollIntoView(false);
        $('html, body').animate({
            'scrollTop':  $('#'+anchor).offset().top - 35
        }, 1500);

       // $('html, body').animate({ scrollTop: $('#'+anchor).offset().top -35 }, 1500);
        
        //console.log("scroll");
        //$.scrollTo( '#' + anchor, 800, {easing:'elasout'} );
        */
    }
});




$(function(){
    //remove anchor
    /*var hash = location.hash.replace('#','');
    if(hash != ''){
        location.hash = '';
    }*/
});
</script>

<script type="text/javascript">
  $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});
  </script>

<!--remove active class on page load and add active class to home-->
<script type="text/javascript" language="javascript">
$('.nav li').removeClass("active")
$('#menu-item-1406').addClass("active")
</script>


<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/innd-bootstrap/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUz12008OA2mpf0TU-VIruSgeT6ZuK4pU&sensor=false"></script>
<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var myLatlng = new google.maps.LatLng(38.919518, -77.070161)
                var mapOptions = {
                    zoom: 14,
                    center: myLatlng, 
                    scrollwheel: false,
                    draggable: false,
                    styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
                };
                
                var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  });
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                marker.setMap(map);
              
            }
</script>
<script type="text/javascript">
    $("[rel='tooltip']").tooltip();    
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption-grid,.caption-landscape,.caption-grid-lg').fadeIn(250); //.slideIn(250)
        },
        function(){
            $(this).find('.caption-grid,.caption-landscape,.caption-grid-lg').fadeOut(250); //.slideOut(205)
        }         
    ); 
</script>
<script type='text/javascript'>
    $(document).ready(function() {
         $('.videoCarousel').carousel({
             interval: 1500
         })
         $('#videoCarousel').carousel();
         $('#servicesCarousel').carousel();   
    });  
</script>
<script type='text/javascript'>
    $('#send_btn').popover({content: 'Thank you! An inNuevo Digital team member will soon respond.'},'click');    
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51633698-1', 'auto');
  ga('send', 'pageview');

</script>
  <script type="text/javascript">
    $(function() {
      $('#closeModal, #closeModal1, #closeModal2, #closeModal3, #closeModal4').click(function() {
        $('#navModal').modal('hide');
      });
    });
  </script>


  <!--  Creates a hover effect on the page -->
  <script type='text/javascript'>
    $(document).ready(function() {
      $(".hover").mouseover(function(){
         $(this).parent().find('.caption').css("background-color", "rgba(111, 180, 84, 0.95)");
         console.log('in');
     });

    $(".hover").mouseout(function(){
         $(this).parent().find('.caption').css("background-color", "rgba(0, 0, 0, 0.8)");
         console.log('out');
     });

    $(".caption").mouseover(function(){
         $(this).css("background-color", "rgba(111, 180, 84, 0.95)");
         console.log('in12');
     });

     $(".caption").mouseout(function(){
         $(this).css("background-color", "rgba(0, 0, 0, 0.8)");
         console.log('out');
     });

     // Twitter icon effect
     $(".twitter-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/twitter_green.png");
     });

     $(".twitter-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/twitter_white.png");
     });

     // Twitter icon effect
     $(".twitter-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/twitter_green.png");
     });

     $(".twitter-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/twitter_white.png");
     });

     // Facebook icon effect
     $(".facebook-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/face_green.png");
     });

     $(".facebook-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/face_white.png");
     });

     // Google icon effect
     $(".google-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/google_green.png");
     });

     $(".google-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/google_white.png");
     });

     // Pinterest icon effect
     $(".pinterest-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/pinterest_green.png");
     });

     $(".pinterest-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/pinterest_white.png");
     });

     // Pinterest icon effect
     $(".instagram-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/instagram_green.png");
     });

     $(".instagram-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/instagram_white.png");
     });


     // Services data hover
     $(".analytics-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/analytics2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");    
     });

     $(".analytics-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/analytics.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

     $(".seo-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/seo2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");   
     });

     $(".seo-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/seo.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

     $(".behavior-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/behavior2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");   
     });

     $(".behavior-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/behavior.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });   

     $(".marketing-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/marketing2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".marketing-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/marketing.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

     $(".communications-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/communications2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".communications-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/communications.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
     

     $(".research-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/research2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".research-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/research.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });


     $(".campaign-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/campaign2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".campaign-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/campaign.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
     

     $(".social-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/social2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".social-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/social.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
     

     $(".content-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/content2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".content-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/content.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
  

     $(".public-relations-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/public-relations2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".public-relations-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/public-relations.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
          

     $(".branding-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/branding2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".branding-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/branding.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

     $(".graphic-design-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/graphicdesign2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".graphic-design-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/graphicdesign.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
        
     
     $(".digital-publishing-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/digitalpublishing2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".digital-publishing-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/digitalpublishing.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
        

     $(".mobile-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/mobile2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".mobile-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/mobile.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
        
     $(".websites-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/websites21.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".websites-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/websites1.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
            
    
     $(".applications-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/applications2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".applications-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/applications.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
        
     $(".exhibitions-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/exhibitions2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".exhibitions-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/exhibitions.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

     $(".publicspaces-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/publicspaces2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".publicspaces-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/publicspaces.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });
        

     $(".products-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/products2.png");
         $(this).parent().find(".service-text").css("color", "#6fb454");
     });

     $(".products-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/products.png");
         $(this).parent().find(".service-text").css("color", "#000");
     });

    $(".go-to-icon").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/arrow_green_next_project1.png");
    });

    $(".go-to-icon").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/arrow_black_next_project1.png");
     });

    $(".go-to-text").mouseover(function(){
         $(this).find(".go-to-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/arrow_green_next_project1.png");
    });

    $(".go-to-text").mouseout(function(){
         $(this).find(".go-to-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/arrow_black_next_project1.png");
    });

    $(".team-linkedin").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/in-green.png");
    });
    $(".team-linkedin").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/in-black.png");
    });


    $(".team-linkedin").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/in-green.png");
    });
    $(".team-linkedin").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/in-black.png");
    });

    $(".team-mail").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/mail-green.png");
    });
    $(".team-mail").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/mail-black.png");
    });

    $(".left-div").mouseover(function(){
         $(this).find(".left-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/green-left.png");
         $(this).find(".left-text").css("color", "#6fb454");
    });
    $(".left-div").mouseout(function(){
         $(this).find(".left-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/black-left.png");
         $(this).find(".left-text").css("color", "#000");
    });

    $(".right-div").mouseover(function(){
         $(this).find(".right-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/green-right.png");
         $(this).find(".right-text").css("color", "#6fb454");
    });
    $(".right-div").mouseout(function(){
         $(this).find(".right-icon").attr("src", "<?php echo site_url(); ?>/wp-content/uploads/black-right.png");
         $(this).find(".right-text").css("color", "#000");
    });


    // Service previous icon
    $(".left-icon-service").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/green-left.png");
    });
    $(".left-icon-service").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/black-left.png");
    });
    // End Service previous icon

    // Service next icon
    $(".right-icon-service").mouseover(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/green-right.png");
    });
    $(".right-icon-service").mouseout(function(){
         $(this).attr("src", "<?php echo site_url(); ?>/wp-content/uploads/black-right.png");
    });
    // End Service next icon


   

     // End services data hover

    });  
  </script>

  <!-- Ends of the hover effect on the page -->

  <?php wp_footer(); ?>


    <!-- Handle the nav menu states -->
    <script type="text/javascript">
        var url = window.location.href;

        if( url.indexOf("our-team") > -1 ){
            page = "team";
            $('.navbar-nav a[href*="'+page+'"]').parent().addClass('current-menu-ancestor');
        }
        else if( url.indexOf("technology") > -1 || url.indexOf("interactivity") > -1 || url.indexOf("engagement") > -1 ||
                 url.indexOf("identity") > -1 || url.indexOf("strategy") > -1 || url.indexOf("data") > -1
               ) {
            page = "Services";
            $('.navbar-nav a[title*="'+page+'"]').parent().addClass('current-menu-ancestor');
        }
        else{
            var url = url.replace("http://", "");
            data = url.split("/");
            page = data[data.length-3];
            $('.navbar-nav a[href*="'+page+'"]').parent().addClass('current-menu-ancestor');
        }
      
    </script>
    <!--End Handle the nav menu states -->

    <script>
    jQuery(document).ready(function(){
  /* Show the HTML page only after the js and css are completely loaded */
  delayShow();
});
 
function delayShow() {
  var secs = 100;
  setTimeout('jQuery("body").css("visibility","visible");', secs);
}


</script>


  </body>
</html>