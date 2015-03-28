<?php
/*
Template Name: Contact
*/

 get_header(); ?>

		<section class="margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h1 class="king-size center">Let's talk</h1>
						<p class="preamble">Thanks for stopping by and saying hello</p>
						<p class="neg-margin">We would love to hear from you if you have feedback or suggestions or would like to book onto one of my courses. Fill out your details below and I will get back to you.</p>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content('
						Read the rest of this page »</p>'); ?>
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>