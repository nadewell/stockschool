<?php 
/*************
 * Slide Content
 */
$slides = get_field('slider');

?>
<section class="hero-slider">
    <?php 
    if($slides):
        foreach ( $slides as $slide ): 
    ?>
    <div class="slide pb-5 pt-5" data-attachment="scroll" data-image="<?php echo $slide['image']['url']; ?>">
        <div class="slide-content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-sm-12 text-center">
                        <h2><?php echo $slide['heading']; ?></h2>
                        <p><?php echo $slide['description']; ?></p>
                        <a class="btn btn-primary" href="<?php echo $slide['button_link']; ?>" target="_blank"><?php echo $slide['button_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        endforeach; 
    endif;
    ?>
</section>

<?php 
/*************
 * Newsletter Optin Content
 */
$ns_heading = get_field('ns_heading');
$ns_description = get_field('ns_description');
$ns_button = get_field('ns_button');
?>
<section class="newsletter-optin">
    <div class="container">
        <div class="row align-items-center">
            <div class="optin-desc col-md-8 col-sm-12"> 
                <h3><?php echo $ns_heading; ?></h3> 
                <p><?php echo $ns_description; ?></p>
            </div>
            <div class="optin-btn col-md-4 col-sm-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#optinModal">
                    <?php echo $ns_button; ?>
                </button>
            </div>
        </div>
    </div>
</section>
<?php 
/*************
 * Services Content
 */
$sr_image = get_field('sr_image');
$sr_heading = get_field('sr_heading');
$services = get_field('services');
?>
<section class="services" data-attachment="fixed" data-image="<?php echo $sr_image['url']; ?>">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?php echo $sr_heading; ?></h2>
            <?php 
            if($services):
                foreach ($services as $service): 
            ?>
            <div class="service col-md-4 col-sm-12">
                <div class="service-wrapper">
                    <div class="service-icon"><?php echo $service['icon']; ?></div>
                    <h3 class="service-title"><?php echo $service['heading']; ?></h5>
                    <p class="service-desc"><?php echo $service['description']; ?></p>
                </div>
            </div>
            <?php 
                endforeach; 
            endif;
            ?>
        </div>
    </div>
</section>
<?php 
/*************
 * Tips & Tricks Content
 */
$tp_title = get_field('tp_title');
$tips = get_field('tips');
$tr_title = get_field('tr_title');
$tricks = get_field('tricks');
?>
<section class="tips-tricks">
    <div class="container-fluid">
        <div class="row">
            <div class="tips col-md-6 col-sm-12">
                <h4 class="col-title"><?php echo $tp_title; ?></h4>
                <ul class="fancy-list">
                    <?php 
                    if($tips):
                        foreach( $tips as $tip ): 
                    ?>
                    <li><?php echo $tip['point']; ?></li>
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </ul>
            </div>
            <div class="tricks col-md-6 col-sm-12">
                <h4 class="col-title"><?php echo $tr_title; ?></h4>
                <ul class="fancy-list">
                    <?php 
                    if($tricks):
                        foreach( $tricks as $trick ): 
                    ?>
                    <li><?php echo $trick['point']; ?></li>
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
/*************
 * Advantages Content
 */
$av_heading = get_field('av_heading');
$av_description = get_field('av_description');
$av_list1 = get_field('av_list1');
$av_list2 = get_field('av_list2');
?>
<section class="advantages">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?php echo $av_heading; ?></h2>
            <div class="advantages-desc"><?php echo $av_description; ?></div>
            <ul class="fancy-list col-md-6 col-sm-12">
                <?php 
                if($av_list1):
                    foreach( $av_list1 as $point ): 
                ?>
                <li><?php echo $point['point']; ?></li>
                <?php 
                    endforeach; 
                endif;
                ?>
            </ul>
            <ul class="fancy-list col-md-6 col-sm-12">
                <?php 
                if($av_list2):
                    foreach( $av_list2 as $point ): 
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
/*************
 * Testimonials Content
 */
$ts_image = get_field('ts_image');
$ts_heading = get_field('ts_heading');
/*
?>
<section class="testimonials" data-attachment="scroll" data-image="<?php echo $ts_image['url']; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="section-title"><?php echo $ts_heading; ?></h2>
            <div class="testimonials-wrapper col-md-6 col-sm-12">
            <?php 
            global $posts;
            $args = array(
                'post_type'         =>  'testimonial',
                'orderby'           =>  'date',
                'order'             =>  'DESC',
                'posts_per_page'    =>  4
            );
            $posts  = new WP_Query($args);
            if( $posts->have_posts() ):
                while( $posts->have_posts() ): $posts->the_post();
            ?>
                <div class="testimonial">
                    <i class="quote-left fa fa-quote-left" aria-hidden="true"></i>
                    <p class="testimonial-desc"><?php echo get_the_excerpt( get_the_ID() ); ?></p>
                    <i class="quote-right fa fa-quote-right" aria-hidden="true"></i>
                    <h4 class="client"><?php the_title(); ?></h4>
                </div>
            <?php 
            endwhile;
            endif;
            wp_reset_query();
            wp_reset_postdata();
            ?>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <a href="<?php echo site_url().'/testimonial' ?>" class="btn btn-primary">All Testimonials</a>
        </div>
    </div>
</section>
*/?>
<?php 
/*************
* Our Performance
*/
$tradings = get_field('trading');
?>
<section class="performance">
	<div class="container">
		<div class="row  justify-content-center">
			<?php foreach( $tradings as $trading ): ?>
			<h2 class="section-title"><?php echo $trading['title']; ?></h2>
			<table class="table table-bordered table-hover table-responsive">
				<thead class="thead-light">
					<tr>
						<td>Sr. No.</td>
						<td>Stock</td>
						<td>Qty.</td>
						<td>Buy/Sell</td>
						<td>Entry Rate</td>
						<td>Entry Time</td>
						<td>Exit Rate</td>
						<td>Exit Time</td>
						<td>Profit/Loss</td>
						<td>Comments</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$color = "";
						foreach($trading['stock'] as $trade): 
						$profit_loss = intval( $trade['exit_rate']*$trade['qty'] - $trade['entry_rate']*$trade['qty'] );
						if( $profit_loss < 0 ){ $color = "text-danger"; }
						elseif( $profit_loss > 0 || $profit_loss == 0 ){ $color = "text-success"; }
					?>
					<tr class="<?php echo $color; ?>">
						<td><?php echo $i; ?></td>
						<td><?php echo $trade['name']; ?></td>
						<td><?php echo $trade['qty']; ?></td>
						<td><?php echo $trade['buysell']; ?></td>
						<td><?php echo $trade['entry_rate']; ?></td>
						<td><?php echo $trade['entry_time']; ?></td>
						<td><?php echo $trade['exit_rate']; ?></td>
						<td><?php echo $trade['exit_time']; ?></td>
						<td><?php echo $profit_loss; ?></td>
						<td><?php echo $trade['comment']; ?></td>
					</tr>
					<?php 
						$i++;
						endforeach; 
					?>
				</tbody>
			</table>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php 
/*************
 * Latest Content
 */
$bl_heading = get_field('bl_heading');
?>
<section class="latest-blog">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?php echo $bl_heading; ?></h2>
            <?php 
            global $posts;
            $args = array(
                'post_type'         =>  'post',
                'orderby'           =>  'date',
                'order'             =>  'DESC',
                'posts_per_page'    =>  3
            );
            $posts  = new WP_Query($args);
            if( $posts->have_posts() ):
                while( $posts->have_posts() ): $posts->the_post();
            ?>
            <div <?php post_class('col-md-4 col-sm-12'); ?>>
                <div class="post-thumbnail">
                <?php 
                    if( has_post_thumbnail() ){
                        the_post_thumbnail('small');
                    }
                ?>
                </div>
                <div class="post-content">
                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                    <div class="post-meta">
                        <span class="post-date"><?php the_date( 'd M,Y' ); ?></span>
                        <span class="post-category"><?php the_category(','); ?></span>
                    </div>
                    <p class="post-desc"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <?php 
                endwhile;
            endif;
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>