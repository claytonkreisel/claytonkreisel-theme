//Bind the World Traveler Game
bindWorldTraveler();

function bindWorldTraveler(){
  jQuery('html, body').on('modalLoad', function(){
    $('#map').vectorMap({map: 'africa_mill'});
  });
}
