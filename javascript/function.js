function confirmeFormulaire(){
    
    if(confirm('Etes-vous sur de vouloir enregistrer ce formulaire?')==true){
        if(verificationFormulaire()){

            return true;
        }else {
            return false;
        }

    }else{
        return false;
    }
}


function confirmeFormulairePassword(){
    
    if(confirm('Etes-vous sur de vouloir remplacer votre mot de passe?')==true){
        if(verificationFormulairePassword()){

            return true;
        }else {
            return false;
        }

    }else{
        return false;
    }
}

function verificationFormulairePassword(){
    var compteur = 0;
    var identifiant = document.getElementById('form_login').value;
    var email = document.getElementById('form_mail').value;


    //test de l'identifiant
    if(identifiant == ''){
        alert('Veuillez saisir votre identifiant');
        return false;
    }else{
        var regExpIdentifiant = new RegExp("^[a-zA-Z0-9éèà@._-]+$","g");
        var matchIdentifiant = regExpIdentifiant.exec(identifiant);
        if(matchIdentifiant==null){
            alert('Le format de l\'identifiant est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    //test de l'email
    if(email == ''){
        alert('Veuillez saisir votre adresse e-mail');
        return false;
    }else{
        var regExpEmail = new RegExp("^([a-zA-Z0-9]+(([\.\-\_]?[a-zA-Z0-9]+)+)?)\@(([a-zA-Z0-9]+[\.\-\_])+[a-zA-Z]{2,4})$","g");
        var matchEmail = regExpEmail.exec(email);
        if(matchEmail==null){
            alert('Votre adresse e-mail ne doit pas contenir de caracteres speciaux comme: \n & ? ! $ % et se terminer par fr ou com ');
            return false;
        }else{
            compteur = compteur +1;
        }
    }
    if(compteur>0){
        return true;
    }
}



function verificationFormulaire(){
    var compteur = 0;

    var nom = document.getElementById('form_nom').value;
    var prenom = document.getElementById('form_prenom').value;
    var day = document.getElementById('form_day').value;
    var month = document.getElementById('form_month').value;
    var year = document.getElementById('form_year').value;
    var identifiant = document.getElementById('form_login').value;
    var password = document.getElementById('form_password').value;
    var password2 = document.getElementById('form_password2').value;
    var email = document.getElementById('form_mail').value;


    //test du nom
    if(nom == ''){
        alert('Veuillez saisir votre nom');
        return false;
    }else{
        var regExpNom = new RegExp("^[a-zA-Z]+$","g");
        var matchNom = regExpNom.exec(nom);
        if(matchNom==null){
            alert('Le format du nom est incorrecte.');
            return false;            
        }else{
            compteur = compteur +1;
        }
    }

    //test du prenom
    if(prenom == ''){
        alert('Veuillez saisir votre prenom');
        return false;
    }else{
        var regExpPrenom = new RegExp("^[a-zA-Zéè-]+$","g");
        var matchPrenom = regExpPrenom.exec(prenom);
        if(matchPrenom==null){
            alert('Le format du prenom est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    //test du jour
    if(day == ''){
        alert('Veuillez saisir votre jour de naissance');
        return false;
    }else{
        var regExpDay = new RegExp("^([0-2][0-9]||[3][0-1])$","g");
        var matchDay = regExpDay.exec(day);
        if(matchDay == null){
            alert('Le format du jour est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    //test du mois
    if(month == ''){
        alert('Veuillez saisir votre mois de naissance');
        return false;
    }else{
        var regExpMonth = new RegExp("^([0][1-9]||[1][0-2])$","g");
        var matchMonth = regExpMonth.exec(month);
        if(matchMonth==null){
            alert('Le format du mois est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    //test de l'annee
    if(year == ''){
        alert('Veuillez saisir votre annee de naissance');
        return false;
    }else{
        var regExpYear = new RegExp("^[1-2][0-9][0-9][0-9]$","g");
        var matchYear = regExpYear.exec(year);
        if(matchYear==null){
            alert('Le format de l\'annee est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    //test de l'identifiant
    if(identifiant == ''){
        alert('Veuillez saisir votre identifiant');
        return false;
    }else{
        var regExpIdentifiant = new RegExp("^[a-zA-Z0-9éèà@._-]+$","g");
        var matchIdentifiant = regExpIdentifiant.exec(identifiant);
        if(matchIdentifiant==null){
            alert('Le format de l\'identifiant est incorrecte.');
            return false;
        }else{
            compteur = compteur +1;
        }
    }

    if(password == ''){
        alert('Veuillez saisir votre mot de passe');
        return false;
    }else{
        if(password2 == ''){
            alert('Veuillez confirmer votre mot passe');
            return false;
        }else{
            if(password != password2){
                alert('Veuillez saisir deux fois le meme mot de passe');
                return false;
            }else{
                compteur = compteur + 1;
            }
        }
    }
    //test de l'email
    if(email == ''){
        alert('Veuillez saisir votre adresse e-mail');
        return false;
    }else{
        var regExpEmail = new RegExp("^([a-zA-Z0-9]+(([\.\-\_]?[a-zA-Z0-9]+)+)?)\@(([a-zA-Z0-9]+[\.\-\_])+[a-zA-Z]{2,4})$","g");
        var matchEmail = regExpEmail.exec(email);
        if(matchEmail==null){
            alert('Votre adresse e-mail ne doit pas contenir de caracteres speciaux comme: \n & ? ! $ % et se terminer par fr ou com ');
            return false;
        }else{
            compteur = compteur +1;
        }
    }
    if(compteur>0){
        return true;
    }
}


function changeColor(ligne){
	ligne.style.backgroundColor='#FFE9D2';
}

function colorDefault(ligne,etat){
	if(etat == 'pair'){
		ligne.style.background='#D2D2FF';
	}else{
		ligne.style.background='transparent';		
	}
}

//loading
function loading(){
    document.getElementById('loading').style.display = true;
}