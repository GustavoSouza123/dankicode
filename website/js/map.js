// $(function() {
// 	var map;
	
// 	function initialize() {

// 	  var mapProp = {
// 	    center:new google.maps.LatLng(-27.609959,-48.576585),
// 	    zoom:14,
// 	   	scrollwheel: false,
// 	     styles: [{
// 	    stylers: [{
// 	      saturation: -100
// 	    }]
// 	     }],
// 	    mapTypeId:google.maps.MapTypeId.ROADMAP
// 	  };
	  
// 	  map=new google.maps.Map(document.getElementById("map"),mapProp);
// 	}

// 	function addMarker(lat,long,icon,content,showInfoWindow,openInfoWindow){
// 		  var myLatLng = {lat:lat,lng:long};

// 		  if(icon === ''){
// 			   var marker = new google.maps.Marker({
// 			    position: myLatLng,
// 			    map: map,
// 			    icon:icon
// 			  });
// 		  }else{
// 			  var marker = new google.maps.Marker({
// 			    position: myLatLng,
// 			    map: map,
// 			    icon:icon
// 			  });
// 		}

// 		  var infoWindow = new google.maps.InfoWindow({
// 	                content: content,
// 	                maxWidth:200
// 	        });

// 		  google.maps.event.addListener(infoWindow, 'domready', function() {

// 		   // Reference to the DIV which receives the contents of the infowindow using jQuery
// 		   var iwOuter = $('.gm-style-iw');

// 		   /* The DIV we want to change is above the .gm-style-iw DIV.
// 		    * So, we use jQuery and create a iwBackground variable,
// 		    * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
// 		    */
// 		   var iwBackground = iwOuter.prev();

// 		   // Remove the background shadow DIV
// 		   iwBackground.children(':nth-child(2)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

// 		   // Remove the white background DIV
// 		   iwBackground.children(':nth-child(4)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

// 		   // Moves the shadow of the arrow 76px to the left margin 
// 			iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'display:none;'});

// 			// Moves the arrow 76px to the left margin 
// 			iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'display:none;'});

// 		});
// 		  	if(showInfoWindow == undefined){
// 		        google.maps.event.addListener(marker, 'click', function () {
// 		              infoWindow.open(map, marker);
// 		         });
// 	    	}else if(openInfoWindow == true){
// 	    		infoWindow.open(map, marker);
// 	    	}
// 	}

// 	//Aqui vai todo nosso código de javascript.
// 	$('nav.mobile').click(function(){
// 		//O que vai acontecer quando clicarmos na nav.mobile!
// 		var listaMenu = $('nav.mobile ul');
// 		//Abrir menu através do fadein
// 		/*
// 		if(listaMenu.is(':hidden') == true){
// 			listaMenu.fadeIn();
// 		}
// 		else{
// 			listaMenu.fadeOut();
// 		}
// 		*/

// 		//Abrir ou fechar sem efeitos
// 		/*
		
// 		if(listaMenu.is(':hidden') == true){
// 			//listaMenu.show();
// 			listaMenu.css('display','block');
// 		}
// 		else{
// 			//listaMenu.hide();
// 			listaMenu.css('display','none');
// 		}
// 		*/

// 		if(listaMenu.is(':hidden') == true){
// 			//fa fa-times
// 			//fa fa-bars
// 			//var icone =  $('.botao-menu-mobile i');
// 			var icone = $('.botao-menu-mobile').find('i');
// 			icone.removeClass('fa-bars');
// 			icone.addClass('fa-times');
// 			listaMenu.slideToggle();
// 		}
// 		else{
// 			var icone = $('.botao-menu-mobile').find('i');
// 			icone.removeClass('fa-times');
// 			icone.addClass('fa-bars');
// 			listaMenu.slideToggle();
// 		}

// 	});

// 	if($('target').length > 0){
// 		//O elemento existe, portanto precisamos dar o scroll em algum elemento.
// 		var elemento = '#'+$('target').attr('target');

// 		var divScroll = $(elemento).offset().top;

// 		$('html,body').animate({scrollTop:divScroll},2000);
// 	}



$(function() {
	var map;

	function initMap() {
		var mapProps = {
			center: new google.maps.LatLng(-23.548670, -46.638248),
			scrollwheel: true,
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementById("map"), mapProps);
	}

	function addMarker(lat, lng, icon, content, click) {
		var latLng = {lat: lat, lng: lng};

		var marker = new google.maps.Marker({
			position: latLng,
			map: map,
			icon: icon
		})

		var infoWindow = new google.maps.InfoWindow({
			content: content,
			maxWidth: 200,
			pixelOffset: new google.maps.Size(0, 20)
		})

		if(click) {
			google.maps.event.addListener(marker, 'click', function() {
				infoWindow.open(map, marker);
			})
		} else {
			infoWindow.open(map, marker);
		}
	}

	initMap();

	var content = '<p style="color:#000;font-size:14px;border-bottom:1px solid #000;">Meu endereço!</p>'
	addMarker(-23.579429, -46.522052, '', content, true);

	setTimeout(function() {
		map.panTo({lat: -23.579429, lng: -46.522052}); // changes the center of the map
		map.setZoom(14);
	}, 1000)
})