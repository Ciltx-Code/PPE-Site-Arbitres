/*function preloadImages() {
    document.body.style.backgroundImage="url('images/Blur_Background.png')";
    document.body.style.backgroundImage="url('images/Background.png')";
}*/

function openForm() {
    document.getElementById("popupForm").style.display="block";
    document.getElementById("background").style.filter="blur(2px)";
    document.getElementById("popupForm").style.filter="blur(0px)";
    document.body.style.pointerEvents="none";
    document.getElementById("popupForm").style.pointerEvents="all";
}

function closeForm() {
    document.getElementById("popupForm").style.display="none";
    document.getElementById("background").style.filter="blur(0px)";
    document.body.style.pointerEvents="all";
}

function openFormMatch(){
    document.getElementById("popupFormMatch").style.display="block";
    document.getElementById("background").style.filter="blur(2px)";
    document.getElementById("popupFormMatch").style.filter="blur(0px)";
}

function closeFormMatch(){
    document.getElementById("popupFormMatch").style.display="none";
    document.getElementById("background").style.filter="blur(0px)";
}


function openFormCategorie() {
    document.getElementById("popupFormCat").style.display="block";
    document.getElementById("background").style.filter="blur(2px)";
    document.getElementById("popupFormCat").style.filter="blur(0px)";

}

function closeFormCategorie() {
    document.getElementById("popupFormCat").style.display="none";
    document.getElementById("background").style.filter="blur(0px)";
}

function openFormCategorieModif(nom, mtn) {
    var element = document.form.select;
    for(var i = 0 ; i<element.length ; i++){
        if(element[i].checked){
            var check=element[i].value;
            break;
        }
    }
    document.getElementById('nomcat1').value=nom;
    document.getElementById('mtnindemnite1').value=mtn;
    document.getElementById('num').value=check;
    document.getElementById("popupFormCatModSuppr").style.display="block";
    document.getElementById("background").style.filter="blur(2px)";
    document.getElementById("popupFormCatModSuppr").style.filter="blur(0px)";

}
function closeFormCategorieModif() {
    document.getElementById("popupFormCatModSuppr").style.display="none";
    document.getElementById("background").style.filter="blur(0px)";
}

function Afficher() {
    if(document.getElementById("myDropdown").style.display=="block"){
        document.getElementById("myDropdown").style.display="none";
    } else {
        document.getElementById("myDropdown").style.display="block";
    }
}

function openFormMatchModif(adresse, date, heure, equipe1, equipe2, arbitre1, arbitre2, mtn1, mtn2, num) {
    document.getElementById('choixSalleMod').selectedIndex=adresse;
    document.getElementById('dateMod').value=date;
    document.getElementById('heureMod').value=heure;
    document.getElementById('choixEquipe1Mod').selectedIndex=equipe1;
    document.getElementById('choixEquipe2Mod').selectedIndex=equipe2;
    document.getElementById('choixArbitre1Mod').selectedIndex=equipe1;
    document.getElementById('choixArbitre2Mod').selectedIndex=equipe2;
    document.getElementById('mtn1Mod').value=mtn1;
    document.getElementById('mtn2Mod').value=mtn2;
    document.getElementById('numMatch').value=num;
    document.getElementById("popupFormMatchModSuppr").style.display="block";
    document.getElementById("background").style.filter="blur(2px)";
    document.getElementById("popupFormMatchModSuppr").style.filter="blur(0px)";
}

function closeFormMatchModif() {
    document.getElementById("popupFormMatchModSuppr").style.display="none";
    document.getElementById("background").style.filter="blur(0px)";
}