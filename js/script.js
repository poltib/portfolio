


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
      { "color": "silver" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "color": "#fff" }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "visibility": "on" }
    ]
  }
];



var styled_map = new google.maps.StyledMapType(style_map, {name: "Map style"});


//Create the variable for the main map itself.
var map;
var gMarker;


//When the page loads, the line below calls the function below called 'loadmap' to load up the map.
google.maps.event.addDomListener(window, 'load', loadMap);


//THE MAIN FUNCTION THAT IS CALLED WHEN THE WEB PAGE LOADS--------------------------------------------------------------------------------
function loadMap() {

var current_frame, total_frames, path, length, handle, myobj, again;

myobj = document.getElementById('myobj').cloneNode(true);

again = document.getElementById('rerun');

again.addEventListener('click', function(){
  var old = document.getElementById('myobj');
  old.parentNode.removeChild(old);
  document.getElementById('svgAnim').appendChild(myobj);
  init();
  draw();
});

var init = function() {
  current_frame = 0;
  total_frames = 300;
  path = new Array();
  length = new Array();
  for(var i=0; i<8;i++){
    path[i] = document.getElementById('i'+i);
    l = path[i].getTotalLength();
    length[i] = l;
    path[i].style.strokeDasharray = l + ' ' + l; 
    path[i].style.strokeDashoffset = l;
  }
  handle = 0;
}
 
 
var draw = function() {
   var progress = current_frame/total_frames;
   if (progress > 1) {
     window.cancelAnimationFrame(handle);
   } else {
     current_frame++;
     for(var j=0; j<path.length;j++){
       path[j].style.strokeDashoffset = Math.floor(length[j] * (1 - progress));
     }
     handle = window.requestAnimationFrame(draw);
   }
};

init();
draw();













var mapCenter = new google.maps.LatLng( 50.633333, 5.566667);

var mapOptions = { 
      center:mapCenter, 
      zoom: 14,
      scrollwheel:false,
      panControl: false,
      disableDefaultUI:true,
      backgroundColor: "rgba(0,0,0,0)",
      mapTypeControl: false,
      mapTypeControlOptions: {
        mapTypeIds: [ 'map_styles']
       }
};

  
//The variable to hold the map was created above.The line below creates the map, assigning it to this variable. The line below also loads the map into the div with the id 'festival-map' (see code within the 'body' tags below), and applies the 'mapOptions' (above) to configure this map. 
map = new google.maps.Map(document.getElementById("map"), mapOptions); 

gMarker = new google.maps.Marker( {
      position:mapCenter,
      map:map
    } );

//Assigning the two map styles defined above to the map.
map.mapTypes.set('map_styles', styled_map);
map.setMapTypeId('map_styles');

}

