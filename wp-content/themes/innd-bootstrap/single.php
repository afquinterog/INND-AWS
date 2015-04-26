<?php
$post = $wp_query->post;
if ( in_category('team') ) {
  include( TEMPLATEPATH.'/single-team.php');
} elseif ( in_category('technology') ){
	include( TEMPLATEPATH.'/single-portfolio.php');
} elseif ( in_category('interactivity') ){
	include( TEMPLATEPATH.'/single-portfolio.php');
} elseif ( in_category('identity') ){
	include( TEMPLATEPATH.'/single-portfolio.php');
} elseif ( in_category('branding')){
	include( TEMPLATEPATH.'/single-portfolio.php');
} 
elseif ( in_category('exhibits')){
	include( TEMPLATEPATH.'/single-portfolio.php');
} 
elseif ( in_category('graphic-design')){
	include( TEMPLATEPATH.'/single-portfolio.php');
} 
elseif ( in_category('services') ) {
	include( TEMPLATEPATH.'/single-services.php');
} else { 
  include( TEMPLATEPATH.'/single-news.php');
}
?>



