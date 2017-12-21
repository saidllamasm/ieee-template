<?php /* Template Name: Right sidebar */ ?>
<?php get_header(); ?>
	<div class="section">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2 class="title text-center"><?php the_title(); ?></h2>
			<div class="content">
                <div class="row">
                	<div class="col-md-8">
                		<?php the_content(); ?>
                	</div>
                	<div class="col-md-1"></div>
                    <div class="col-md-3">
                    	<?php if ( is_active_sidebar( 'home_right' ) ) : ?>
							<?php dynamic_sidebar( 'home_right' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		        <!-- post navigation -->
		    <?php else: ?>
		        <!-- no posts found -->
		        <p>No hay nada para mostrar</p>
		     <?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>