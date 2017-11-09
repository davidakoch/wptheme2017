<?php get_header(); ?>
<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title">PHILADELPHIA PSYCHOTRONIC SOCIETY</h1>
	</div>
</div>		

<div id="primary" class="content-area-page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
		<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no pages matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>


<section class="about">
	<h1 class="text-left">About this Thing!</h1>
	<img src="http://first-theme-sept-2017.dev/wp-content/uploads/2017/10/philamoca.jpg" class="philamoca">
	<p class="about_text">We'll be carrying on the proud tradition set forth by Psychotronic Film Societies around the globe by screening cult/weirdo/trash films for the locally like-minded. Every second and last Monday of the month we'll meet at 7:30 PM at the Philadelphia Mausoleum of Contemporary Art to watch a feature film. All are invited to attend and contribute suggestions for future screenings, it'll be a programming round robin. And the Psychotronic Film Society tradition of watching films while drinking will be preserved so BYOB is encouraged.
	<br>
	<br>
	The PPFS is officially sanctioned by Brian Thomas, Propaganda Minister of the Sinister for Chicago's Psychotronic Film Society.
	<br>
	<br>
	WARNING: The subject matter of what we've come to know as psychotronic films runs the gamut from talking dogs to violent assaults. We will do our best to warn audiences in advance about films that contain extremely graphic and possibly upsetting content. That said, the very nature of many psychotronic films is to push the boundaries of taste, morals, and patience so always attend at your own risk.
	<br>
	<br>
	Read a history of the Psychotronic Film Society here:
	http://psychotronic.info/about/
	</p>
</section>


<?php get_footer(); ?>