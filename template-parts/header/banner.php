<?php
if( is_page() || is_single() ){
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
}else if( is_home() ){
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option('page_for_posts') ), 'full' );
}
if(get_query_var('pagename')){
    $page_name = get_query_var('pagename');
}else{
    $page_name = get_the_title( get_the_ID() );
}

?>
<div class="hero-banner <?php if( $featured_image == '' ){ echo 'bg-dark'; } ?>" data-parallax="scroll" data-speed="0" data-image-src="<?php echo $featured_image[0]; ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h1 class="page-title"><?php echo $page_name; ?></h1>
        </div>
    </div>
</div>