function formValidation() {
    var id = Number(document.registration.id.value);
    var note = document.registration.pourcentage.value;


    var reId = new RegExp("^[0-9]{1,}$");
    if (reId.test(id)==false) {
        alert("Valider l ID");
        return false;
    }
    
    
    if (reId.test(note)==false) {
        alert("Valider pourcentage");
        return false;
    }
}
