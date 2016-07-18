jQuery(function($) {'use strict',

	//Countdown js
	 $("#countdown").countdown({
			date: "10 july 2017 12:00:00",
			format: "on"
		},

		function() {
			// callback function borrrar despues de probar
		});



	//Scroll Menu

	function menuToggle()
	{
		var windowWidth = $(window).width();

		if(windowWidth > 767 ){
			$(window).on('scroll', function(){
				if( $(window).scrollTop()>405 ){
					$('.main-nav').addClass('fixed-menu animated slideInDown');
				} else {
					$('.main-nav').removeClass('fixed-menu animated slideInDown');
				}
			});
		}else{

			$('.main-nav').addClass('fixed-menu animated slideInDown');

		}
	}

	menuToggle();


	// Carousel Auto Slide Off
	$('#event-carousel, #twitter-feed, #sponsor-carousel ').carousel({
		interval: false
	});


	// Contact form validation
	var form = $('.contact-form');
	form.submit(function () {'use strict',
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	$( window ).resize(function() {
		menuToggle();
	});

	$('.main-nav ul').onePageNav({
	    currentClass: 'active',
	    changeHash: false,
	    scrollSpeed: 900,
	    scrollOffset: 0,
	    scrollThreshold: 0.3,
	    filter: ':not(.no-scroll)'
	});
		//PrettyPhoto
	$("a.preview").prettyPhoto({
		social_tools: false
	});


});


/* Google Map Customization
(function(){

	var map;

	map = new GMaps({
		el: '#gmap',
		lat: 10.4944519,
		lng: -66.8685533,
		scrollwheel:false,
		zoom: 16,
		zoomControl : false,
		panControl : false,
		streetViewControl : false,
		mapTypeControl: false,
		overviewMapControl: false,
		clickable: false
	});

	var image = 'images/map-icon.png';
	map.addMarker({
		lat: 10.4944519,
		lng: -66.8685533,
		icon: image,
		animation: google.maps.Animation.DROP,
		verticalAlign: 'bottom',
		horizontalAlign: 'center',
		backgroundColor: '#3e8bff',
	});


	var styles = [

	{
		"featureType": "road",
		"stylers": [
		{ "color": "#b4b4b4" }
		]
	},{
		"featureType": "water",
		"stylers": [
		{ "color": "#d8d8d8" }
		]
	},{
		"featureType": "landscape",
		"stylers": [
		{ "color": "#f1f1f1" }
		]
	},{
		"elementType": "labels.text.fill",
		"stylers": [
		{ "color": "#000000" }
		]
	},{
		"featureType": "poi",
		"stylers": [
		{ "color": "#d9d9d9" }
		]
	},{
		"elementType": "labels.text",
		"stylers": [
		{ "saturation": 1 },
		{ "weight": 0.1 },
		{ "color": "#000000" }
		]
	}

	];

	map.addStyle({
		styledMapName:"Styled Map",
		styles: styles,
		mapTypeId: "map_style"
	});

	map.setStyle("map_style");
}());*/

	//Isotope
	$(window).load(function(){
		$portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : 'li',
			layoutMode : 'fitRows'
		});
		$portfolio_selectors = $('.portfolio-filter >li>a');
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	//carrusel

		$(document).ready(function(){
			$("#carrusel").bxSlider({
				adaptiveHeight: true,
				slideWidth: 929
			});
		});

		//login hide show

		$(document).ready(function() {
			$("#sesion").hide();
    		$(".conectar").click(function(){
    			$(".conectar").hide('slow');
    			$("#sesion").show('slow');

    		})

    	});

    	// registrar enlace

    	$(document).ready(function(){
    		$("#acorde").load("conect/down.php?cmd=acorde");
    		$("#tablatura").load("conect/down.php?cmd=tablatura");
    		$("#guitarpro").load("conect/down.php?cmd=guitarpro");
    		$("#cover").load("conect/down.php?cmd=cover");
    		$("#software").load("conect/down.php?cmd=software");
    	});

    	// correo

    	$(document).ready(function(){
    		$("#submit").click(function(){
    			var name = $("#name").val();
    			var email = $("#email").val();
    			var subject = $("#subject").val();
    			var message = $("#message").val();

    			var varData = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;

    			console.log(varData);

    			$.ajax({
    				url: 'sections/sendemail.php',
    				type: 'POST',
    				data: varData,
    				success: function(){
    					alert("enviado");
    					$("#name").empty();
    					$("#email").empty();
    					$("#subject").empty();
    					$("#message").empty();
    				}
    			})


    		});

    	});

    	$(document).ready(function(){
		$("#myCarousel").carousel({interval: false});

	});
    	$(document).ready(function(){
		$("#myCarousel1").carousel({interval: false});

	});
    	$(document).ready(function(){
		$("#myCarousel2").carousel({interval: false});

	});