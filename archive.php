<?php

/**
 * News Template
 *
 * @package        Jolly Topers FC
 * @author         Anthony Diilon
 * @version        Release: 0.1
 */

get_header(); ?>


	<div class="row row-hero strip-dark no-border">
		<div class="inner-wrapper">
			<div class="eight-col prepend-two align-center">
				<h1>News</h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="inner-wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="eight-col prepend-two">
			<h1><?php the_title(); ?>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
	</div>
</div>



<?php get_footer(); ?>
