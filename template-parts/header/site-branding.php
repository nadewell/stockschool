<?php 


$custom_logo = get_theme_mod( 'custom_logo' );
$site_title = get_bloginfo('name');

if( is_front_page() && !is_home() ):
    if($custom_logo != ''):
        echo '<a class="navbar-brand logo" href="'.site_url().'" title="'.$site_title.'"><img src="'.wp_get_attachment_image_src( $custom_logo, 'full' )[0].'" alt="'.$site_title.'"><h1>'.$site_title.'</h1></a>';
    else:
        echo '<a class="navbar-brand" href="'.site_url().'"><h1>'.$site_title.'</h1></a>';
    endif;
else:
    if($custom_logo != ''):
        echo '<a class="navbar-brand" href="'.site_url().'" title="'.$site_title.'"><img src="'.wp_get_attachment_image_src( $custom_logo, 'full' )[0].'" alt="'.$site_title.'"></a>';
    else:
        echo '<a class="navbar-brand" href="'.site_url().'">'.$site_title.'</a>';
    endif;
endif;