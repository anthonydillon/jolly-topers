<?php

/**
 * Page Template
 *
 *
 * @file           page.php
 * @package        Jolly Topers FC
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Page */

get_header(); ?>


	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Fixtures</h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="inner-wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post();

			$homeTeam = get_post_meta(get_the_ID(), 'home_team', $single = true);
			$awayTeam = get_post_meta(get_the_ID(), 'home_team', $single = true);
			$gameDate = get_post_meta(get_the_ID(), 'date', $single = true);
			$gameTime = get_post_meta(get_the_ID(), 'time', $single = true);
			$location = get_post_meta(get_the_ID(), 'location', $single = true); ?>
			<div class="row next-match">
				<div class="inner-wrapper align-center">
					<ul class="inline-list">
						<li><img src="<?php bloginfo('template_directory'); ?><?php echo getTeamBadge($homeTeam); ?>" alt="" /></li>
						<li><?php echo get_post_meta(get_the_ID(), 'home_team', $single = true); ?></li>
						<li><?php echo get_post_meta(get_the_ID(), 'home_score', $single = true); ?> VS <?php echo get_post_meta(get_the_ID(), 'away_score', $single = true); ?></li>
						<li><?php echo get_post_meta(get_the_ID(), 'away_team', $single = true); ?></li>
						<li><img src="<?php bloginfo('template_directory'); ?><?php echo getTeamBadge($awayTeam); ?>" alt="" /></li>
					</ul>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php else : ?>
	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>No fixtures available</h1>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
