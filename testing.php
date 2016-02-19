
	<div class="main-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-category', get_post_format() ); ?>
			
		<?php else: ?>
			<article>
				<h4>No posts found!</h4>
			</article>
        <?php endwhile;?>
		<?php endif; ?>
        
	</div>
	
	<?php if ( have_posts()): ?>

<?php while ( have_posts() ) : the_post(); ?>

<h1><?php the_title();?></h1>

<?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>