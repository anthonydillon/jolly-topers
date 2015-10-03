<?php get_header(); ?>

	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>Two teams. One dream.</h1>
				<p>A football club in the North Home Counties football league. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sequi, harum. Tenetur cumque dolorem laboriosam, similique dicta quaerat quasi quisquam vitae. Quasi placeat voluptates perferendis iure modi, ea animi ipsam.</p>
			</div>

		</div>
	</div>
</div>

<div class="wrapper">
	<main id="main-content">
	<div class="row next-match">
		<div class="inner-wrapper align-center">
			<ul class="inline-list">
				<li><img src="<?php bloginfo('template_directory'); ?>/img/jolly-topers-badge.png" alt="" /></li>
				<li>Jolly Topers Reserves</li>
				<li>VS</li>
				<li>Houghton Town</li>
				<li><img src="<?php bloginfo('template_directory'); ?>/img/generic-sheild.png" alt="" /></li>
			</ul>
		</div>
	</div>
	<div class="row next-match-details">
		<div class="inner-wrapper align-center">
			<ul class="inline-list">
				<li class="when">03 Sep 2016 - 10:30</li>
				<li class="where">Beverley Road, Luton, Beds LU4 8EU</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="inner-wrapper">
			<div class="seven-col append-one">
				<h2>Recent News</h2>
				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h3 class="page-title screen-reader-text"><?php single_post_title(); ?></h3>
						</header>
					<?php endif; ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div>
			<div class="four-col last-col">

				<h3>Division 2 - League table</h3>
				<div id="lrep538090342" style="width: 350px;">Data loading....<a href="http://full-time.thefa.com/Index.do?divisionseason=228322435">click here for Division 2</a><br/><br/><a href="http://www.thefa.com/FULL-TIME">FULL-TIME Home</a></div>
				<script language="javascript" type="text/javascript">
				var lrcode = '538090342'
				</script>
				<script language="Javascript" type="text/javascript" src="http://full-time.thefa.com/client/api/cs1.js"></script>

				<h3>Division 3 - League table</h3>
				<div id="lrep636305268" style="width: 350px;">Data loading....<a href="http://full-time.thefa.com/Index.do?divisionseason=905999598">click here for Premier Division</a><br/><br/><a href="http://www.thefa.com/FULL-TIME">FULL-TIME Home</a></div>
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
			<div class="three-col">
				<a class="player__link" href="">
					<img class="player__image" src="http://localhost/jolly-topers/wp-content/uploads/2015/10/lee-hayward.jpg" alt=""/>
				</a>
				<div class="player__details">
					<div class="player__number">09</div>
					<div class="player__name">Lee Hayward</div>
					<div class="player__position">Striker</div>
				</div>
			</div>
			<div class="three-col">
				<a class="player__link" href="">
					<img class="player__image" src="http://localhost/jolly-topers/wp-content/uploads/2015/10/kyle-gooch.jpg" alt=""/>
				</a>
				<div class="player__details">
					<div class="player__number">10</div>
					<div class="player__name">Kyle Gooch</div>
					<div class="player__position">Striker</div>
				</div>
			</div>
			<div class="three-col">
				<a class="player__link" href="">
					<img class="player__image" src="http://localhost/jolly-topers/wp-content/uploads/2015/10/scott1.jpg" alt=""/>
				</a>
				<div class="player__details">
					<div class="player__number">02</div>
					<div class="player__name">Scott Weymouth</div>
					<div class="player__position">Defender</div>
				</div>
			</div>
			<div class="three-col last-col">
				<a class="player__link" href="">
					<img class="player__image" src="http://localhost/jolly-topers/wp-content/uploads/2015/10/rob-hennem.jpg" alt=""/>
				</a>
				<div class="player__details">
					<div class="player__number">04</div>
					<div class="player__name">Rob Hennem</div>
					<div class="player__position">Defender</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="inner-wrapper">
			<div class="twelve-col">
				<a class="right button--primary" href="players">View full gallery</a>
				<h2>Gallery</h2>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
