
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

                <?php endif; ?>
            <p>Belle gosse</p>
            </div>

        </div>

    </section>
    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50090.38009853452!2d-109.85496!3d38.31080499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8747e1ee4518a6a9%3A0x15a452a9c502e6aa!2sParc+national+de+Canyonlands!5e0!3m2!1sfr!2slu!4v1509699098603" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        belle carte
    </section>



<?php get_footer(); ?>
