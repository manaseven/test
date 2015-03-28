<?php get_header(); ?>

	<article id="title" class="image-led">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1 class="king-size white">The Breathing Space</h1>
					<p class="white">Inspiration and ramblings</p>
				</div>
			</div>
		</div>
	</article>
		

	<article id="content" class="margin-med">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<ul>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
						<li class="post">
							<p class="date"><?php the_time('d.m.y') ?></p>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title() ;?></a></h2>
							<?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
						</li>
					
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