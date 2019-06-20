<?php
/*************
 * Services Content
 */
$sv_heading = get_field('sv_heading');
$sv_description = get_field('sv_description');
$sv_list1 = get_field('sv_list1');
$sv_list2 = get_field('sv_list2');
?>
<section class="services">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?php echo $sv_heading; ?></h2>
            <div class="service-desc"><?php echo $sv_description; ?></div>
            <ul class="fancy-list col-md-6 col-sm-12">
                <?php 
                if($sv_list1):
                    foreach( $sv_list1 as $point ): 
                ?>
                <li><?php echo $point['point']; ?></li>
                <?php 
                    endforeach;
                endif; 
                ?>
            </ul>
            <ul class="fancy-list col-md-6 col-sm-12">
                <?php 
                if($sv_list2):
                    foreach( $sv_list2 as $point ): 
                ?>
                <li><?php echo $point['point']; ?></li>
                <?php 
                    endforeach;
                endif; 
                ?>
            </ul>
        </div>
    </div>
</section>
<?php 
$pr_heading = get_field('pr_heading');
$pr_description = get_field('pr_description');
$plans = get_field('plan');
?>
<section class="pricing">
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="section-title"><?php echo $pr_heading; ?></h2>
                <div class="pricing-desc"><?php echo $pr_description; ?></div>
                <?php 
                if($plans):
                    foreach( $plans as $plan ): 
                ?>
                <div class="col-md-4 col-sm-12">
                    <div class="plan">
                        <h3 class="title"><?php echo __( $plan['title'] ); ?></h3>
                        <div class="duration"><?php echo $plan['duration'];  echo __( ' Days', 'stockschool' ); ?></div>
                        <ul class="fancy-list">
                            <?php 
                            if($plan['points']):
                                foreach( $plan['points'] as $point ): 
                            ?>
                            <li><?php echo $point['point']; ?></li>
                            <?php 
                                endforeach;
                            endif; 
                            ?>
                        </ul>
                        <div class="price"><?php echo $plan['price']; echo __( ' INR', 'stockschool' ); ?></div>
                        <div class="text-center"><button class="btn btn-primary buy-now" id="<?php echo $plan['button_id']; ?>"><?php echo $plan['button_text']; ?></button></div>
                    </div>
                </div>
                <?php 
                    endforeach;
                endif; 
                ?>
            </div>
        </div>
    </div>
</section>