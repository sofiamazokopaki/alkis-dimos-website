<?php
/**
 * Title: Featured Posts
 * Slug: wedding-photography-nook/featured-posts
 * Categories: featured, posts
 * Inserter: yes
 */
?>

<!-- wp:group {"metadata":{"name":"Blog"},"align":"full","className":"alignfull is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-left, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal))","right":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-right, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal))"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--style--root--padding-right, var(--wp--custom--gap--horizontal));padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--style--root--padding-left, var(--wp--custom--gap--horizontal))"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Love Stories', 'wedding-photography-nook');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","style":{"border":{"color":"#ffffff","width":"10px"}}} /-->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"className":"no-underline","style":{"typography":{"textTransform":"none"}},"fontSize":"medium"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
    <!-- wp:pattern {"slug":"wedding-photography-nook/hidden-no-search-results"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->