<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        paginationClickable: true,
        spaceBetween: 15,
        loop: true,
        autoplay: 2000,
        speed: 800
    });
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        autoplay: 2000,
        speed: 800
    });
</script>
<script>

function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
            [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],
            {name: 'Styled Map'});

// Create a map object, and include the MapTypeId to add
// to the map type control.

<?php 
    query_posts(array( 
        'post_type' => 'gmap',
        'showposts' => 1 
    ) );  

while (have_posts()) : the_post(); ?>


    <?php $adresse1 = get_field('adresse_1'); ?>
    <?php $adresse2 = get_field('adresse_2'); ?>

    var image = '<?php bloginfo("template_url"); ?>/img/location_pin.png';

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $adresse2['lat']; ?>, lng: <?php echo $adresse2['lng']; ?>},
          scrollwheel: false,
          draggable: false,
          navigationControl: false,
        mapTypeControl: false,
          zoom: 9
        });

        var marker = new google.maps.Marker({
        position: {lat: 46.175744, lng: 7.605688},
        map: map,
        title: 'Rte de Zinal 106, 3961 Ayer ',
        icon: image
      });


        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');


        var map2 = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: <?php echo $adresse1['lat']; ?>, lng: <?php echo $adresse1['lng']; ?>},
          scrollwheel: false,
          draggable: false,
          navigationControl: false,
          mapTypeControl: false,
          zoom: 9
        });

        var marker2 = new google.maps.Marker({
        position: {lat: 46.032692, lng: 7.145316}, 
        map: map2,
        title: 'Rte du St-Bernard 20, 1937 Orsières',
        icon: image
      });
<?php endwhile;?>
        //Associate the styled map with the MapTypeId and set it to display.
        map2.mapTypes.set('styled_map', styledMapType);
        map2.setMapTypeId('styled_map');
      }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHYkZBOoc7jY2zs9hN8Uy7yBC1pNBuIz0&callback=initMap">
</script>     
<div class="overlay-footer">
	
	<div class="flex-footer">
		<div class="footer-top">
			<div class="inner">
				<div class="close-footer">
					<i class="fa fa-times" aria-hidden="true"></i>

				</div>
				<img src="<?php bloginfo('template_url'); ?>/img/logo-contact.png" alt="contactez maisondurable.ch">
			</div>
		</div>
		<div class="footer-middle">
			<div class="inner">
				<div class="content-footer">
					<div>
						<?php the_field("block1", false, false); ?>
					</div>
					<div>
						<?php the_field("block2", false, false); ?>
					</div>
					<div>
						<?php the_field("block3", false, false); ?>
					</div>
				</div>
				<div class="footer-2 inner-bottom">
					<div class="col">
						<span class="bold">Melly</span> David<br/>
						+41 (0)79 206 91 47<br/>
						david@maisondurable.ch<br/><br/>
					</div>
					<div class="col">
						<span class="bold">Savioz</span> Frédéric<br/>
						+41 (0)79 290 27 50<br/>
						fred@maisondurable.ch<br/><br/>
					</div>
					<div class="col">
						<span class="bold">Cotture</span> Fabrice<br/>
						+41 (0)79 648 74 40<br/>
						fabrice@maisondurable.ch<br/><br/>
					</div>
					<div class="col">
						MAISON DURABLE SA<br/>
						Rte de Zinal 106, 3961 Ayer<br/>
						 Rte du St-Bernard 20, 1937 Orsières<br/>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="inner">
				<div class="flex-bottom">
					<div class="mape">
						<h4><?php echo $adresse2['address']; ?></h4>
						<div id="map"></div>
					</div>
					<div class="mape">
						<h4><?php echo $adresse1['address']; ?></h4>
						<div id="map2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="site-footer">
	<div class="pointer">
		<img src="<?php bloginfo('template_url'); ?>/img/pointer_2.png" alt="contactez maisondurable.ch">
	</div>
	<div class="bg">
		CONTACTS
	</div>
</footer>
</body>
</html>