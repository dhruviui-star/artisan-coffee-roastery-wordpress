<?php get_header(); ?>

<main class="single-post">

    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="single-post__article">

                    <header class="single-post__header">

                        <p class="section-eyebrow">
                            <?php
                            $categories = get_the_category();

                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name );
                            }
                            ?>
                        </p>

                        <h1>
                            <?php the_title(); ?>
                        </h1>

                        <div class="single-post__meta">

                            <span>
                                <?php echo esc_html( get_the_date() ); ?>
                            </span>

                            <span>·</span>

                            <span>
                                <?php echo esc_html( get_the_author() ); ?>
                            </span>

                        </div>

                    </header>


                    <?php if ( has_post_thumbnail() ) : ?>

                        <div class="single-post__image">

                            <?php the_post_thumbnail( 'large' ); ?>

                        </div>

                    <?php endif; ?>


                    <div class="single-post__content">

                        <?php the_content(); ?>

                        <div class="single-post__back">

                            <a href="<?php echo esc_url( home_url( '/#journal' ) ); ?>">
                                ← Back to Coffee Journal
                            </a>

                        </div>

                    </div>
                </article>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>