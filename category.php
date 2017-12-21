<?php get_header(); ?>
<div class="section">
    <div class="container">
    	<h2 class="title text-center">Categoria</h2>
        <br>
		<div class="row">
		    <div class="col-md-8">
		    	respondio categoria
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