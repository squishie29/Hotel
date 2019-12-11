function formValidation() {
    var id = Number(document.registration.idH.value);
    var nomHotel = document.registration.nomHotel.value;
    var nbEtoils = document.registration.nbEtoils.value;
    var nbChambre = document.registration.nbChambre.value;
    var note = document.registration.note.value;


    var reId = new RegExp("^[0-9]{1,}$");
    var reNom = new RegExp("^[0-9a-zA-Z ]+$");
    var reEt = new RegExp("^[1-7]$");
    var reNbc = new RegExp("^[0-9]{1,}$");
    var reNote = new RegExp("^(10|[0-9])$");
    if (reId.test(id)==false) {
        alert("Valider l ID");
        return false;
    }
    
    if (reNom.test(nomHotel)==false) {
        alert("Valider nom hotel");
        return false;
    } 
    
    if (reEt.test(nbEtoils)==false) {
        alert("Valider nombre etoils");
        return false;
    }
    
    if (reNbc.test(nbChambre)==false) {
        alert("Valider nombre chambres");
        return false;
    }
    
    if (reNote.test(note)==false) {
        alert("Valider note du hotel");
        return false;
    }
}
