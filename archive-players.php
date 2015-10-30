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
	query_posts( array( 'post_type' => 'players', 'category_name' => $cate, 'orderby' => 'date', 'order' => 'desc'));
?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Players</h1>
			</div>
		</div>
	</div>
</div>
<div class="row row-grey row-players-menu">
	<div class="inner-wrapper">
		<ul class="players-menu">
			<li class="players-menu__item">
				<a href="<?php echo site_url(); ?>/players?team=first-team" <?php if(!$cate || $cate == 'first-team'){ echo 'class="active"';}?>>First team</a>
			</li>
			<li class="players-menu__item">
				<a href="<?php echo site_url(); ?>/players?team=reserve-team" <?php if($cate == 'reserve-team'){ echo 'class="active"';}?>>Reserve team</a>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="inner-wrapper">

		<?php
			$i = 0;
			if (have_posts()) : while (have_posts()) : the_post();
			$i++;
			?>

		<div class="three-col <?php if( $i == 4 ) { echo 'last-col'; } ?>">
			<a class="player__link" href="<?php the_permalink(); ?>">
				<?php
				$image = get_post_meta($post->ID, 'player_image', $single = true);
				$attachment_id = $image;
				$position = get_post_meta($post->ID, 'player_position', true);

				$image_attributes = wp_get_attachment_image_src( $attachment_id, 500 );
				if( $image_attributes ) {
				?>
				<img class="player__image" src="<?php echo $image_attributes[0]; ?>" width="500" height="500">
			<?php } ?>
			</a>
			<div class="player__details">
				<div class="player__number"><?php echo get_post_meta($post->ID, 'player_number', $single = true); ?></div>
				<div class="player__name"><?php the_title(); ?></div>
				<div class="player__position"><?php echo $position[0];	?></div>
			</div>
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
