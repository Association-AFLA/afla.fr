<?php
/**
 * Title: Section - Mon Vlog
 * Slug: afla/section-vlog
 * Categories: afla
 * Description: Section vlog avec vidéo mise en avant, grille de vignettes et bouton "pour plus de vidéos".
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"backgroundColor":"white"} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"700","fontSize":"2.25rem","letterSpacing":"0.15em"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-weight:700;font-size:2.25rem;letter-spacing:0.15em">MON VLOG</h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"2rem"} -->
    <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- Vidéo mise en avant -->
    <!-- wp:group {"style":{"border":{"width":"4px","color":"#7b2ff7"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
    <div class="wp-block-group" style="border-color:#7b2ff7;border-width:4px;border-style:solid;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
        <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
            <div class="wp-block-embed__wrapper">
                https://www.youtube.com/watch?v=dQw4w9WgXcQ
            </div>
        </figure>
        <!-- /wp:embed -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"2rem"} -->
    <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- Grille de vignettes -->
    <!-- wp:columns {"columns":4} -->
    <div class="wp-block-columns">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"aspectRatio":"16/9"}} -->
            <figure class="wp-block-image size-full"><img src="https://placehold.co/400x225/f0e6ff/7b2ff7?text=Tendances+beauté" alt="Tendances beauté"/></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p style="font-size:0.875rem">Tendances à essayer dès...</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="https://placehold.co/400x225/ffe6f0/ff2f7b?text=Attaque+automne" alt="Attaque automne"/></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p style="font-size:0.875rem">Attaque automne-hiver</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="https://placehold.co/400x225/e6fff0/2fff7b?text=Style+naturel" alt="Style naturel"/></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p style="font-size:0.875rem">Le style naturel</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="https://placehold.co/400x225/fff0e6/ff7b2f?text=Maquillage" alt="Maquillage"/></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p style="font-size:0.875rem">Maquillage parfait pour la fam...</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"2rem"} -->
    <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- Bouton -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"vivid-purple","textColor":"white","style":{"typography":{"fontWeight":"600","letterSpacing":"0.05em"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-vivid-purple-background-color has-text-color has-background wp-element-button" style="font-weight:600;letter-spacing:0.05em;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">Pour plus de vidéos</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
