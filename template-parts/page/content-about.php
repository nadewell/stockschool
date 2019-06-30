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
                <div class="accordion" id="about_accordion">
                    <?php 
					$i = 1;
                    if($points):
                        foreach( $points as $point ): ?>
						<div class="card">
							<div class="card-header" id="heading<?php echo $i; ?>">
							  <h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
								  <?php print_r( $point['heading'] ); ?>
								</button>
							  </h2>
							</div>
							<div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#about_accordion">
							  <div class="card-body">
								  <?php print_r( $point['description'] ); ?>
							  </div>
							</div>
						</div>
                    <?php 
						$i++;
                        endforeach; 
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>