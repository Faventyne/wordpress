
<?php get_header(); ?>

    <section id="section-icons" class="wrapper">
        <div class="container">

            <div class="col">

                <h1>Page.php</h1>
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- template tags : we can use native Wordpress functions to display articles/pages -->

                <a href="<?php the_permalink() ?>">
                    <h2 class="entry-title">
                        <?php the_title() ?>
                    </h2>
                </a>

                <p class="post-info">
                    Posté le <?php the_date(); ?> dans <?php the_category(','); ?> par <?php the_author(); ?>
                </p>

                    <div class="entry-content">
                        <?php if (!is_singular()) : ?>
                            <?php the_excerpt(); ?>
                        <?php else : ?>
                            <?php the_content(); ?>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
                <?php else : ?>
                    <p>Aucun contenu a afficher</p>
                <?php endif; ?>
            </div>

        </div>
    </section>



<?php get_footer(); ?>
