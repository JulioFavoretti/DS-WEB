
//Inicio questão 1
function Result(){
    var nome = document.getElementById("NomeDoUsuario").value;
    
    document.getElementById("ExibirResult").innerHTML = "Seja Bem Vindo "+ nome + "!!.";
}
//Fim questão 1


//Inicio questão 2
function Calc(){
    var Numero = document.getElementById("Num").value;
    var Numero = Number.parseInt(Numero);
    var res = Numero % 2 == 0 ? 'Seu número é par' : 'Seu número é ímpar';
    document.getElementById("CalcuExi").innerHTML = res;
}
//Fim questão 2


//Inicio questão 3
function UPPCASE(){
    var texto = document.getElementById("Texto").value;
    var Resultext = texto.toUpperCase()    
    document.getElementById("TextUpp").innerHTML = Resultext;
}
//Fim questão 3




