	<!--this turns the post title into a permalink-->
	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>
		<?php if(is_single()) : ?>
			<!--get the content-->
			<?php the_content(); ?>
		<?php else : ?>
			<p><?php the_excerpt(); ?></p>
		<?php endif; ?>
	<strong><?php the_time('F jS, Y'); ?></strong> 
	<div id="metadatas">
		<?php the_category(', '); ?>
		<span id="tags"><?php the_tags(); ?></span>
	</div>


