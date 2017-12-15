	<!--this turns the post title into a permalink-->
	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>
	<p><?php the_excerpt(); ?></p>
	<strong><?php the_time('F jS, Y'); ?></strong> 
	<div id="metadatas">
		<?php the_category(', '); ?>
		<span id="tags"><?php the_tags(); ?></span>
	</div>


<!--
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
-->