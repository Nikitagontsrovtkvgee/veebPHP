function valiMuusikud() {
    var tekst = "Sinu valitud muusikud: ";
    var muusik1 = document.getElementById("queen");
    var muusik2 = document.getElementById("beatles");
    var muusik3 = document.getElementById("abba");
    var muusik4 = document.getElementById("metallica");

    if (muusik1.checked == true) tekst = tekst + muusik1.value + ", ";
    if (muusik2.checked == true) tekst = tekst + muusik2.value + ", ";
    if (muusik3.checked == true) tekst = tekst + muusik3.value + ", ";
    if (muusik4.checked == true) tekst = tekst + muusik4.value;

    document.getElementById("vastus1").innerHTML = tekst;
}

function arvamusMuusikast() {
    var arvamusTekst = document.getElementById("arvamus").value;
    document.getElementById("vastus2").innerHTML = "Sinu arvamus: " + arvamusTekst;
}

function kuulamisAeg() {
    var tunnid = document.getElementById("tunnid").value;
    document.getElementById("vastus3").innerHTML = "Sa kuulad muusikat " + tunnid + " tundi päevas.";
}

function raadioKuulamine() {
    var jah = document.getElementById("jah");
    var ei = document.getElementById("ei");
    var tekst = "Raadio kuulamine: ";

    if (jah.checked == true) tekst = tekst + "jah";
    else if (ei.checked == true) tekst = tekst + "ei";

    document.getElementById("vastus4").innerHTML = tekst;
}

function raadioJaamad() {
    var jaamad = document.getElementById("jaamad").value;
    document.getElementById("vastus5").innerHTML = "Sinu nimetatud jaamad: " + jaamad;
}

function muusikaStiil() {
    var stiil = document.getElementById("stiil").value;
    document.getElementById("vastus6").innerHTML = "Sinu vastus: " + stiil;
}

function saadaAndmed() {
    var kokku = "KOKKUVÕTE:<br>";
    kokku = kokku + document.getElementById("vastus1").innerHTML + "<br>";
    kokku = kokku + document.getElementById("vastus2").innerHTML + "<br>";
    kokku = kokku + document.getElementById("vastus3").innerHTML + "<br>";
    kokku = kokku + document.getElementById("vastus4").innerHTML + "<br>";
    kokku = kokku + document.getElementById("vastus5").innerHTML + "<br>";
    kokku = kokku + document.getElementById("vastus6").innerHTML;

    document.getElementById("kokkuvote").innerHTML = kokku;
}

function puhastaAndmed() {
    document.getElementById("queen").checked = false;
    document.getElementById("beatles").checked = false;
    document.getElementById("abba").checked = false;
    document.getElementById("metallica").checked = false;
    document.getElementById("arvamus").value = "";
    document.getElementById("tunnid").value = "";
    document.getElementById("jah").checked = false;
    document.getElementById("ei").checked = false;
    document.getElementById("jaamad").value = "";
    document.getElementById("stiil").value = "";

    document.getElementById("vastus1").innerHTML = "Sinu valitud muusikud:";
    document.getElementById("vastus2").innerHTML = "Sinu arvamus:";
    document.getElementById("vastus3").innerHTML = "Sa kuulad muusikat ...";
    document.getElementById("vastus4").innerHTML = "Raadio kuulamine:";
    document.getElementById("vastus5").innerHTML = "Sinu nimetatud jaamad:";
    document.getElementById("vastus6").innerHTML = "Sinu vastus:";
    document.getElementById("kokkuvote").innerHTML = "";
}
