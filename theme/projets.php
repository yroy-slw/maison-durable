<?php
/*
Template Name: Projets
*/
?>
<?php get_header(); ?>
<div class="loader">
	<div class="inner-loader">
		<h2>Chargement...</h2>
	</div>
</div>


<div class="page-interne-2">
	<div class="header-interne">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne-final.jpg" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>
</div>

<div class="page" <?php if(function_exists("live_edit")){ live_edit('liste_des_projets'); }?>>
	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<h1><?php the_field("titre_page", false, false); ?></h1>
	</div>

	<section class="page-optimisation">

		<div class="final-flex">
			<div class="elem first-elem">
				<img id="logo-first" src="<?php the_field('logo'); ?>">
				<a href="http://maisondurable.ch/renovation/">
					<img id="lien" src="<?php the_field('lien'); ?>">
				</a>
			</div>
			<?php while ( have_rows('liste_des_projets') ) : the_row(); ?>
			<div class="elem">
				<img src="<?php the_sub_field('vignette'); ?>">
				<div class="inner-elem">
					<h2><?php the_sub_field("titre"); ?></h2>
					<p class="min"><?php the_sub_field("type_et_lieu"); ?></p>
					<p><?php the_sub_field("type_de_construction"); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
		</div>

	</section>
</div>			
<?php get_footer(); ?>        