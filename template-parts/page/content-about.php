<?php
/*************
 * About Content
 */
$ab_image = get_field('ab_image');
$ab_heading = get_field('ab_heading');
$ab_description = get_field('ab_description');
$points = get_field('ab_points');
?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="<?php echo $ab_image['url']; ?>" alt="<?php echo $ab_image['alt']; ?>">
            </div>
            <div class="col-md-6 col-sm-12">
                <h2 class="section-title"><?php echo $ab_heading; ?></h2>
                <div class="about-desc"><?php echo $ab_description; ?></div>
                <ul class="fancy-list col-md-6 col-sm-12">
                    <?php 
                    if($points):
                        foreach( $points as $point ): ?>
                    <li><?php echo $point['point']; ?></li>
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>