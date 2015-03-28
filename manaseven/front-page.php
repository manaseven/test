<?php get_header(); ?>

		<article id="hero">
			<h1 class="center color-white"><span>Mama. Doula. Birthing activist</span></h1>
			<div class="center">
				<a href="/contact" class="btn btn-default">Get in touch</a>
			</div>
		</article>
		<article class="white-bg margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title center">How <span>I can</span> help</h2>
					</div>
				</div>
				<div class="row">
					<article class="col-sm-4">
						<div class="intro-panel">
							<a href="/hypnobirthing"><img class="resp" alt="baby sleeping" src="/images/hypno-thumb-color.jpg" /></a>
							<h3 class="center"><a href="/hypnobirthing">HypnoBirthing</a></h3>
							<p class="center">The Mongan Method</p>
						</div>
					</article>
					<article class="col-sm-4">
						<div class="intro-panel">
							<a href="/doula"><img class="resp" alt="baby wearing" src="/images/doula-thumb.jpg" /></a>
							<h3 class="center"><a href="/doula">Doula</a></h3>
							<p class="center">Birth & Postpartum</p>
						</div>
					</article>
					<article class="col-sm-4">
						<div class="intro-panel">
							<a href="/blog"><img class="resp" alt="hollie adams-hylands in Japan" src="/images/blog-thumb-color.jpg" /></a>
							<h3 class="center"><a href="/blog">Writing</a></h3>
							<p class="center">Inspiration & Ramblings</p>
						</div>
					</article>
				</div>
			</div>
		</article>
		
		<article class="mint-bg margin-large">
			<div class="container relative">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-1">
						<img src="/images/hollie-color.jpg" class="avatar" alt="Hollie Adams-Hylands profile photo">
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<h2 class="title">Meet <span>Hollie</span></h2>
						<p class="mobile-center">Hi, I’m Hollie. A Mama, Doula, HypnoBirthing Practitioner and all round activist for mindful birthing and parenting. Join me  in helping to change and shape our world into a more peaceful and compassionate place </p>
						<div class="mobile-center">
							<a class="btn btn-default" href="/about">Find out more</a>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<article class="margin-med">
			<div class="container">
				<h2 class="center title">From <span>the</span> blog</h2>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<article>
							<?php $posts = get_posts( "numberposts=1" ); ?>
							<?php if( $posts ) : ?>
							<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<h3 class="center"><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
							<p class="center date"><?php the_time('d.m.y') ?></p>
							<span class="center"><?php the_excerpt(); ?></span>
							<?php endforeach; ?>
							<?php endif; ?>
						</article>
					</div>
				</div>
			</div>
		</article>


<?php get_footer(); ?>