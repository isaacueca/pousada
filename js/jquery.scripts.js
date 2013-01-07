$(window).load(function() {
	// Homepage Slider
	
	$('#home-slider').flexslider({
		controlNav: false,
		start: function(slider){
			var src = slider.slides.eq(0).find('img').attr('alt');
			$('.flex-captions p').html(src);
		},
		after: function(slider){
			var src = slider.slides.eq(slider.currentSlide).find('img').attr('alt');
			$('.flex-captions p').html(src);
		}
	});
	
	$('#home-slider .flex-direction-nav, #home-slider .flex-captions').wrapAll('<div class="flex-utils container" />');
	
	$('#room-carousel').flexslider({
		animation: "slide",
		animationLoop: true,
		slideshow: false,
		itemWidth: 223,		
		asNavFor: '#room-gallery'
	});
	
	$('#room-gallery').flexslider({
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#room-carousel"
	});	
});

jQuery(document).ready(function ($) {
	



    // Populate dropdown with menu items
    $("#navigation a").each(function() {
     var el = $(this);
     $("<option />", {
         "value"   : el.attr("href"),
         "text"    : el.text()
     }).appendTo("nav select");
    });

    $("#navigation select").change(function() {
      window.location = $(this).find("option:selected").val();
    });
	

    
	// Google Maps code
	if( $('#map').length > 0)
	{
		var firstLocation = new google.maps.LatLng(36.23,25.27);
		//center map to first event
		var myOptions = {
			zoom: 8,
			center: firstLocation,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			streetViewControl: false,
			mapTypeControl: false
		};
		var map = new google.maps.Map(document.getElementById("map"), myOptions);
	} //end if( $('.map').length > 0)
	
	//Fancybox
	if( $('.fb').length > 0) {
	$(".fb").fancybox({
		padding 	: 0,
		helpers	: {
			title	: {
				type: 'outside'
			},
			overlay	: {
				opacity : 0.8,
				css : {
					'background-color' : '#000'
				}
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	}
	
	//Block hover
	if( $('.block .fb').length > 0) {
	$(".block .fb").hover(
	  function () {
	  	var o = $(this).find('.overlay');
	  	o.fadeIn('fast');
	  },
	  function () {
	    $(this).find('.overlay').fadeOut('fast');
	  });	
	 }
    
});
