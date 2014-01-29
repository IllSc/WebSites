var Site = {

	init: function(){
		$('html').removeClass('no-js');
		if($('#zoom').length){
			Site.zoom();
		}
		if($('#map').length){
			Site.map();
		}

	},
	zoom: function(){
		$('#zoom').elevateZoom({
			  // zoomType				: "inner",
  			// cursor: "crosshair"

			 zoomWindowWidth:500,
			 zoomWindowHeight:500,
			 easing:true
		});
	},
	map : function(){
		var peta =new GMaps({
  		div: '#map',
  		lat: -6.359896,
  		lng: 106.827761
		});
		peta.addMarker({
  		lat: -6.359896,
  		lng: 106.827761,
  		title: 'Fasilkom',
  		click: function(e) {
    	alert('Viva Fasilkom!');
  		}
		});


	}

};

$(function (){
	Site.init();
});