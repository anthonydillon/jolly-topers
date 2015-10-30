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
    $i++;

    $image = get_post_meta($post->ID, 'player_image', $single = true);
    $attachment_id = $image; // attachment ID
    $position = get_post_meta($post->ID, 'player_position', true);

    $image_attributes = wp_get_attachment_image_src( $attachment_id, 500 ); // returns an array
    ?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Player profile</h1>
			</div>
		</div>
	</div>
  <div class="row strip-orange no-border">
		<div class="inner-wrapper">
      <div class="two-col prepend-two no-margin-bottom">
        <?php
        if( $image_attributes ) {
				?>
        <img class="player__image" src="<?php echo $image_attributes[0]; ?>" width="500" height="500">
        <?php } else { ?>
  				<img class="player__image" src="<?php bloginfo('template_directory'); ?>/img/empty-profile.jpg" width="500" height="500" alt="">
  			<?php } ?>
      </div>
      <div class="seven-col last-col">
				<h2 class="player-profile__name"><?php the_title(); ?></h2>
        <p class="player-profile__number"><?php echo get_post_meta($post->ID, 'player_number', $single = true); ?></p>
				<div class="player-profile__position"><?php echo $position[0];	?></div>
      </div>
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
