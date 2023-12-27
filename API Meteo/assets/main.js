const klapi = "839040fc8e8dbb4e68f4df8b99266c2f";
if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(position => { 
        let altt = position.coords.latitude
        let lan = position.coords.longitude
        console.log(altt , lan)
        appelAPI(altt, lan)
    })
}
function appelAPI(altt, lan){
    fetch(`https://api.openweathermap.org/data/3.0/onecall?lat=${altt}&lon=${lan}&exclude=minutely&units=metric&lang=fr&appid=${klapi}`)
    .then ((reponse) => {
    
       console.log(reponse.json)
    })
    .then ((data) => {
        console.log(data)
     })
}