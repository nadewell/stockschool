<div class="nav-pagination">
<?php 
    $big = 999999999; // need an unlikely integer
    $args = array(
        'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'        => '?paged=%#%',
        'current'       => max( 1, get_query_var('paged') ),
        'total'         => $wp_query->max_num_pages,
        'prev_text'     => '<i class="fa fa-chevron-left"></i>',
        'next_text'     => '<i class="fa fa-chevron-right"></i>',
    );
    echo paginate_links($args);
?>
</div>