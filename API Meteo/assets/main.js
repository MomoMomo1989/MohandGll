const klapi = "839040fc8e8dbb4e68f4df8b99266c2f";
if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(position => { 
        let altt = position.coords.latitude
        let lan = position.coords.longitude
        appelAPI(altt, lan)
    })
}

function appelAPI(altt, lan){
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${altt}&lon=${lan}&appid=${klapi}`)
    .then (reponse => reponse.json())
    .then ((data) => console.table(data))
    document.querySelector("#V1").innerHTML = data.coord; 
}