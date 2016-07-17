$(function() {

	$('#maCarte').gmap3({
		action: 'addMarker',
		latLng:[48.031494, -1.317329],
		map:{
			center: true,
			zoom: 9
		},
		marker:{
			options:{
				draggable: false
			}
		},
/*
		infowindow:{
			options:{
				content: 'Pergola Clubs Multiplex'
			},
			events:{
				closeclick: function(){
					alert("closing : " + $(this).attr("id")); 
				}
			}
		}
*/
	});

});