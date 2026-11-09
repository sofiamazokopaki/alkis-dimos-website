<?php
/**
 * Title: Ενότητα: Μαύρο κλείσιμο με κόκκινο κύκλο
 * Slug: alkis-dimos/section-cta
 * Categories: alkis-dimos
 * Viewport Width: 1400
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Let's create something together</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
