function formValidation() {
    var id = document.registration.idCh;
    var prix = document.registration.prix;
    var typeC = document.registration.typeC;
    var nbBed = document.registration.nbBed;
    
    var reId = new RegExp("^[0-9]{1,}$");
    var reNom = new RegExp("^[0-9a-zA-Z ]+$");
    var reEt = new RegExp("^[1-7]$");
    var reNbc = new RegExp("^[0-9]{1,}$");
    var reNote = new RegExp("^(10|[0-9])$");
    
    if (reId.test(id)==false) {
        alert("Valider l ID");
        return false;
    }
    
    if (reNom.test(typeC)==false) {
        alert("Valider Type");
        return false;
    } 
    
    if (reId.test(prix)==false) {
        alert("Valider PRIX");
        return false;
    }
    
    if (reId.test(nbBed)==false) {
        alert("Valider nombre lits");
        return false;
    }

}
