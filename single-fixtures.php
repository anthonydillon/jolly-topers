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

  <?php
    $i = 0;
    if (have_posts()) : while (have_posts()) : the_post();
    $homeTeam = get_post_meta($post->ID, 'home_team', $single = true);
  	$awayTeam = get_post_meta($post->ID, 'away_team', $single = true);
    $homeScore = get_post_meta($post->ID, 'home_score', $single = true);
    $awayScore = get_post_meta($post->ID, 'away_score', $single = true);
  	$gameDate = get_post_meta($post->ID, 'date', $single = true);
  	$gameTime = get_post_meta($post->ID, 'time', $single = true);
  	$location = get_post_meta($post->ID, 'location', $single = true); ?>
    ?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Fixture</h1>
			</div>
		</div>
	</div>
  <div class="row next-match">
		<div class="inner-wrapper align-center">
			<ul class="inline-list">
				<li><img src="<?php bloginfo('template_directory'); ?><?php echo getTeamBadge($homeTeam); ?>" alt="" /></li>
				<li><?php echo $homeTeam ?></li>
        <li><?php echo $homeScore ?></li>
				<li class="next-match__vs">VS</li>
        <li><?php echo $awayScore ?></li>
				<li><?php echo $awayTeam ?></li>
				<li><img src="<?php bloginfo('template_directory'); ?><?php echo getTeamBadge($awayTeam); ?>" alt="" /></li>
			</ul>
		</div>
	</div>
	<div class="row next-match-details">
		<div class="inner-wrapper align-center">
			<ul class="inline-list">
				<li class="when"><?php echo date("d M Y", strtotime($gameDate)) . ' - ' . $gameTime; ?></li>
				<li class="where"><?php echo $location['address']; ?></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="inner-wrapper">

		<div class="prepend-two eight-col append-two">
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
	</div>
</div>

<?php else : ?>
	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>No players available</h1>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
