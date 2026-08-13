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

<section class="brewing-simulator" id="brewing-simulator">

    <div class="container">

        <div class="brewing-simulator__intro">

            <p class="section-eyebrow">BREW YOUR PERFECT CUP</p>

            <h2>Build your brew.</h2>

            <p>
                Choose your coffee, brewing method and strength.
                We'll create a simple recipe for you.
            </p>

        </div>

        <div class="brewing-simulator__layout">

            <!-- Controls -->

            <div class="brewing-controls">

                <div class="brew-control">

                    <label for="coffee-choice">
                        Coffee
                    </label>

                    <select id="coffee-choice">

                        <option value="ethiopian">
                            Ethiopian Sunrise
                        </option>

                        <option value="colombian">
                            Colombian Reserve
                        </option>

                        <option value="brazilian">
                            Brazilian Dark Roast
                        </option>

                    </select>

                </div>


                <div class="brew-control">

                    <label>
                        Brew Method
                    </label>

                    <div class="brew-methods">

                        <button
                            type="button"
                            class="brew-method active"
                            data-method="pour-over"
                        >
                            Pour Over
                        </button>

                        <button
                            type="button"
                            class="brew-method"
                            data-method="french-press"
                        >
                            French Press
                        </button>

                        <button
                            type="button"
                            class="brew-method"
                            data-method="espresso"
                        >
                            Espresso
                        </button>

                    </div>

                </div>


                <div class="brew-control">

                    <label for="strength">
                        Strength
                    </label>

                    <input
                        type="range"
                        id="strength"
                        min="1"
                        max="3"
                        value="2"
                        step="1"
                    >

                    <div class="strength-labels">
                        <span>Light</span>
                        <span>Balanced</span>
                        <span>Strong</span>
                    </div>

                </div>

            </div>


            <!-- Recipe -->

            <div class="brew-recipe">

                <p class="brew-recipe__eyebrow">
                    YOUR BREW RECIPE
                </p>

                <h3 id="recipe-coffee">
                    Ethiopian Sunrise
                </h3>

                <div class="recipe-details">

                    <div class="recipe-detail">

                        <span>Method</span>

                        <strong id="recipe-method">
                            Pour Over
                        </strong>

                    </div>

                    <div class="recipe-detail">

                        <span>Coffee</span>

                        <strong id="recipe-coffee-grams">
                            20 g
                        </strong>

                    </div>

                    <div class="recipe-detail">

                        <span>Water</span>

                        <strong id="recipe-water">
                            300 ml
                        </strong>

                    </div>

                    <div class="recipe-detail">

                        <span>Temperature</span>

                        <strong id="recipe-temperature">
                            94°C
                        </strong>

                    </div>

                    <div class="recipe-detail">

                        <span>Time</span>

                        <strong id="recipe-time">
                            3:00
                        </strong>

                    </div>

                </div>

                <button
                    type="button"
                    class="button button--primary brew-start"
                    id="start-brew"
                >
                    Start Brewing
                </button>

                <div
                    class="brew-message"
                    id="brew-message"
                    aria-live="polite"
                ></div>

            </div>

        </div>

    </div>

</section>

<section class="our-story" id="our-story">

    <div class="container">

        <div class="our-story__grid">

            <div class="our-story__image">

                <div class="story-image-placeholder">
                    <span>ARTISAN COFFEE</span>
                </div>

            </div>


            <div class="our-story__content">

                <p class="section-eyebrow">
                    OUR STORY
                </p>

                <h2>
                    From farm to cup,
                    with intention.
                </h2>

                <p>
                    We believe great coffee begins with great
                    relationships. We work closely with farmers,
                    carefully select every bean, and roast in
                    small batches to bring out the character
                    of every origin.
                </p>

                <p>
                    What started as a small passion for better
                    coffee has grown into a community built
                    around curiosity, craftsmanship and the
                    simple pleasure of a great cup.
                </p>

                <a
                    href="<?php echo esc_url( home_url( '/our-story/' ) ); ?>"
                    class="button button--dark"
                >
                    Discover Our Story
                </a>

            </div>

        </div>


        <div class="story-timeline">

            <div class="story-milestone">

                <span>2018</span>

                <h3>The Beginning</h3>

                <p>
                    A small roasting experiment
                    becomes a passion.
                </p>

            </div>


            <div class="story-milestone">

                <span>2021</span>

                <h3>First Roastery</h3>

                <p>
                    We open our first dedicated
                    roasting space.
                </p>

            </div>


            <div class="story-milestone">

                <span>2024</span>

                <h3>A Growing Community</h3>

                <p>
                    Coffee lovers from around the
                    world join our journey.
                </p>

            </div>

        </div>

    </div>

</section>

</main>


<?php
get_footer();