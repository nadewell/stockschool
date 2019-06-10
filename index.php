<?php

get_header();
?>

<div id="page" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 col-sm-12">
            <?php
            if( have_posts() ):
                while( have_posts() ): the_post();
                    get_template_part( 'template-parts/post/content' );
                endwhile;

            else:
                echo '<p>No posts available.</p>';
            endif;
            ?>
            </div>
            <div id="secondary" class="sidebar-area col-md-4 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();