<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: app-development-company
 */

return array(
    'title'      =>__( 'Footer Default', 'app-development-company' ),
    'categories' => array( 'app-development-company' ),
    'content'    => '<!-- wp:group {"style":{"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links aligncenter has-visible-labels is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"background":{"backgroundImage":{"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/footer.png","id":14,"source":"file","title":"footer"}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"alignwide"} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"primary","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('APP DEVELOPMENT','app-development-company') .'</strong><br>'. esc_html('COMPANY','app-development-company') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-primary-color has-text-color has-link-color has-inter-font-family has-medium-font-size">'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','app-development-company') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support@example.com','app-development-company') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-primary-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="has-primary-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size"><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','app-development-company') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"footer-box"} -->
<div class="wp-block-column footer-box has-primary-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"primary","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Archives','app-development-company') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:archives {"fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"primary","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Recent Post','app-development-company') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"className":"footer-box","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-column footer-box has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"primary","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-bricolage-grotesque-font-family" style="font-size:22px"><strong>'. esc_html('Tags','app-development-company') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size">'. esc_html('Proudly powered by','app-development-company') .' <a href="https://wordpress.org/">'. esc_html('WordPress','app-development-company') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);