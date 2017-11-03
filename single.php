


	<?php get_header(); ?>

		<section id="section-icons" class="wrapper">
			<div class="container">

				<div class="col">
                    <h1> single.php </h1>
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<!-- template tags : we can use native Wordpress functions to display articles/pages -->
                        <!--  Display  post image (min size)-->
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('single-thumbnail'); ?>
                        <?php endif; ?>

					<a href="<?php the_permalink(); ?>">
						<h2 class="entry-title">
							<?php the_title() ?>
						</h2>
					</a>

					<p class="post-info">
						Posté le <?php the_date(); ?> dans <?php the_category(','); ?> par <?php the_author(); ?>
					</p>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

						<p><?php echo get_post_meta(get_the_ID(), 'annee',true); ?></p>
						<p><?php the_field('portfolio_annee'); ?></p>

					<?php endwhile; ?>
					<?php else : ?>
						<p>Aucun contenu a afficher</p>
					<?php endif; ?>
				</div>
                <div class="col" style="max-width: 300px">
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>

			</div>
		</section>



	<?php get_footer(); ?>
