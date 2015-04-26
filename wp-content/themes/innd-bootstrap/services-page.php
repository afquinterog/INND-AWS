<?php
/*
Template Name: Services
*/
get_header(); ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php

            $pagelist = get_pages('sort_column=menu_order&sort_order=asc&child_of=541');
            $pages = array();
            foreach ($pagelist as $page) {
            $pages[] += $page->ID;
            }
            $current = array_search(get_the_ID(), $pages);
            $prevID = $pages[$current-1];
            $nextID = $pages[$current+1];
        ?>
<div class="container-flex intro">
    <div class="row-flex no-gutter" style="margin-top:62px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
            <?php if ( has_post_thumbnail() )  { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail('full', array('class' => 'img-responsive'));} ?>
        </div>
    </div> 
        <div class"clearfix"></div>
    <div class="row-flex no-gutter">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 prev-page img-responsive">
            <?php if (!empty($prevID)) { ?>
                <a href="<?php echo get_permalink($prevID); ?>"title="<?php echo get_the_title($prevID); ?>"><img class="img-responsive" src="/wp-content/uploads/previous-white.png"></a>
            <?php } ?> 
        </div> 
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <h3 class="text-center"><?php the_title(); ?></h3>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 next-page img-responsive">
            <?php if (!empty($nextID)) { ?>
                <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><img class="img-responsive" src="/wp-content/uploads/next-white.png"></a>
            <?php } ?> 
        </div>
    </div>
            <?php endwhile; 
                  wp_reset_query(); ?>
    <div class="row-flex no-gutter">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 intro-page" style="margin-bottom:20px;">
        <?php the_content(); ?>
        </div>
    </div>
        <?php 
        $catslug = get_category_by_slug($pageslug); 
        $catid = $catslug->term_id; 
        $query= 'cat=' . $catid. ''; 
        query_posts($query); 
        ?> 
        <?php if (have_posts()) : ?> 
            <?php while (have_posts()) : the_post(); ?>
                <div class="row-flex no-gutter">
                    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-6 thumbnail img-responsive'>
                        <?php $services = get_post_meta($post->ID, 'services', true); ?>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $services; ?>">
                        <div class="caption-grid-lg">
                            <h4 class="text-center-caption-grid-lg"><?php echo get_the_title(); ?>  </h4>
                                <a class="glyphicon glyphicon-plus"  href="<?php echo get_permalink(); ?>"></a>
                        </div>
                    </div>
                </div>

        <?php endwhile; //resetting the post loop ?>
        <?php wp_reset_postdata(); //resetting the post query
        endif; ?>
</div>
<?php get_footer(); ?>