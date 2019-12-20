    //Positionsabfrage
    if(navigator.geolocation){
        navigator.geolocation.watchPosition(position => {
            console.log(position.coords.latitude);
            console.log(position.coords.longitude);
            console.log(position.coords.accuracy);
            console.log("----------------------------");    
        }, 
        error,
        {
            enableHighAccuracy: true
        })
    }
    function error(error){
        switch(error.code) {
        case error.PERMISSION_DENIED:
            console.log("Benutzer lehnte Standortabfrage ab.");
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Standortdaten sind nicht verfügbar.");
            break;
        case error.TIMEOUT:
            console.log("Die Standortabfrage dauerte zu lange (Time-out).");
            break;
        case error.UNKNOWN_ERROR:
            console.log("unbekannter Fehler.");
            break;
        }
    }