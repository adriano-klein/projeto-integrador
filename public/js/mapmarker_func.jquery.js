		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "-23.5993424", "longitude":"-46.6828156", "icon": "img/map-marker.png"}
			]
		};
		
		//set up map options
		$(".map_contact").mapmarker({
			zoom	: 14,
			center	: 'Covent Garden London',
			markers	: myMarkers
		});

