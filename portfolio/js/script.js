var style_map = [
  {
    "featureType": "administrative",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "color": "#90A1BF" }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ffffff" }
    ]
  }
];

var style_map_zoomed = [
  {
    "featureType": "administrative",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "color": "silver" }
    ]
  },{
      featureType: "water",
      stylers:[
          {visibility: "on"}
      ]
  },
  {
      featureType: "landscape",
      stylers:[
          {visibility: "on"},
          {color: "#fff"}
      ]
  }
];

var styled_map = new google.maps.StyledMapType(style_map, {name: "Map style"});
var styled_map_zoomed = new google.maps.StyledMapType(style_map_zoomed, {name: "Map style zoomed"});

//Create the variables that will be used within the map configuration options.
//The latitude and longitude of the center of the map.
//The degree to which the map is zoomed in. This can range from 0 (least zoomed) to 21 and above (most zoomed).
var mapZoom = 13;
var mapZoomMax = 18;
var mapZoomMin = 4;

//Create the variable for the main map itself.
var map;
var gMarker;
var gGeocoder;


//When the page loads, the line below calls the function below called 'loadmap' to load up the map.
google.maps.event.addDomListener(window, 'load', loadMap);


//THE MAIN FUNCTION THAT IS CALLED WHEN THE WEB PAGE LOADS--------------------------------------------------------------------------------
function loadMap() {


var elementPosition = $('#position').offset();

$(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top){
              $('#position').css('position','fixed').css('top','0');
        } else {
            $('#position').css('position','static');
        }    
});


var mapCenter = new google.maps.LatLng( 50.633333, 5.566667);

var mapOptions = { 
      center:mapCenter, 
          zoom: mapZoom,
      maxZoom:mapZoomMax,
      scrollwheel:false,
      minZoom:mapZoomMin,
      panControl: false,
      disableDefaultUI:true,
      backgroundColor: "rgba(0,0,0,0)",
      mapTypeControl: false,
       mapTypeControlOptions: {
        mapTypeIds: [ 'map_styles', 'map_styles_zoomed']
       }
};

  
//The variable to hold the map was created above.The line below creates the map, assigning it to this variable. The line below also loads the map into the div with the id 'festival-map' (see code within the 'body' tags below), and applies the 'mapOptions' (above) to configure this map. 
map = new google.maps.Map(document.getElementById("map"), mapOptions); 

gGeocoder = new google.maps.Geocoder;

gMarker = new google.maps.Marker( {
      position:mapCenter,
      map:map
    } );

//Assigning the two map styles defined above to the map.
map.mapTypes.set('map_styles', styled_map);
map.mapTypes.set('map_styles_zoomed', styled_map_zoomed);
//Setting the one of the styles to display as default as the map loads.
map.setMapTypeId('map_styles_zoomed');


}

