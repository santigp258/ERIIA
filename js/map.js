(function(){
    "use strict";
    document.addEventListener("DOMContentLoaded", function(){
    

var map = L.map('mapa').setView([4.396572, -76.067737], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([4.396572, -76.067737]).addTo(map)
.bindPopup('Universidad del valle- Sede Zarzal')
.openPopup();

});  //DOM CONTENT LOADED
})();
