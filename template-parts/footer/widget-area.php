<?php

if( is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4') ):

?>
<footer class="site-footer" itemtype="https://schema.org/WPFooter" itemscope>
    <div class="container">
        <div class="row">
            <div class="widget-area col-md-3 col-sm-12">
            <?php 
                if( is_active_sidebar('footer-1') ){
                    dynamic_sidebar('footer-1');
                }
            ?>
            </div>
            <div class="widget-area col-md-3 col-sm-12">
            <?php 
                if( is_active_sidebar('footer-2') ){
                    dynamic_sidebar('footer-2');
                }
            ?>
            </div>
            <div class="widget-area col-md-3 col-sm-12">
            <?php 
                if( is_active_sidebar('footer-3') ){
                    dynamic_sidebar('footer-3');
                }
            ?>
            </div>
            <div class="widget-area col-md-3 col-sm-12">
            <?php 
                if( is_active_sidebar('footer-4') ){
                    dynamic_sidebar('footer-4');
                }
            ?>
            </div>
        </div>
    </div>
</footer>
<?php 

endif;

get_template_part( 'template-parts/footer/copyright' ); ?>