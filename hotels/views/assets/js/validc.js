function formValidation() {
    var id = document.registration.idCh;
    var prix = document.registration.prix;
    var typeC = document.registration.typeC;
    var nbBed = document.registration.nbBed;
    
    if (allnumeric(id)) {
        if (alphanumericB(nbBed)) {
            if (allnumericP(prix)) {
                if (allLetter(typeC)) {
                }
            }
        }
    }
    return false;

}


function userid_validation(uid, mx, my) {
    var uid_len = uid.value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx) {
        alert("User Id should not be empty / length be between " + mx + " to " + my);
        uid.focus();
        return false;
    }
    return true;
}


/*function passid_validation(passid, mx, my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 || passid_len >= my || passid_len < mx) {
        alert("Password should not be empty / length be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    return true;
}*/

function allLetter(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters)) {
        return true;
    } else {
        alert('Erreur type');
        uname.focus();
        return false;
    }
}

function alphanumeric(uadd) {
    var letters = /^[0-9a-zA-Z]+$/;
    if (uadd.value.match(letters)) {
        return true;
    } else {
        alert('Erreur nom hotel');
        uadd.focus();
        return false;
    }
}

/*function countryselect(ucountry) {
    if (ucountry.value == "Default") {
        alert('Select your country from the list');
        ucountry.focus();
        return false;
    } else {
        return true;
    }
}*/

function allnumeric(uzip) {
    var numbers = /^[0-9]+$/;
    if (uzip.value.match(numbers)) {
        return true;
    } else {
        alert('Erreur ID');
        uzip.focus();
        return false;
    }
}

function allnumericP(uzip) {
    var numbers = /^[0-9]+$/;
    if (uzip.value.match(numbers)) {
        return true;
    } else {
        alert('Erreur Prix');
        uzip.focus();
        return false;
    }
}

function allnumericBuzip) {
    var numbers = /^[0-10]+$/;
    if (uzip.value.match(numbers)) {
        return true;
    } else {
        alert('Erreur Mobre de lits');
        uzip.focus();
        return false;
    }
}

function allnumericE(uzip) {
    var numbers = /^[1-7]+$/;
    if (uzip.value.match(numbers)) {
        return true;
    } else {
        alert('Erreur nombre etoils');
        uzip.focus();
        return false;
    }
}

/*function ValidateEmail(uemail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}*/

/*function validsex(umsex, ufsex) {
    x = 0;

    if (umsex.checked) {
        x++;
    }
    if (ufsex.checked) {
        x++;
    }
    if (x == 0) {
        alert('Select Male/Female');
        umsex.focus();
        return false;
    } else {
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
}*/
