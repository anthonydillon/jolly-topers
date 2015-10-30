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
	$cate = 'first-team';
	if(isset($_GET["team"])) {
		$cate = $_GET["team"];
	}
	query_posts( array( 'post_type' => 'fixtures', 'category_name' => $cate, 'orderby' => 'date', 'order' => 'desc'));
?>


	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Fixtures</h1>
			</div>
		</div>
	</div>
</div>
<div class="row row-grey row-players-menu">
	<div class="inner-wrapper">
		<ul class="players-menu">
			<li class="players-menu__item">
				<a href="<?php echo site_url(); ?>/fixtures?team=first-team" <?php if(!$cate || $cate == 'first-team'){ echo 'class="active"';}?>>First team</a>
			</li>
			<li class="players-menu__item">
				<a href="<?php echo site_url(); ?>/fixtures?team=reserve-team" <?php if($cate == 'reserve-team'){ echo 'class="active"';}?>>Reserve team</a>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="inner-wrapper">
		<ul class="no-bullets fixture__list">
			<?php if (have_posts()) : while (have_posts()) : the_post();

				$homeTeam = get_post_meta(get_the_ID(), 'home_team', $single = true);
				$awayTeam = get_post_meta(get_the_ID(), 'away_team', $single = true);
				$homeScore = get_post_meta(get_the_ID(), 'home_score', $single = true);
				$awayScore = get_post_meta(get_the_ID(), 'away_score', $single = true);
				$gameDate = get_post_meta(get_the_ID(), 'date', $single = true);
				$gameTime = get_post_meta(get_the_ID(), 'time', $single = true);
				$location = get_post_meta(get_the_ID(), 'location', $single = true);

				$passed = false;
				if (strtotime( $gameDate ) < strtotime( '-1' )) {
					$passed = true;
				}

			?>

				<li class="fixture__list-item clearfix">
					<div class="two-col fixture__match-date"><?php echo date("d M", strtotime($gameDate)) . ' - ' . $gameTime; ?></div>
					<div class="three-col fixture__home-team">
						<?php echo $homeTeam ?>
						<img class="fixture__team-badge" src="<?php bloginfo('template_directory'); ?>
						<?php echo getTeamBadge($homeTeam); ?>" alt="" width="50" />
					</div>
					<div class="two-col fixture__score">
						<?php echo $homeScore; ?>
						<span class="fixture__score-vs">VS</span>
						<?php echo $awayScore; ?>
					</div>
					<div class="three-col fixture__away-team">
						<img class="fixture__team-badge" src="<?php bloginfo('template_directory'); ?>
						<?php echo getTeamBadge($awayTeam); ?>" alt="" width="50" />
						<?php echo $awayTeam ?>
					</div>
					<div class="two-col last-col fixture__match-report">
						<?php if ($passed) { ?>
								<a href="<?php the_permalink(); ?>" class="right">Match report</a>
						<?php } ?>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
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
