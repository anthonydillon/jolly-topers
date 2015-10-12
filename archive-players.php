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
				<h1>Players</h1>
			</div>
		</div>
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
				<?php // if there's a thumbnail
				$image = get_post_meta($post->ID, 'player_image', $single = true);
				$attachment_id = $image; // attachment ID

				$image_attributes = wp_get_attachment_image_src( $attachment_id, 500 ); // returns an array
				if( $image_attributes ) {
				?>
				<img class="player__image" src="<?php echo $image_attributes[0]; ?>" width="500" height="500">
				<?php } ?>
			</a>
			<div class="player__details">
					<div class="player__number"><?php echo get_post_meta($post->ID, 'player_number', $single = true); ?></div>
				<div class="player__name"><?php the_title(); ?></div>
				<div class="player__position"><?php echo get_post_meta($post->ID, 'player_position', true)[0];	?>
				</div>
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
