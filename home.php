<?php get_header(); ?>

<div class="section">
    <div class="container">
    	<h2 class="title text-center">BLOG</h2>
        <br>
		<div class="row">
		    <div class="col-md-8">
		        <div class="card card-plain card-blog">
		        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            <div class="row">
		            	<!--single-->
		                <div class="col-md-4">
		                    <div class="card-image">
		                        <a href="<?php the_permalink(); ?>"><img class="img img-raised rounded" ><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}  ?></a>
		                    </div>
		                </div>
		                <div class="col-md-8">
		                    <h6 class="category text-ieee"><?php the_category(', '); ?></h6>
		                    <h3 class="card-title">
		                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                    </h3>
		                    <p class="card-description">
		                        <?php the_excerpt(); ?> 
		                    </p>
		                    <p class="author">
		                        Por
		                        <a href="<?php the_author_link(); ?>">
		                            <b><?php the_author(); ?></b>
		                        </a>, <?php the_date( $d = '', $before = '', $after = '', $echo = true )?>
		                    </p>
		                </div>
		            </div>
		            <hr><br>
		            <!--end single-->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<p>No hay nada para mostrar</p>
					<?php endif; ?>
		        </div>
		    </div>
		    <!--sidebar-->
        	<div class="col-md-1"></div>
            <div class="col-md-3">
            	<?php if ( is_active_sidebar( 'home_right' ) ) : ?>
					<?php dynamic_sidebar( 'home_right' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>