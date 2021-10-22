function ubah(warna) {
    var value = warna.value;
    if (value === 'theme-light'){
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
    }else if (value === 'theme-dark'){
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
    }else if (value === 'theme-brown'){
        document.body.style.backgroundColor = "Chocolate";
        document.body.style.color = "white";
    }else if (value === 'theme-blue'){
        document.body.style.backgroundColor = "blue";
        document.body.style.color = "yellow";
    }else if (value === 'theme-green'){
        document.body.style.backgroundColor = "green";
        document.body.style.color = "white";
    }
}
function cuacanya(cuaca) {
    var value = cuaca.value;
    if (value == "rainy"){
        document.getElementById("weather").innerHTML = "<p>Rainy. Diluar sedang hujan, bawa payung atau jas hujan.</p>";
    }else if (value == "sunny"){
        document.getElementById("weather").innerHTML = "<p>Sunny. Diluar cuacanya cerah, ke pantai adalah pilihan yang tepat.</p>";
    }else if(value == "snowing"){
        document.getElementById("weather").innerHTML = "<p>Snowing. Diluar sedang turun salju , jangan lupa gunakan jaket tebal.</p>";
    }else if(value == "overcast"){
        document.getElementById("weather").innerHTML = "<p>Overcast. Diluar sedang mendung, sedia payung sebelum hujan.</p>";
    }else{
        document.getElementById("weather").innerHTML = "";
    }
    
}

function faktorial(jum) {
    if (jum === 0 || jum === 1) {
        return 1;
    }
    for (var i = jum - 1; i >= 1; i--) {
        jum *= i;
    }
    return jum;
}

function jawaban() {
    var angka = document.getElementById('angka').value;
    document.getElementById("fact").innerHTML = "<p>The factorial of " + angka + " is " + faktorial(angka) +  "</p>";
}