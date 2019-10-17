var mymap = L.map('contactMap').setView([28.5606, -82.099130], 10);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1IjoiY3NjaHVsejk5NiIsImEiOiJjazF2M3hpeG0wMGNhM2NzNzJhN3ZvaTM3In0.QlRPqISebD9UWGsv-Ad49A'
}).addTo(mymap);

var marker = L.marker([28.5606, -82.099130]).addTo(mymap);