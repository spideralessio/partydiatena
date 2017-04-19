(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
  $(document).ready(function() {
    $('select').material_select();
  });
})(jQuery); // end of jQuery name space
function initAutocomplete() {

	// Create the search box and link it to the UI element.
	var input = document.getElementById('place-input');
	var searchBox = new google.maps.places.SearchBox(input);
	// Listen for the event fired when the user selects a prediction and retrieve
	// more details for that place.
	searchBox.addListener('places_changed', function() {
	  var places = searchBox.getPlaces();

	  if (places.length == 0) {
	    return;
	  }

	  

	  // For each place, get the icon, name and location.
	  var bounds = new google.maps.LatLngBounds();
	  places.forEach(function(place) {
	    if (!place.geometry) {
	      console.log("Returned place contains no geometry");
	      return;
	    }
	    console.log(place.geometry.location.lat());
        console.log(place.geometry.location.lng());
        console.log(input.value);
        location.href="?lat="+place.geometry.location.lat()+"&lng="+place.geometry.location.lng()+"&name="+input.value;
	  });
	});
}
