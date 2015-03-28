<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


	<article id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<ul>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
						<li class="post">
							<p class="date"><?php the_time('d.m.y') ?></p>
							<h1><?php the_title() ;?></h1>
							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?>
						</li>
						
						<div class="comments">
						
						<?php comments_template(); ?>
						
						</div>
					
					<?php endwhile; else: ?>
					
					</ul>
					
						<p>Sorry, no posts to list</p>
					
					<?php endif; ?>

				</div>
				<!--<div class="col-sm-4 hidden-xs">
					<div class="sidebar">
						<?php dynamic_sidebar( 'home_right_1' ); ?>
					</div>
				</div>-->
			</div>
		</div>
	</article>

<?php get_footer(); ?>