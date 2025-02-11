//window.document.write(window.document.URL);

//Peimeiro exemplo  
var p1 = window.document.getElementsByTagName('p')[0]
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText;

//Segundo exemplo 
document.getElementById("teste").innerHTML = "Hello World";

//Terceiro exemplo
var classes = document.getElementsByClassName("exemplo"); 
classes[0].innerHTML = "Hello World!";

//Quarto xemplo
document.querySelector("p#paragrafo").style.backgroundColor = "blue"   

var paragrafo = document.querySelector("p").style; 
paragrafo.background= "red";
paragrafo.color = "white";

function alertaDeclique(){
    alert("Você clicou no botão")
}

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;

    //convertendo string para numeros
    console.log(typeof numero1);
    
    var numero1 = Number.parseInt(numero1);
    var numero2 = Number.parseInt(numero2);
    console.log(typeof numero1)

    var resultado = numero1 + numero2;

    document.getElementById("resultado").innerHTML = "Resultado: " + resultado;
}