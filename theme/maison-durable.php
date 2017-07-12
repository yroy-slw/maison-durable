<?php
/*
Template Name: Maison durable
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

<div class="page" <?php if(function_exists("live_edit")){ live_edit('titre_page, titre'); }?>>
	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<!--<img id="logo-page" src="<?php the_field('logo'); ?>">-->
		<h1><?php the_field("titre_page", false, false); ?></h1>
	</div>
	<div class="entete pageh wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
		<h2><?php the_field("titre"); ?></h2>
	</div>

	

	<div class="three-cols sups">
			<div class="inner">
				<div class="accroche">
					&nbsp;
				</div>

				<div class="box-border no-bord stop-bord mad">
					<div class="trim">
						<div class="inner-trim">
							<img id="logo-page" src="<?php the_field('logo'); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>


	<section class="page-optimisation">

		<!--<div id="optimisation" class="bandeau normal light margin-bas">
			<div class="inner-bandeau">
				<?php the_field("bandeau_1"); ?>
			</div>
		</div>-->

	

		<div class="three-cols sups" <?php if(function_exists("live_edit")){ live_edit('titre_1, text_1, titre_2, text_2, titre_3, texte_3, titre_4, texte_4'); }?>>
			<div class="inner">
				<div class="accroche essai">
					secteurs<br/>
					d'activité
				</div>

				<div class="box-border no-bord essai">
					<div class="two-cols nnnnnn">
			<article class="reduce fonce">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">-->
					<h1><a href="http://maisondurable.ch/renovation/"><?php the_field("titre_1"); ?></a></h1>
				</div>
				<p class="optimisation"><?php the_field("text_1"); ?></p>
			</article>
			<article class="reduce fonce">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">-->
					<h1><a href="http://maisondurable.ch/renovation/"><?php the_field("titre_2"); ?></a></h1>
				</div>
				<p class="expertise"><?php the_field("text_2"); ?></p>
			</article>
			<article class="reduce topp">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">-->
					<h1><a href="http://maisondurable.ch/optimisation/"><?php the_field("titre_3"); ?></a></h1>
				</div>
				<p class="optimisation"><?php the_field("texte_3"); ?></p>
			</article>
			<article class="reduce topp">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">-->
					<h1><a href="http://maisondurable.ch/optimisation/"><?php the_field("titre_4"); ?></a></h1>
				</div>
				<p class="expertise"><?php the_field("texte_4"); ?></p>
			</article>
		</div>
				</div>
			</div>
		</div>

		<!--<div class="encart-simple">
			<img src="<?php the_field('encart_image'); ?>">
		</div>-->

		<div class="three-cols sups" <?php if(function_exists("live_edit")){ live_edit('bandeau_milieu'); }?>>
			<div class="inner">
				<div class="accroche">
					&nbsp;
				</div>

				<div class="box-border no-bord">
					<div class="bandeau-inter">
						<?php the_field("bandeau_milieu"); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="three-cols mat" <?php if(function_exists("live_edit")){ live_edit('analyse, planification, execution'); }?>>
			<div class="inner">
				<div class="accroche">
					MD
					c’est qui ? 
				</div>

				<div class="box-border">
					<div class="box nope">
						<?php the_field("analyse"); ?>
					</div>
					<div class="box nope">
						<?php the_field("planification"); ?>
					</div>
					<div class="box nope">
						<?php the_field("execution"); ?>
					</div>

				</div>
			</div>
		</div>

		<div class="three-cols" <?php if(function_exists("live_edit")){ live_edit('encart_texte'); }?>>
			<div class="inner">
				<div class="accroche">
					&nbsp;
				</div>

				<div class="box-border nobord stop-bord">
					<h2><?php the_field("encart_texte"); ?></h2>
				</div>
			</div>
		</div>

	</section>
</div>			
<?php get_footer(); ?>        