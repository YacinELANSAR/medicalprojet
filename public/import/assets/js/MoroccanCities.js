const majorCitiesInMorocco = [
    "Ad Dakhla", "Ad Darwa", "Agadir", "Aïn Harrouda", "Ait Melloul", "Ait Ourir", "Al Aaroui", "Al Fqih Ben Çalah",
    "Al Hoceïma", "Al Khmissat", "Azemmour", "Azrou", "Barrechid", "Ben Guerir", "Beni Mellal", "Beni Yakhlef",
    "Berkane", "Béni Mellal", "Bouskoura", "Boujad", "Casablanca", "El Aïoun", "El Jadid", "El Kelaa des Srarhna",
    "Errachidia", "Fès", "Fnidq", "Guelmim", "Guercif", "Inezgane", "Jerada", "Kenitra", "Khénifra", "Kouribga",
    "Ksar El Kebir", "Larache", "Laâyoune", "Martil", "M'diq", "Mediouna", "Meknès", "Midalt", "Mohammedia",
    "Moulay Abdallah", "Mrirt", "My Drarga", "Nador", "Oued Zem", "Oujda-Angad", "Oulad Teïma", "Ouezzane", "Rabat",
    "Safi", "Settat", "Sefrou", "Sidi Bennour", "Sidi Qacem", "Sidi Slimane", "Sidi Yahya Zaer", "Skhirate",
    "Taourirt", "Taza", "Temara", "Temsia", "Tétouan", "Youssoufia", "Zagora"
];



function populateMajorMoroccanCities() {
    const citySelect = document.getElementById("citySelectMorocco");

  
    citySelect.innerHTML = "";

   
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Select a city";
    citySelect.appendChild(defaultOption);

    majorCitiesInMorocco.forEach((city,i) => {
        const option = document.createElement("option");
        option.value =i ;
        option.textContent = city;
        citySelect.appendChild(option);
    });

   
    
}


populateMajorMoroccanCities();
