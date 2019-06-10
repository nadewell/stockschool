<article <?php post_class(); ?>>
    <div class="post-thumbnail">
    <?php 
    if (has_post_thumbnail() ){ 
        the_post_thumbnail('full', array('class'=>'featured-image') ); 
    }
    ?>
    <a href="#" class="post-title"><?php the_title(); ?></a>
    <div class="post-meta">
        <span class="post-date">17 May,2019<?php the_date( 'd M,Y' ); ?></span>
        <span class="post-category"><?php the_category(','); ?></span>
    </div>
    <div class="post-desc"><?php the_excerpt(); ?></div>
    </div>
</article>