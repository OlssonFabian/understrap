<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
$usps = new WP_query([
 'post_type' => 'us_portfolio',
 'posts_per_page' => 3,
]);

if ($usps->have_posts()){
?>
	<div class="wrapper" id="wrapper-usps">
		<div class="col-md">
			<div class="d-flex justify-content-around">
		<?php
	while ($usps->have_posts()) {
		$usps->the_post();
		get_template_part('loop-templates/content' , 'portfolio-items');
	}
?>
			</div>
		</div>
	</div>
<?php
}
