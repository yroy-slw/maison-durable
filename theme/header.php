<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php wp_title(''); ?></title>
<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script src="https://use.fontawesome.com/b4d3cfc793.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.event.move.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.twentytwenty.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
<script>
jQuery(document).ready(function($) {

	$(".phone").click(function(){
		var ws = $( window ).width();
		if(ws <= 1300) {
			$("nav").slideToggle();
		}
	});

	$(window).resize(function(){
		var ws = $( window ).width();
		if(ws >= 1300) {
			$("nav").show();
		}
	});

	$("footer").click(function(){
		$(".overlay-footer").toggleClass("pop");
	});
	$(".close-footer").click(function(){
		$(".overlay-footer").removeClass("pop");
		$(".overlay-lien").fadeOut();
		$(".modal-lien").fadeOut();
	});


	/*Cats Ajax*/
	$(".ajax-cats li:first-child a").addClass("active");

	$( ".ajax-cats a" ).on( "click", function() {
		var url = $(this).attr("href");

		$(".loader").fadeIn();

		$( ".ajax-cats a" ).removeClass("active");
		$(this).addClass("active");

		$(".ajax-content-cat").load(url, function() {
			$(".loader").fadeOut();
			$(".swiper-container2").remove();
			$(".swiper-container4").remove();

			var swiper = new Swiper('.swiper-container3', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 2,
		        paginationClickable: true,
		        spaceBetween: 15,
		        loop: true,
		        autoplay: 2000,
		        speed: 800
		    });

		});

		return false;
	});

	$( "body" ).on( "click", ".back", function() {
		$(".ajax-content-post").removeClass("moveLeft");
	});

	/*Post Ajax*/
	$( "body" ).on( "click", ".post-ajax", function() {
		var urlPost = $(this).attr("href");

		$(".loader").fadeIn();

		$(".ajax-content-post").load(urlPost, function() {
			$(this).addClass("moveLeft");
			$(".loader").fadeOut();
			var swiper = new Swiper('.swiper-container4', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 1,
		        paginationClickable: true,
		        loop: true,
		        autoplay: 2000,
		        speed: 800
		    });
		});

		return false;
	});

	$("#op").click(function(){
		$('html, body').animate({
        	scrollTop: $("#optimisation").offset().top - 38
    	}, 1000);
	});
	$("#ex").click(function(){
		$('html, body').animate({
        	scrollTop: $("#expertise").offset().top - 38
    	}, 1000);
	});

	$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});

	$(".liens-partenaires").click(function(){
		$(".overlay-lien").fadeToggle();
		$(".modal-lien").fadeToggle();
		return false;
	});


});
</script>
</head>
<body class="site">

	<header>
		<div class="inner-header">
			<div class="phone"><i class="fa fa-bars" aria-hidden="true"></i>
</div>
			<a class="liens-partenaires" href="">Liens &nbsp;</a>
			<a class="" href="http://maisondurable.ch/maison-durable/"> | Présentation MD</a>
			<?php if( current_user_can('administrator') ) {  ?> 
				<a class="super-admin" href="http://maisondurable.ch/edition-posts/">Editer les réalisations</a>
				<a class="super-admin" href="http://maisondurable.ch/ajouter-realisation/">Ajouter une réalisation</a>
			<?php } ?>
		</div>
	</header>
					