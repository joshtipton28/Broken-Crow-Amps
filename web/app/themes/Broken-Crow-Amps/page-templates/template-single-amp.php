<?php
/*
Template Name: Single Amps Page
*/
get_header(); ?>

		<div class="amps-single row" data-equalizer data-equalize-on="large">
			<div class="large-10 large-centered columns">

				<?php $image = get_field('featured_image');

				if( !empty($image) ): ?>

				<div class="amp-image">

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<div class="amp-tag">
						<h1><?php the_title(); ?></h1>
					</div>

				</div>

				<?php endif; ?>

				<div class="amp-details-left small-12 large-6 columns">
					<div class="amp-overview" data-equalizer-watch>
						<?php if ( have_posts() ): ?>
							<?php while( have_posts() ): the_post(); ?>

								<?php the_content(); ?>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="amp-details-right small-12 large-6 columns">
					<div class="specs" data-equalizer-watch>
						<h2>Specifications</h2>
						<ul>
							<?php if( have_rows('specifications') ):

								    while ( have_rows('specifications') ) : the_row(); ?>

								        <li>
								        	<strong><?php the_sub_field('spec_type'); ?>: </strong>
								        	<?php the_sub_field('specification'); ?>
								        </li>

								    <?php endwhile;

								else :

							endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>


<?php get_footer();
