<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wastewatertreatmentsolutions
 */

?>

<!-- Footer -->
<footer class="bg-dark text-white mt-5">
	<div class="container py-4 pt-5">
		<div class="row">
			<div class="col-md-3">
				<h5 class="mb-3">Services</h5>
				<?php
				$menu_name = 'Services'; // Replace with your menu's slug or name
				$first_half_items = get_first_half_menu_items($menu_name);

				if (!empty($first_half_items)) {
					echo '<ul class="navbar-nav footer-nav ms-auto gap-3 pe-4"">';
					foreach ($first_half_items as $item) {
						echo '<li class="nav-item"><a class="text-white" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
					}
					echo '</ul>';
				} else {
					echo 'No menu items found.';
				}

				?>
			</div>
			<div class="col-md-3 mb-4 mb-lg-0">
				<h5>&nbsp</h5>

				<?php
				$menu_name = 'Services'; // Replace with your menu's slug or name
				$first_half_items = get_first_half_menu_items($menu_name, true);

				if (!empty($first_half_items)) {
					echo '<ul class="navbar-nav footer-nav ms-auto gap-3 pe-4">';
					foreach ($first_half_items as $item) {
						echo '<li class="nav-item"><a class="text-white" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
					}
					echo '</ul>';
				} else {
					echo 'No menu items found.';
				}

				?>
			</div>
			<div class="col-md-3 mb-4 mb-lg-0">
				<h5 class="mb-3">Quick Links</h5>
				<?php
				$menu_name = 'ABOUT US'; // Replace with your menu's slug or name
				$first_half_items = get_first_half_menu_items($menu_name, false, true);

				if (!empty($first_half_items)) {
					echo '<ul class="navbar-nav footer-nav ms-auto gap-3 pe-4">';
					foreach ($first_half_items as $item) {
						echo '<li class="nav-item"><a class="text-white" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
					}
					echo '</ul>';
				} else {
					echo 'No menu items found.';
				}

				?>
			</div>
			<div class="col-md-3">
				<h5 class="mb-3">Contact Us</h5>
				<?php
				$menu_name = 'Contact Us'; // Replace with your menu's slug or name
				$first_half_items = get_first_half_menu_items($menu_name, false, true);

				if (!empty($first_half_items)) {
					echo '<ul class="navbar-nav footer-nav ms-auto gap-3 pe-4">';
					foreach ($first_half_items as $item) {
						echo '<li class="nav-item"><a class="text-white" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
					}
					echo '</ul>';
				} else {
					echo 'No menu items found.';
				}

				?>
			</div>
		</div>
		<hr style="opacity:1;" class="my-3" />
		<div class="d-flex justify-content-between">
			<div>&copy; Saggers Group. All Rights Reserved.</div>
			<div class="d-flex gap-2">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb.svg" />
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ig.svg" />
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/x.svg" />
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linked.svg" />
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>