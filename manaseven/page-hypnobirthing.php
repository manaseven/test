<?php
/*
Template Name: HypnoBirthing
*/

 get_header(); ?>

		<article id="title" class="white-bg margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h1 class="no-margin king-size center">HypnoBirthing</h1>
					</div>
				</div>
			</div>
		</article>
		
		<article class="image">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<blockquote>
						<h3>"When you change the way you view birth, the way you birth will change"</h3>
						<cite>Marie Mongan, HypnoBirthing founder</cite>
						</blockquote>
					</div>
				</div>
			</div>
		</article>
		
		<article class="margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h2 class="title">What <span>is</span> HypnoBirthing?</h2>
					</div>
					<div class="col-sm-8 col-sm-offset-1">
						<div class="row">
							<p><strong>HypnoBirthing</strong> to many is a new concept. For those with little previous knowledge don’t let the word ‘Hypno’ confuse you.</p>
							<p>The course is built using evidence-based scientific research combined with tools and techniques in deep relaxation and meditation to help prepare you mentally, physically and emotionally to birth your baby calmly and with ease. </p>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<article class="mint-bg margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h2 class="title">About <span>the</span> course</h2>
					</div>
					<div class="col-sm-8 col-sm-offset-1">
						<div class="row">
							<p>I provide courses in HypnoBirthing - The Mongan Method to prospective parents across Edinburgh and Central Scotland.</p>
							<p>The course itself is split into <strong>5 x 2.5 hour</strong> sessions.</p>
							<p  class="no-margin">This is typically (although not always) spread across 5 consecutive weeks. If however you have discovered HypnoBirthing later in your pregnancy i.e 35+ weeks onwards please do still get in touch and I can arrange an intensive course with sufficient notice.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<article class="margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row">
							<h2 class="title center">What <span>you will</span> learn</h3>
							<ul class="basic">
								<li>The importance and power of the mind body connection</li>
								<li>How birth is a physiological function of the body</li>
								<li>How fear affects labour and our birthing muscles (known as the Fear-Tension-Pain cycle)</li>
								<li>How your body is designed perfectly for birth</li>
								<li>How the history of women and birthing has shaped our approach to birthing today</li>
								<li>How to choose the right care provider and birthing environment for you</li>
								<li>How to let your baby and body set the pace of your birthing</li>
								<li>An array of tools and techniques in relaxation, self hypnosis, visualisation, breathing and massage to help you experience the birth you envisage</li>
								<li>How to ask the right questions to make informed decisions should your birth not quite go to plan</li>
							</ul>
							<p class="no-margin">Each strand of the course is intertwined with another and allows you to maximise and nourish your belief in yourself and the birthing process to create a truly unique and empowering birthing experience.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<article class="surf-bg margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<h2 class="title center">Course <span>prices</span></h2>
							<p class="small center neg-margin">(All prices per couple)</p>
							<div class="table-responsive">
								<table class="table">
							      <thead>
							        <tr>
							          <th>Type</th>
							          <th>When</th>
							          <th>Location</th>
							          <th>Price</th>
							        </tr>
							      </thead>
							      <tbody>
							        <tr>
							          <td>1-2-1 sessions</td>
							          <td>Whenever you want</td>
							          <td>Your home or mine</td>
							          <td>£325</td>
							        </tr>
							        <tr>
							          <td>Group sessions (max 3 couples)</td>
							          <td>Selected dates throughout the year</td>
							          <td>My home in Trinity, Edinburgh</td>
							          <td>£275</td>
							        </tr>
							        <tr>
							          <td>Friends sessions* (max of 3 couples)</td>
							          <td>Whenever you want</td>
							          <td>You decide</td>
							          <td>£250</td>
							        </tr>
							      </tbody>
							    </table>
							</div>
						    
						    <p class="small">*Do you have pregnant friends or colleagues who are also interested in finding out more about HypnoBirthing? If so, I provide private group sessions available at a discounted rate. <a href="mailto:hollie@hollieadamshylands.com">Get in touch</a> to find out more.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<article class="margin-med">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row post">
							<h2 class="title center">How <span>to</span> book</h2>
							<p class="neg-margin center">Booking is easy and straightforward:</p>
							<ol class="basic-ordered">
								<li>Firstly, I always like to start with a chat via <strong>Telephone</strong>, <strong>Skype</strong> or <strong>Email</strong>. This lets me fully understand your circumstances and how I can best support you in the run up to your birth</li>
								<li>When you are ready to progress all I ask is for a <strong>£50 non-refundable deposit</strong> to secure your place</li>
								<li>You can pay the remainder of the outstanding balance when we meet at the beginning of <strong>Session 1</strong></li>
							</ol>
							<div class="center">
								<a class="btn btn-default margin-bottom" href="mailto:hollie@hollieadamshylands.com">Email me to get started</a>
							</div>
						</div>
						<div class="row post">
							<h2 class="title center">More <span>About</span> me</h2>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php the_content('
							Read the rest of this page »</p>'); ?>
							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
							<div class="center">
								<a class="btn btn-default margin-bottom margin-top" href="mailto:hollie@hollieadamshylands.com">Email me to get started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>


<?php get_footer(); ?>