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

    <section class="featured-coffee">

    <div class="container">

        <p class="section-eyebrow">FEATURED COFFEES</p>

        <h2>Small-batch favorites</h2>

        <div class="coffee-grid">

            <?php
            $featured = new WP_Query(
                array(
                    'post_type'      => 'product',
                    'posts_per_page' => 3,
                )
            );

            if ( $featured->have_posts() ) :

                while ( $featured->have_posts() ) :
                    $featured->the_post();

                    global $product;
                    ?>

                    <article class="coffee-card">

                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <h3><?php the_title(); ?></h3>

                            <p class="price">
                                <?php echo $product->get_price_html(); ?>
                            </p>

                        </a>

                    </article>

                <?php endwhile;

                wp_reset_postdata();

            endif;
            ?>

        </div>

    </div>

</section>

<section class="roast-explorer" id="roast-explorer">

    <div class="container">

        <div class="roast-explorer__intro">

            <p class="section-eyebrow">FIND YOUR ROAST</p>

            <h2>Choose your perfect roast.</h2>

            <p>
                From bright and delicate to bold and smoky,
                discover the roast profile that matches your taste.
            </p>

        </div>

        <div class="roast-selector">

            <div class="roast-selector__labels">
                <span>LIGHT</span>
                <span>MEDIUM</span>
                <span>DARK</span>
            </div>

            <input
                type="range"
                id="roast-slider"
                min="0"
                max="2"
                value="1"
                step="1"
                aria-label="Choose roast level"
            >

            <div class="roast-selector__content">

                <div
                    class="roast-profile active"
                    data-roast="0"
                >
                    <span class="roast-profile__number">01</span>

                    <h3>Light Roast</h3>

                    <p>
                        Bright, floral and naturally sweet
                        with delicate citrus notes.
                    </p>

                    <div class="roast-notes">
                        <span>Floral</span>
                        <span>Citrus</span>
                        <span>Bright</span>
                    </div>
                </div>

                <div
                    class="roast-profile"
                    data-roast="1"
                >
                    <span class="roast-profile__number">02</span>

                    <h3>Medium Roast</h3>

                    <p>
                        Balanced sweetness with smooth
                        caramel and chocolate notes.
                    </p>

                    <div class="roast-notes">
                        <span>Caramel</span>
                        <span>Chocolate</span>
                        <span>Balanced</span>
                    </div>
                </div>

                <div
                    class="roast-profile"
                    data-roast="2"
                >
                    <span class="roast-profile__number">03</span>

                    <h3>Dark Roast</h3>

                    <p>
                        Rich, bold and full-bodied with
                        deep cocoa and smoky notes.
                    </p>

                    <div class="roast-notes">
                        <span>Cocoa</span>
                        <span>Smoky</span>
                        <span>Bold</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

</main>


<?php
get_footer();