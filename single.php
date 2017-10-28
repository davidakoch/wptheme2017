
<?php get_header(); ?>



<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title">PHILADELPHIA PSYCHOTRONIC SOCIETY</h1>
	</div>
</div>		

<div id="primary" class="content-area">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
		<?php the_content(); ?>
		
		<strong><?php the_time('F jS, Y'); ?></strong> 
			<div id="metadatas">
				<?php the_category(); ?>
				<span id="tags"><?php the_tags(); ?></span>
			</div>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>


<?php get_footer(); ?>
