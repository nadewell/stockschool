<?php

get_header();

global $query;
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args  = array(
    'orderby'           => 'date',
    'order'             => 'DESC',
    'posts_per_page'    => 3,
    'paged'             => $paged
);
$query = new WP_Query($args);
?>

<div id="page" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 col-sm-12">
                <main id="main" class="site-main" role="main">
                    <?php
                    if( $query->have_posts() ):
                        while( $query->have_posts() ): $query->the_post();
                            get_template_part( 'template-parts/post/content' );
                        endwhile;
                        get_template_part('template-parts/post/pagination' );
                    else:
                        echo '<p>No posts available.</p>';
                    endif;
                    ?>
                </main>
            </div>
            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<section class="newsletter-optin">
    <div class="container">
        <div class="row align-items-center">
            <div class="optin-desc col-md-8 col-sm-12"> <h3>Stay tuned to our stockmarket blog.</h3> <p>Subscribe to our newsletter.</p></div>
            <div class="optin-btn col-md-4 col-sm-12"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#optinModal">Subscribe</button></div>
        </div>
    </div>
</section>
<?php

get_footer();