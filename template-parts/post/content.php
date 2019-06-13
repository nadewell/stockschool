<article <?php post_class(); ?>>
    <?php if (has_post_thumbnail() ): ?>
    <div class="post-thumbnail">
    <?php the_post_thumbnail('full', array('class'=>'featured-image') ); ?>
    </div>
    <?php endif; ?>
    <div class="post-content">
        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
        <div class="post-meta">
            <span class="post-date"><?php the_date('d M,Y', 'Posted on ', '', true); ?></span>
            <span class="post-category"><?php the_category(','); ?></span>
        </div>
        <div class="post-desc"><?php the_excerpt(); ?></div>
    </div>
</article>