function registrujSe(){
    var imeIPrezime = document.getElementById("imeIPrezime").value;
    var lozinka = document.getElementById("lozinka").value;
    var potvrdiLozinku=document.getElementById("potvrdiLozinku").value;
    var jacinaLozinke = proveriPass(lozinka);
    var radio = dohvatiRadio();
    var mesto = document.getElementById("mesto").value;
    if(proveriUslov() && lozinka==potvrdiLozinku){
        location.href="index.php";
        alert("Ime: " + imeIPrezime + "\nPassword: " + lozinka +"\nJacina lozinke: " + jacinaLozinke+"\nVas pol: " + radio + "\nVas grad: " + mesto + "\n");
    }
    else{
        location.href="prijava.php";
        alert("Lozinke se ne poklapaju ili niste prihvatili uslove korišćenja!");
    }
    
    
}

function proveriPass(lozinka){
if(lozinka.length < 10){
    return "Slaba lozinka";
    
}
else if(lozinka.length < 20){
    return "Srednja lozinka";
}
else{
    return "Jaka lozinka";
}
}

function dohvatiRadio(){
var r1 = document.getElementById("rb1").value;
var r2 = document.getElementById("rb2").value;
if(document.getElementById("rb1").checked){
    return r1;
}
else{
    return r2;
}
}

function proveriUslov(){
var check = document.getElementById("usloviKoriscenja");
if(check.checked){
    
    return true;
}
else{
   
    return false;
}
}

// navbar togglemenu start
var navLinkovi = document.getElementById("navLinkovi");

function showMenu() {
navLinkovi.style.right = "0";
}

function hideMenu() {
navLinkovi.style.right = "-200px";
}
// navbar togglemenu end
