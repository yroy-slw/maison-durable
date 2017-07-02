<?php
/*
Template Name: Accueil-final
*/
?>
<?php get_header(); ?>
	<div class="main-new">
		<div class="row-top-home">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-maison-durable-home.jpg" alt="amandel Logo centrale d'achats"></a>
		</div>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
		<div class="content-home">
			<!-- Swiper -->
		    <div class="swiper-container">
		        <div class="swiper-wrapper">
		        	<?php while ( have_rows('slider') ) : the_row(); ?>
						<div class="swiper-slide"><img src="<?php the_sub_field('image'); ?>" alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>"></div>
				    <?php endwhile; ?>
		        </div>
		        <div class="overlay-slider">
					<?php the_field("slogan"); ?>
		        </div>
			</div>
			<div class="swiper-button-next">
				<img src="<?php bloginfo('template_url'); ?>/img/arrow-right.png" alt="maison durable">
			</div>
		</div>
	</div>
<?php get_footer(); ?>   
