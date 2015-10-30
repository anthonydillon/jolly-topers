<?php

/**
 * Homepage Template
 *
 *
 * @file           home.php
 * @package        Jolly Topers FC
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */
 /* Template Name: Home */

get_header(); ?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Two teams. One dream.</h1>
				<p>A Bedfordshire based football club with a proud and growing history. We believe that a solid and cohesive group of players is the key to enjoying our football and breeding success.</p>
			</div>
		</div>
	</div>
</div>

<div class="wrapper">
	<main id="main-content">
	<?php $args = array(
		'order'            => 'ASC',
		'meta_key'         => 'date',
		'meta_value'       => date('Ymd'),
		'meta_compare'		 => '>',
		'post_type'        => 'fixtures',
		'post_status'      => 'publish'
	);
	$posts_array = get_posts( $args );
	$i = 0;
	$homeTeam = get_post_meta($posts_array[0]->ID, 'home_team', $single = true);
	$awayTeam = get_post_meta($posts_array[0]->ID, 'away_team', $single = true);
	$gameDate = get_post_meta($posts_array[0]->ID, 'date', $single = true);
	$gameTime = get_post_meta($posts_array[0]->ID, 'time', $single = true);
	$location = get_post_meta($posts_array[0]->ID, 'location', $single = true); ?>
	<div class="row next-match">
		<div class="inner-wrapper align-center">
			<ul class="inline-list">
				<li><img src="<?php bloginfo('template_directory'); ?><?php echo getTeamBadge($homeTeam); ?>" alt="" /></li>
				<li><?php echo get_post_meta($posts_array[0]->ID, 'home_team', $single = true); ?></li>
				<li class="next-match__vs">VS</li>
				<li><?php echo get_post_meta($posts_array[0]->ID, 'away_team', $single = true); ?></li>
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
	<?php	wp_reset_postdata();?>
	<div class="row">
		<div class="inner-wrapper">
			<div class="seven-col">
				<h2>Recent News</h2>
				<?php $args = array(
					'posts_per_page'   => 2,
					'offset'           => 0,
					'category'         => '',
					'category_name'    => '',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true
				);
				$posts_array = get_posts( $args );
				foreach ( $posts_array as $post ) : setup_postdata( $post );
					get_template_part( 'content', get_post_format() );
				endforeach;
				wp_reset_postdata(); ?>
			</div>
			<div class="five-col last-col">

				<h3>Division 2 - League table</h3>
				<div id="lrep538090342">Data loading....<a href="http://full-time.thefa.com/Index.do?divisionseason=228322435">click here for Division 2</a><br/><br/><a href="http://www.thefa.com/FULL-TIME">FULL-TIME Home</a></div>
				<script language="javascript" type="text/javascript">
				var lrcode = '538090342'
				</script>
				<script language="Javascript" type="text/javascript" src="http://full-time.thefa.com/client/api/cs1.js"></script>

				<h3>Division 3 - League table</h3>
				<div id="lrep636305268">Data loading....<a href="http://full-time.thefa.com/Index.do?divisionseason=905999598">click here for Premier Division</a><br/><br/><a href="http://www.thefa.com/FULL-TIME">FULL-TIME Home</a></div>
				<script language="javascript" type="text/javascript">
				var lrcode = '636305268'
				</script>
				<script language="Javascript" type="text/javascript" src="http://full-time.thefa.com/client/api/cs1.js"></script>
			</div>
		</div>
	</div>
	<div class="row players">
		<div class="inner-wrapper">
			<div class="twelve-col">
				<a class="right button--secondary" href="players">View all players</a>
				<h2>Players</h2>
			</div>
			<?php $args = array(
				'posts_per_page'   => 4,
				'offset'           => 0,
				'category'         => '',
				'category_name'    => '',
				'orderby'          => 'rand',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'players',
				'post_status'      => 'publish',
				'suppress_filters' => true
			);
			$posts_array = get_posts( $args );
			$i = 0;
			foreach ( $posts_array as $post ) : setup_postdata( $post );
				$i++;
				?>

				<div class="three-col <?php if( $i == 4 ) { echo 'last-col'; } ?>">
					<a class="player__link" href="<?php the_permalink(); ?>">
						<?php // if there's a thumbnail
						$image = get_post_meta($post->ID, 'player_image', $single = true);
						$attachment_id = $image; // attachment ID
						$position = get_post_meta($post->ID, 'player_position', true);

						$image_attributes = wp_get_attachment_image_src( $attachment_id, 500 ); // returns an array
						if( $image_attributes ) {
						?>
							<img class="player__image" src="<?php echo $image_attributes[0]; ?>" width="500" height="500" alt="">
		        <?php } else { ?>
		  				<img class="player__image" src="<?php bloginfo('template_directory'); ?>/img/empty-profile.jpg" width="500" height="500" alt="">
		  			<?php } ?>
					</a>
					<div class="player__details">
							<div class="player__number"><?php echo get_post_meta($post->ID, 'player_number', $single = true); ?></div>
						<div class="player__name"><?php the_title(); ?></div>
						<div class="player__position"><?php echo $position[0];	?>
						</div>
					</div>
				</div>
			<?php endforeach;
			wp_reset_postdata();?>
		</div>
	</div>

	<!-- <div class="row">
		<div class="inner-wrapper">
			<div class="twelve-col">
				<a class="right button--primary" href="players">View full gallery</a>
				<h2>Gallery</h2>
			</div>
		</div>
	</div> -->


<?php get_footer(); ?>
