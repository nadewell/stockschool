<article <?php post_class(); ?>>
    <?php /*  ?>
    <div class="post-thumbnail">
    <?php 
    if (has_post_thumbnail() ){ 
        the_post_thumbnail('full', array('class'=>'featured-image') ); 
    }
    ?>
    </div>
    <div class="post-title"><?php the_title(); ?></div>
    <?php */ ?>
    <div class="post-content">
        <div class="post-meta">
            <span class="post-date"><?php the_date('d M,Y', 'Posted on ', '', true); ?></span>
            <span class="post-category"><?php the_category(','); ?></span>
        </div>
        <div class="post-desc"><?php the_content(); ?></div>
    </div>
</article>