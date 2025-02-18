// Initialisation de la carte
const map = L.map('map').setView([45.883331, 5.28333], 10); // Coordonnées de Sainte-Julie 01150

// Ajouter une couche OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Définition de la zone couverte (cercle)
const zoneCouverte = L.circle([45.883331, 5.28333], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 30000 // Rayon en mètres (30 km)
}).addTo(map);

// Ajouter une info-bulle sur la zone
zoneCouverte.bindPopup("Zone de couverture de nos prestations.");

