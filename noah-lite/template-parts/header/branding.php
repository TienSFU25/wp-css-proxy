<?php
/**
 * The template for the branding of the header area (logo, site title, etc).
 *
 * @see        https://pixelgrade.com
 * @author     Pixelgrade
 * @package    Noah
 * @version    1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="c-branding">

	<?php if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	} ?>
</div><!-- .c-branding -->
