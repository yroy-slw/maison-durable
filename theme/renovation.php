<?php
/*
Template Name: Rénovation
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
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne.png" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>
</div>

<div class="page">
	<div class="full-title">
		<h1 class="dark-color"><?php the_field("titre_page", false, false); ?></h1>
	</div>
	<div class="entete">
		<h2 class="dark-color"><?php the_field("titre"); ?></h2>
	</div>


	<section class="page-optimisation">

		<div class="two-cols">
			<article class="minus">
				<div class="title-img">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">
					<h1 class="dark-color" id="op"><?php the_field("titre_1"); ?></h1>
				</div>
				<p class="dark-color optimisation"><?php the_field("text_1"); ?></p>
			</article>
			<article class="minus fonce">
				<div class="title-img">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">
					<h1 class="dark-color" id="ex"><?php the_field("titre_2"); ?></h1>
				</div>
				<div class="dark-color">
				<p class="dark-color expertise"><?php the_field("text_2"); ?></p>
				</div>
			</article>
		</div>

		<div id="optimisation" class="bandeau">
			<div class="inner-bandeau">
				<?php the_field("bandeau_1"); ?>
			</div>
		</div>


		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					Rénovation
					en 2 temps
				</div>

				<div class="box-border dark-border">
					<div class="box extra">
						<?php the_field("analyse"); ?>
					</div>
					<div class="box extra">
						<?php the_field("planification"); ?>
					</div>
					<div class="box extra">
						<?php the_field("execution"); ?>
					</div>

					<div class="box">
						<?php the_field("contenu_additionnel"); ?>
					</div>
					<div class="box">
						<?php the_field("contenu_additionnel_2"); ?>
					</div>

					<div class="box">
						&nbsp;
					</div>

				</div>
			</div>
		</div>

		<div class="button">
			<div class="left-button">&nbsp;</div>
			<div class="right-button">
				<a class="bgdark" href="http://maisondurable.ch/realisations/">voir les réalisations</a>
			</div>
		</div>

		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
				</div>
				<div class="box-border dark-border no-bord">
					<div class="remove centeri">
						<img src="<?php the_field("encart_image"); ?>">
					</div>
				</div>
			</div>
		</div>
		

		<div id="expertise" class="bandeau">
			<div class="inner-bandeau">
				<?php the_field("bandeau_2"); ?>
			</div>
		</div>

		<div class="three-cols big-margin lighter">
			<div class="inner">
				<div class="accroche">
					<span class="fixth">Construction<br/>
					en 3 étapes</span>
					<a href="">
						<img class="pos" src="<?php bloginfo('template_url'); ?>/img/plus.png">
					</a>
				</div>
				<div class="box-border dark-border">
					<div class="dark-color box">
						<?php the_field("inspection"); ?>
					</div>
					<div class="dark-color box">
						<?php the_field("bilan_energetique"); ?>
					</div>
					<div class="dark-color box">
						<?php the_field("mesures"); ?>
					</div>
					<div class="dark-color box">
						&nbsp;
					</div>
				</div>
			</div>
		</div>

		<div class="button final-elem">
			<div class="left-button">&nbsp;</div>
			<div class="right-button">
				<a class="bgdark" href="http://maisondurable.ch/realisations/">voir les projets en cours</a>
			</div>
		</div>




	</section>
</div>			
<?php get_footer(); ?>        