<?php
/*
Template Name: Ajout réalisations
*/
?>
<?php 
if ( current_user_can( 'manage_options' ) ) {
	acf_form_head();
}
get_header(); 
?>
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

<div class="page">
	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<h1 class="dark-color"><?php the_title(); ?></h1>
	</div>


	<section class="page-optimisation">

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="liste remise">
			<?php
						/*acf_form(array(
							'post_id'		=> 'new_post_politique',
							'post_title'	=> true,
							'field_groups'  => array(237), // Create post field group ID(s)
							'form'          => true,
							'return'             => '%post_url%',
							'post_type'     => 'post', // Your post type ( post, page, custom post type )
							'post_status'   => 'publish', // (publish, draft, private, etc.)
							'return'		=> home_url('contact-form-thank-you'),
							'submit_value'       => 'Submit Post',
							'submit_value'	=> 'Ajouter'
						));*/

						$new_post_partenaire = array(
							'post_id'		=> 'new_post_partenaire',
							//'post_title'	=> true,
							'field_groups'  => array(19), // Create post field group ID(s)
							'form'          => true,
							'return'        => '%post_url%',
							'post_type'     => 'post', // Your post type ( post, page, custom post type )
							'post_status'   => 'publish', // (publish, draft, private, etc.)
							//'return'		=> home_url('contact-form-thank-you'),
							'submit_value'	=> 'Ajouter la réalisation'
						);
						acf_form( $new_post_partenaire );


						

					?>
		</div>
	<?php endwhile; endif; ?>

		




	</section>
</div>			
<?php get_footer(); ?>        