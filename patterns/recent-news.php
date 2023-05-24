<?php
/**
 * Title: Recent News
 * Slug: delivered/recent-news
 * Categories: delivered, recent-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"body-text"} -->
<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-text-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('RECENT ARTICLES','delivered'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"fontSize":"big"} -->
<h2 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Check Our Blog Update','delivered'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:3em"><!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:post-title {"textAlign":"center","level":5,"isLink":true} /-->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"Read More"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->