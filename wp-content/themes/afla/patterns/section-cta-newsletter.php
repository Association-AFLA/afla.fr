<?php
/**
 * Title: Section - CTA Newsletter
 * Slug: afla/section-cta-newsletter
 * Categories: afla
 * Description: Section pied de page avec fond violet, icônes réseaux sociaux, informations de contact et formulaire de newsletter.
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#6c2bd9"},"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"3rem","right":"3rem"}}}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#6c2bd9;padding-top:4rem;padding-right:3rem;padding-bottom:4rem;padding-left:3rem">

    <!-- Titre -->
    <!-- wp:heading {"textAlign":"center","textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"2rem","letterSpacing":"0.2em"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-weight:700;font-size:2rem;letter-spacing:0.2em;margin-bottom:1.5rem">NE MANQUEZ JAMAIS RIEN</h2>
    <!-- /wp:heading -->

    <!-- Icônes réseaux sociaux -->
    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-bottom:3rem">
        <!-- wp:social-link {"url":"#","service":"mail"} /-->
        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- Deux colonnes : contact + formulaire -->
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"4rem"}}}} -->
    <div class="wp-block-columns">

        <!-- Colonne contact -->
        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:heading {"level":4,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"0.875rem","letterSpacing":"0.15em"}}} -->
            <h4 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:0.875rem;letter-spacing:0.15em">J'AIMERAIS AVOIR DE VOS NOUVELLES</h4>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":5,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.25rem"}}}} -->
            <h5 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:0.75rem;letter-spacing:0.1em;margin-top:1.5rem;margin-bottom:0.25rem">RP &amp; GESTION</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p class="has-white-color has-text-color" style="font-size:0.875rem">alice@monsite.fr</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":5,"textColor":"white","style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.25rem"}}}} -->
            <h5 class="wp-block-heading has-white-color has-text-color" style="font-weight:700;font-size:0.75rem;letter-spacing:0.1em;margin-top:1.5rem;margin-bottom:0.25rem">POUR LES DEMANDES D'AFFAIRES</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.875rem"}}} -->
            <p class="has-white-color has-text-color" style="font-size:0.875rem">business@monsite.fr</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"1.5rem"} -->
            <div style="height:1.5rem" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:list {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"white","className":"is-style-none"} -->
            <ul class="wp-block-list has-white-color has-text-color is-style-none" style="font-size:0.75rem">
                <li>Termes et conditions</li>
                <li>Politique de cookies</li>
                <li>Politique de confidentialité</li>
                <li>Politique de remboursement</li>
            </ul>
            <!-- /wp:list -->

        </div>
        <!-- /wp:column -->

        <!-- Colonne formulaire -->
        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"style":{"border":{"radius":"4px"},"color":{"background":"rgba(255,255,255,0.1)"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}}} -->
            <div class="wp-block-group has-background" style="border-radius:4px;background-color:rgba(255,255,255,0.1);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.8rem"}}} -->
                        <p class="has-white-color has-text-color" style="font-size:0.8rem">Prénom *</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.8rem"}}} -->
                        <p class="has-white-color has-text-color" style="font-size:0.8rem">Nom de famille *</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.8rem"}}} -->
                <p class="has-white-color has-text-color" style="font-size:0.8rem">E-mail *</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontSize":"0.8rem"}}} -->
                <p class="has-white-color has-text-color" style="font-size:0.8rem">Rédigez votre message ici...</p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"1rem"} -->
                <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#6c2bd9"},"typography":{"fontWeight":"700","fontSize":"0.875rem"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.5rem","right":"1.5rem"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#ffffff;color:#6c2bd9;font-weight:700;font-size:0.875rem;padding-top:0.6rem;padding-right:1.5rem;padding-bottom:0.6rem;padding-left:1.5rem">Envoyer</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
