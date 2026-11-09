<?php
/**
 * Title: Services Gallery
 * Slug: wedding-photography-nook/services-gallery
 * Categories: featured, gallery
 * Inserter: yes
 */
?>

<!-- wp:group {"metadata":{"name":"Services Gallery"},"align":"full","className":"is-style-default wpn-hover-italic","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-default wpn-hover-italic"><!-- wp:spacer {"height":"calc( 0.25 * var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-right, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal)))"} -->
<div style="height:calc( 0.25 * var(--wp--style--root--padding-right, var(--wp--custom--gap--horizontal)))" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<?php
$wedding_photography_nook_services = array(
	array( 'portfolio-bridal-portrait.jpg', __( 'Portfolio', 'wedding-photography-nook' ) ),
	array( 'services-veiled-couple.jpg', __( 'Services', 'wedding-photography-nook' ) ),
	array( 'photographer-portrait.jpg', __( 'About', 'wedding-photography-nook' ) ),
);
foreach ( $wedding_photography_nook_services as $wedding_photography_nook_service ) :
?>
<!-- wp:column {"verticalAlignment":"center","width":"33%","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33%"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-with-border"} -->
<figure class="wp-block-image size-full is-style-with-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $wedding_photography_nook_service[0] ); ?>" alt="" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"wpn-hover-italics","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center wpn-hover-italics"><a href="#"><?php echo esc_html( $wedding_photography_nook_service[1] ); ?></a></h3>
<!-- /wp:heading --><!-- wp:paragraph --><p aria-hidden="true">→</p><!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"calc( 0.5 * var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-right, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal)))"} -->
<div style="height:calc( 0.5 * var(--wp--style--root--padding-right, var(--wp--custom--gap--horizontal)))" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
