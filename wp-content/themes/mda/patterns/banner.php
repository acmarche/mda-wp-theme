<?php
/**
 * Title: Bannière d'accueil
 * Slug: mda-theme/banner
 * Categories: mda-theme
 * Description: Bannière illustrée pour la page d'accueil
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
	<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignfull size-full">
		<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/banner-home.svg' ) ); ?>" alt="Bienvenue à la Maison des Aînés - Un lieu de rencontre convivial pour les 50+"/>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
