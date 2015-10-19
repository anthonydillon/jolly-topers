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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row border">
	<div class="inner-wrapper">
		<div class="eight-col prepend-two">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
