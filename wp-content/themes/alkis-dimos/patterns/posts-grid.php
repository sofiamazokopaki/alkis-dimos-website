<?php
/**
 * Title: Κουτάκια άρθρων (Deep Focus)
 * Slug: alkis-dimos/posts-grid
 * Categories: alkis-dimos
 * Viewport Width: 1400
 * Description: Πλέγμα με τα άρθρα: φωτογραφία, τίτλος και λεζάντα από το Excerpt.
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ad-posts","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ad-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"className":"ad-card__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ad-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"ad-card__excerpt"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>New stories are coming soon.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
