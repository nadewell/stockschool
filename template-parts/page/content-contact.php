<?php
/*************
 * About Content
 */
$ct_heading = get_field('ct_heading');
$ct_description = get_field('ct_description');
$points = get_field('ct_points');
$form = get_field('ct_form');
?>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="section-title"><?php echo $ct_heading; ?></h2>
                <div class="contact-desc"><?php echo $ct_description; ?></div>
                <ul class="simple-list">
                    <?php 
                    if($points):
                        foreach( $points as $point ): ?>
                    <li><?php echo $point['icon']; ?><?php echo $point['point']; ?></li>
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <?php echo do_shortcode( $form ); ?>
            </div>
        </div>
    </div>
</section>