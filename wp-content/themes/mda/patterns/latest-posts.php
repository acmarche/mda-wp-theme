<?php
/**
 * Title: Derniers articles
 * Slug: mda-theme/latest-posts
 * Categories: mda-theme
 * Description: Grille des derniers articles avec image et extrait
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary","style":{"typography":{"fontSize":"2rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:2rem;font-weight:700">Actualités</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"className":"mda-post-card","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group mda-post-card has-base-background-color has-background" style="border-radius:8px;padding-bottom:var(--wp--preset--spacing--40)">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

					<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:post-date {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"gray"} /-->

						<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->

						<!-- wp:post-excerpt {"moreText":"Lire la suite","excerptLength":20,"style":{"typography":{"fontSize":"0.95rem"}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"align":"center","textColor":"gray"} -->
				<p class="has-text-align-center has-gray-color has-text-color">Aucun article pour le moment.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/blog">Voir toutes les actualités</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
