<div class="swiper-container3">
			    <div class="swiper-wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="swiper-slide">
		<div class="content-single">
			<div class="box">
				<a class="post-ajax" href="<?php the_permalink(); ?>">
					<img src="<?php the_field('vignettes'); ?>">
					<div class="overlay-vignette <?php if( get_field('type_de_realisation') == 'construction' ): ?>overlay-construction<?php endif; ?>">
						<h4><?php the_field("texte_vignettes"); ?></h4>
					</div>
				</a>
			</div>
			<div class="box">
				<img src="<?php the_field('vignette_apres'); ?>">
			</div>
		</div>
	</div>

<?php endwhile; endif; ?>
</div>
<div class="swiper-pagination"></div>
</div>