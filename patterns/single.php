<?php
/**
 * Title: Single Post
 * Slug: delivered/single-post
 * Categories: delivered, single-post
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"bottom":{"color":"var:preset|color|secondary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:10px;padding-bottom:10px"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous"} /-->

<!-- wp:post-navigation-link /--></div>
<!-- /wp:group -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:search {"label":"","buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"level":3,"className":"footer-widget-title","fontSize":"medium"} -->
<h3 class="footer-widget-title has-medium-font-size"><?php esc_html_e('Popular Posts','delivered'); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":10,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":60,"featuredImageSizeHeight":60,"addLinkToFeaturedImage":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"level":3,"className":"footer-widget-title","fontSize":"medium"} -->
<h3 class="footer-widget-title has-medium-font-size"><?php esc_html_e('Categories','delivered'); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"fontSize":"normal"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"level":3,"className":"footer-widget-title","fontSize":"medium"} -->
<h3 class="footer-widget-title has-medium-font-size"><?php esc_html_e('Tags','delivered'); ?></h3>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->