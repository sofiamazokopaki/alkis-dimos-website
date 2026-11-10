<?php
/**
 * Title: Contact – σελίδα
 * Slug: alkis-dimos/contact-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα Contact: μαύρη φάσα με τίτλο, στοιχεία επικοινωνίας αριστερά και φόρμα (Contact Form 7) δεξιά.
 */

// Βρίσκουμε τη φόρμα «Contact – Alkis Dimos» του Contact Form 7.
$form_id = 0;
$forms   = get_posts(
	array(
		'post_type'   => 'wpcf7_contact_form',
		'title'       => 'Contact – Alkis Dimos',
		'numberposts' => 1,
		'fields'      => 'ids',
	)
);
if ( $forms ) {
	$form_id = (int) $forms[0];
}
?>
<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Let's talk</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">A music video, a campaign or just an idea you can't stop thinking about. Tell me about it and I'll get back to you within two working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-contact"} -->
<div class="wp-block-columns alignwide ad-contact"><!-- wp:column {"width":"36%","className":"ad-contact__info"} -->
<div class="wp-block-column ad-contact__info" style="flex-basis:36%"><!-- wp:paragraph {"className":"ad-contact__label"} -->
<p class="ad-contact__label">Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__value"} -->
<p class="ad-contact__value"><a href="mailto:info@alkisdimosvisuals.com">info@alkisdimosvisuals.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__label"} -->
<p class="ad-contact__label">Phone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__value"} -->
<p class="ad-contact__value"><a href="tel:+300000000000">+30 000 000 0000</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__label"} -->
<p class="ad-contact__label">Based in</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__value"} -->
<p class="ad-contact__value">Athens, Greece<br>Available worldwide</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-contact__label"} -->
<p class="ad-contact__label">Follow</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ad-contact__social"} -->
<ul class="wp-block-list ad-contact__social"><!-- wp:list-item -->
<li><a href="https://www.instagram.com/alkis_dimos/">Instagram</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.tiktok.com/@alkisdimosdeepfocus">TikTok</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.youtube.com/channel/UC--ZYfue9T4NHhEAc3m7Auw">YouTube</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"64%","className":"ad-contact__form"} -->
<div class="wp-block-column ad-contact__form" style="flex-basis:64%"><!-- wp:heading -->
<h2 class="wp-block-heading">Send a message</h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[contact-form-7 id="<?php echo esc_attr( $form_id ); ?>" title="Contact – Alkis Dimos" html_class="ad-form"]
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
