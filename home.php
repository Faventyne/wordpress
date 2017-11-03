


	<?php get_header(); ?>

		<section id="section-icons" class="wrapper">
			<div class="container">

				<div class="col">
                    <h1> Home.php </h1>
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<!-- template tags : we can use native Wordpress functions to display articles/pages -->
                        <!--  Display  post image (min size)-->
                    <div class="container">
						<div class="left-image">
							<?php if (has_post_thumbnail()): ?>
							    <?php the_post_thumbnail('little-thumbnail'); ?>
							<?php endif; ?>
						</div>



						<div class="col">
							<a href="<?php the_permalink(); ?>">
								<h2 class="entry-title">
									<?php the_title() ?>
								</h2>
							</a>

							<p class="post-info">
								Posté le <?php the_date(); ?> dans <?php the_category(','); ?> par <?php the_author(); ?>
							</p>

							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>

					<?php endwhile; ?>

					<!-- Navigation entre les pages de résultats -->
					<div class="navigation"><p><?php posts_nav_link(); ?></p></div>

					<?php else : ?>
						<p>Aucun contenu a afficher</p>
					<?php endif; ?>


				</div>
                <div class="col" id="sidebar-primary" style="max-width: 300px">
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>

			</div>
		</section>



	<?php get_footer(); ?>
