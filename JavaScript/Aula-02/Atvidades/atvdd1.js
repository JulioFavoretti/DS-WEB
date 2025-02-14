
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


//Inicio questão 4
function SomaPor(){
    var Num = document.getElementById("Numero").value;
    var Num = Number(Num);
    var Porcent = document.getElementById("Porcen").value;
    var Porcent = Number(Porcent);
    var ResulNumber =  Num + (Num * Porcent / 100);    
    document.getElementById("ResultPorcen").innerHTML = ResulNumber;
}
//Fim questão 4


//Inicio questão 5
function MudeCor() {
    var DivPai = document.getElementById('DivOne');

    if (DivPai.style.background === 'red') {
        DivPai.style.background = 'lightblue';
    } 
    else if (DivPai.style.background === 'lightblue') { // Corrigido para else if
        DivPai.style.background = 'lightgreen'; // Corrigida a cor
    } 
    else {
        DivPai.style.background = 'red';
    }
}
//Fim questão 5


//Inicio questão 6
function Menor_Maior(){
    var Idade = document.getElementById("Idade").value;
    var Idade = Number(Idade);
    
    var resultIdade = "";

    if (Idade <= 0) {
        resultIdade = "Não existe idade negativa!";
    } else if (Idade > 120) {
        resultIdade = "Idade muito avançada, com poucas possibilidades de ser verdadeira!";
    } else if (Idade >= 18) {
        resultIdade = "Você é maior de idade";
    } else {
        resultIdade = "Você é menor de idade";
    }


    document.getElementById("ResultIdade").innerHTML = resultIdade;
}
//Fim questão 6


//Inicio questão 7
function Posi_Nega(){
    var Pos_Neg = document.getElementById("Positivo_Negativo").value;
    var Pos_Neg = Number(Pos_Neg);
    
    var resultPosNeg = "";

    if (Pos_Neg == 0) {
        resultPosNeg = "O número inserido é 0!";
    } else if (Pos_Neg > 0) {
        resultPosNeg = "O número inserido é positivo!";
    } else if (Pos_Neg < 0) {
        resultPosNeg = "O número inserido é negativo";
    } 

    document.getElementById("ResultPosi").innerHTML = resultPosNeg;
}
//Fim questão 7 


//Inicio questão 8
function Verific(){
    var VeriUsu = document.getElementById("usuario").value;
    var VerSenha = document.getElementById("senha").value;

    var Login = ""; 

    if (VeriUsu == "admin" && VerSenha == "12345" ) {
        Login = "Nome de Usuário e Senha Estão Corretos!!!";
    } 
    else {
        Login = "Nome de Usuário ou Senha Estão Incorretos :(";
    }
    document.getElementById("Usu_Senha").innerHTML = Login;
}
//Fim questão 8


//Inicio questão 9
function Calculadora(){
    var N1 = document.getElementById("n1").value;
    var N1 = Number(N1);
    var N2 = document.getElementById("n2").value;
    var N2 = Number(N2);
    var Op = document.getElementById("Opera").value; 

    var resulT = "";

    if (Op == "+"){
        resulT = N1 + N2
    }
    else if (Op == "-"){
        resulT = N1 - N2
    }
    else if (Op == "*"){
        resulT = N1 * N2
    }
    else if (Op == "/"){
        if (N2 != 0){
            resulT = N1/N2
        }
        else{
            resulT = "Número divido por zero indefinido"
        }
    }
    else{
        resulT = "Operação inválida, utilize *, /, + ou -"
    }

    document.getElementById("Resultado_Calculadora").innerHTML = resulT;
}
//Fim questão 9


//Inicio questão 10
function im_par(){
    var numeroX = document.getElementById("Im_Par").value;
    var numeroX = Number(numeroX);
    
    var resX = "";
    
    if (numeroX % 2 == 0){
        resX = "Seu Número é Par"
    }else{
        resX = "Seu Número é Ímpar"
    }
    document.getElementById("CalcuImpar").innerHTML = resX;
}
//Fim questão 10


//Inicio questão 11
function Maior(){
    var Num1 = document.getElementById("NUM1").value;
    var Num1 = Number(Num1);

    var Num2 = document.getElementById("NUM2").value;
    var Num2 = Number(Num2);

    var Num3 = document.getElementById("NUM3").value;
    var Num3 = Number(Num3);
    
    var MaiorX = "";
    
    if (Num1 > Num2 && Num1 > Num3){
        MaiorX = "O maior número é: " + Num1;
    }
    else if (Num2 > Num1 && Num2 > Num3){
        MaiorX = "O maior número é: " + Num2;
    }
    else if (Num3 > Num2 && Num3 > Num1){
        MaiorX = "O maior número é: " + Num3;
    }
    
    document.getElementById("CalcuMaior").innerHTML = MaiorX;
}
//Fim questão 11


//Inicio questão 12
function Triangulo(){
    var C1 = document.getElementById("Comp1").value;
    var C1 = Number(C1);

    var C2 = document.getElementById("Comp2").value;
    var C2 = Number(C2);

    var C3 = document.getElementById("Comp3").value;
    var C3 = Number(C3);
    
    var Triangulo = "";
    
    if ((C1 + C2 > C3 || C1 + C3 > C2 || C3 + C2 > C1) && (C1 == C2 && C1 == C3)){
        Triangulo = "Esse Triângulo é Um Triãngulo Equilátero "
    }
    else if ((C1 + C2 > C3 || C1 + C3 > C2 || C3 + C2 > C1) && (C1 != C2 && C1 != C3 && C3 != C2)){
        Triangulo = "Esse Triângulo é Um Triãngulo Escaleno  "
    }
    else if ((C1 + C2 > C3 || C1 + C3 > C2 || C3 + C2 > C1) && (C1 == C2 && C1 != C3 || C1 == C3 && C1 != C2 || C3 == C2 && C3 != C1 )){
        Triangulo = "Esse Triângulo é Um Triãngulo Isósceles  "
    } else{
        Triangulo = "Não é um Triângulo"
    }

    
    
    document.getElementById("CalcuTriangulo").innerHTML = Triangulo;
}
//Fim questão 12