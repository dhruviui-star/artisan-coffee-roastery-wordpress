<?php
/**
 * Front Page Template
 *
 * @package ArtisanCoffee
 */

get_header();
?>

<main id="main-content">

    <section class="hero">

        <div class="container hero__content">

            <p class="hero__eyebrow">
                ARTISAN COFFEE ROASTERY
            </p>

            <h1 class="hero__title">
                Coffee roasted<br>
                with purpose.
            </h1>

            <p class="hero__description">
                Discover carefully sourced specialty coffee,
                roasted in small batches for a richer,
                more memorable cup.
            </p>

            <div class="hero__actions">

                <a
                    href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
                    class="button button--primary"
                >
                    Shop Coffee
                </a>

                <a
                    href="#our-story"
                    class="button button--secondary"
                >
                    Our Story
                </a>

            </div>

        </div>

    </section>

</main>

<?php
get_footer();